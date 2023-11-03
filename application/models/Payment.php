<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Receiving class
 */

class Payment extends CI_Model
{
	public function get_info($receiving_id)
	{
		/*$this->db->from('receivings');
		$this->db->join('people', 'people.person_id = receivings.supplier_id', 'LEFT');
		$this->db->join('suppliers', 'suppliers.person_id = receivings.supplier_id', 'LEFT');
		$this->db->where('receiving_id', $receiving_id);
*/
		$this->db->select('SUM(debit_amount) AS debit_amount, SUM(credit_amount) AS credit_amount');
		$this->db->from('supplier_ledgers');
		$this->db->where('supplier_id', $receiving_id);
		$this->db->group_by('supplier_id');
		$query = $this->db->get();
		
		if($query->num_rows() == 1)
		{
			return $query->row();
		}

	}

	public function get_receiving_by_reference($reference)
	{
		$this->db->from('receivings');
		$this->db->where('reference', $reference);

		return $this->db->get();
	}

	public function is_valid_receipt($receipt_receiving_id)
	{
		if(!empty($receipt_receiving_id))
		{
			//RECV #
			$pieces = explode(' ', $receipt_receiving_id);

			if(count($pieces) == 2 && preg_match('/(RECV|KIT)/', $pieces[0]))
			{
				return $this->exists($pieces[1]);
			}
			else
			{
				return $this->get_receiving_by_reference($receipt_receiving_id)->num_rows() > 0;
			}
		}

		return FALSE;
	}

	public function exists($receiving_id)
	{
		$this->db->from('receivings');
		$this->db->where('receiving_id', $receiving_id);

		return ($this->db->get()->num_rows() == 1);
	}

	public function update($receiving_data, $receiving_id)
	{
		$this->db->where('receiving_id', $receiving_id);

		return $this->db->update('receivings', $receiving_data);
	}

	public function save( $supplier_id, $employee_id, $comment, $reference, $payment_type, $amount_tendered = 0, $balance = 0)
	{
		
		
		$amount_tendered = ($amount_tendered==null)?0:$amount_tendered;
		$balance_amt = ($balance==null)?0:$balance;
		
		if($amount_tendered == 0 || $supplier_id == 0 || $supplier_id==null || $supplier_id =='')
		{
			return -1;
		}

		
		//Run these queries as a transaction, we want to make sure we do all or nothing
		$this->db->trans_start();

		
		$total_amt = 0;
		
		if($amount_tendered>0)
		{
			$gl_data = array(
				'ledger_time' => date('Y-m-d H:i:s'),
				'supplier_id' => $this->Supplier->exists($supplier_id) ? $supplier_id : NULL,
				'employee_id' => $employee_id,
				'reference' => 'PV',
				'debit_amount' => $amount_tendered,
				'credit_amount' => 0,
				'payment_type' => "Cash Payment",
				'balance' => $balance_amt
			);
			
	
	
			$this->db->insert('supplier_ledgers', $gl_data);

			$receiving_id = $this->db->insert_id();

		}
		if($amount_tendered<0)
		{
			
			$gl_data = array(
				'ledger_time' => date('Y-m-d H:i:s'),
				'supplier_id' => $this->Supplier->exists($supplier_id) ? $supplier_id : NULL,
				'employee_id' => $employee_id,
				'reference' => 'PV',
				'debit_amount' => 0,
				'credit_amount' => $amount_tendered*(-1),//to remove -tive sign
				'payment_type' => "Cash Payment",
				'balance' => $balance_amt
			);
			$this->db->insert('supplier_ledgers', $gl_data);

			$receiving_id = $this->db->insert_id();

		}

		$this->db->trans_complete();

		if($this->db->trans_status() === FALSE)
		{
			return -1;
		}

		return $receiving_id;
	}

	public function delete_list($receiving_ids, $employee_id, $update_inventory = TRUE)
	{
		$success = TRUE;

		// start a transaction to assure data integrity
		$this->db->trans_start();

		foreach($receiving_ids as $receiving_id)
		{
			$success &= $this->delete($receiving_id, $employee_id, $update_inventory);
		}

		// execute transaction
		$this->db->trans_complete();

		$success &= $this->db->trans_status();

		return $success;
	}

	public function delete($receiving_id, $employee_id, $update_inventory = TRUE)
	{
		// start a transaction to assure data integrity
		$this->db->trans_start();

		if($update_inventory)
		{
			// defect, not all item deletions will be undone??
			// get array with all the items involved in the sale to update the inventory tracking
			$items = $this->get_receiving_items($receiving_id)->result_array();
			foreach($items as $item)
			{
				// create query to update inventory tracking
				$inv_data = array(
					'trans_date' => date('Y-m-d H:i:s'),
					'trans_items' => $item['item_id'],
					'trans_user' => $employee_id,
					'trans_comment' => 'Deleting receiving ' . $receiving_id,
					'trans_location' => $item['item_location'],
					'trans_inventory' => $item['quantity_purchased'] * (-$item['receiving_quantity'])
				);
				// update inventory
				$this->Inventory->insert($inv_data);

				// update quantities
				$this->Item_quantity->change_quantity($item['item_id'], $item['item_location'], $item['quantity_purchased'] * (-$item['receiving_quantity']));
			}
		}

		// delete all items
		$this->db->delete('receivings_items', array('receiving_id' => $receiving_id));
		// delete sale itself
		$this->db->delete('receivings', array('receiving_id' => $receiving_id));

		// execute transaction
		$this->db->trans_complete();
	
		return $this->db->trans_status();
	}

	public function get_receiving_items($receiving_id)
	{
		$this->db->from('receivings_items');
		$this->db->where('receiving_id', $receiving_id);

		return $this->db->get();
	}
	
	public function get_supplier($receiving_id)
	{
		$this->db->from('receivings');
		$this->db->where('receiving_id', $receiving_id);

		return $this->Supplier->get_info($this->db->get()->row()->supplier_id);
	}

	public function get_payment_options()
	{
		return array(
			$this->lang->line('sales_cash') => $this->lang->line('sales_cash'),
			$this->lang->line('sales_check') => $this->lang->line('sales_check'),
			$this->lang->line('sales_debit') => $this->lang->line('sales_debit'),
			$this->lang->line('sales_credit') => $this->lang->line('sales_credit'),
			$this->lang->line('sales_due') => $this->lang->line('sales_due')
		);
	}

	/*
	We create a temp table that allows us to do easy report/receiving queries
	*/
	public function create_temp_table(array $inputs)
	{
		if(empty($inputs['receiving_id']))
		{
			if(empty($this->config->item('date_or_time_format')))
			{
				$where = 'WHERE DATE(receiving_time) BETWEEN ' . $this->db->escape($inputs['start_date']) . ' AND ' . $this->db->escape($inputs['end_date']);
			}
			else
			{
				$where = 'WHERE receiving_time BETWEEN ' . $this->db->escape(rawurldecode($inputs['start_date'])) . ' AND ' . $this->db->escape(rawurldecode($inputs['end_date']));
			}
		}
		else
		{
			$where = 'WHERE receivings_items.receiving_id = ' . $this->db->escape($inputs['receiving_id']);
		}

		$this->db->query('CREATE TEMPORARY TABLE IF NOT EXISTS ' . $this->db->dbprefix('receivings_items_temp') .
			' (INDEX(receiving_date), INDEX(receiving_time), INDEX(receiving_id))
			(
				SELECT 
					MAX(DATE(receiving_time)) AS receiving_date,
					MAX(receiving_time) AS receiving_time,
					receivings_items.receiving_id AS receiving_id,
					MAX(comment) AS comment,
					MAX(item_location) AS item_location,
					MAX(reference) AS reference,
					MAX(payment_type) AS payment_type,
					MAX(employee_id) AS employee_id, 
					items.item_id AS item_id,
					MAX(receivings.supplier_id) AS supplier_id,
					MAX(quantity_purchased) AS quantity_purchased,
					MAX(receivings_items.receiving_quantity) AS item_receiving_quantity,
					MAX(item_cost_price) AS item_cost_price,
					MAX(item_unit_price) AS item_unit_price,
					MAX(discount) AS discount,
					MAX(discount_type) AS discount_type,
					receivings_items.line AS line,
					MAX(serialnumber) AS serialnumber,
					MAX(receivings_items.description) AS description,
					MAX(CASE WHEN receivings_items.discount_type = ' . PERCENT . ' THEN item_unit_price * quantity_purchased * receivings_items.receiving_quantity - item_unit_price * quantity_purchased * receivings_items.receiving_quantity * discount / 100 ELSE item_unit_price * quantity_purchased * receivings_items.receiving_quantity - discount END) AS subtotal,
					MAX(CASE WHEN receivings_items.discount_type = ' . PERCENT . ' THEN item_unit_price * quantity_purchased * receivings_items.receiving_quantity - item_unit_price * quantity_purchased * receivings_items.receiving_quantity * discount / 100 ELSE item_unit_price * quantity_purchased * receivings_items.receiving_quantity - discount END) AS total,
					MAX((CASE WHEN receivings_items.discount_type = ' . PERCENT . ' THEN item_unit_price * quantity_purchased * receivings_items.receiving_quantity - item_unit_price * quantity_purchased * receivings_items.receiving_quantity * discount / 100 ELSE item_unit_price * quantity_purchased * receivings_items.receiving_quantity - discount END) - (item_cost_price * quantity_purchased)) AS profit,
					MAX(item_cost_price * quantity_purchased * receivings_items.receiving_quantity ) AS cost
				FROM ' . $this->db->dbprefix('receivings_items') . ' AS receivings_items
				INNER JOIN ' . $this->db->dbprefix('receivings') . ' AS receivings
					ON receivings_items.receiving_id = receivings.receiving_id
				INNER JOIN ' . $this->db->dbprefix('items') . ' AS items
					ON receivings_items.item_id = items.item_id
				' . "
				$where
				" . '
				GROUP BY receivings_items.receiving_id, items.item_id, receivings_items.line
			)'
		);
	}
}
?>
