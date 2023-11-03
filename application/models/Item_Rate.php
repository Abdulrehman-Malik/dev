<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Expense_category class
 */

class Item_Rate extends CI_Model
{
	/*
	Determines if a given Expense_id is an Expense category
	*/
	public function exists($expense_category_id)
	{
		$this->db->from('item_rates');
		$this->db->where('rate_id', $expense_category_id);

		return ($this->db->get()->num_rows() == 1);
	}

	/*
	Gets total of rows
	*/
	public function get_total_rows()
	{
		$this->db->from('item_rates');
		$this->db->where('deleted', 0);

		return $this->db->count_all_results();
	}

	/*
	Gets information about a particular category
	*/
	public function get_info($expense_category_id)
	{
		
		
		$this->db->from('item_rates');
		$this->db->where('rate_id', $expense_category_id);
		$this->db->where('deleted', 0);
		$query = $this->db->get();

		if($query->num_rows()==1)
		{
			return $query->row();
		}
		else
		{
			//Get empty base parent object, as $item_kit_id is NOT an item kit
			$expense_obj = new stdClass();

			//Get all the fields from items table
			foreach($this->db->list_fields('item_rates') as $field)
			{
				$expense_obj->$field = '';
			}

			return $expense_obj;
		}
	}

	/*
	Returns all the expense_categories
	*/
	public function get_all($rows = 0, $limit_from = 0, $no_deleted = FALSE)
	{
		$this->db->from('item_rates');
		if($no_deleted == TRUE)
		{
			$this->db->where('deleted', 0);
		}

		$this->db->order_by('rate_name', 'asc');

		if($rows > 0)
		{
			$this->db->limit($rows, $limit_from);
		}

		return $this->db->get();
	}

	/*
	Gets information about multiple expense_category_id
	*/
	public function get_multiple_info($expense_category_ids)
	{
		$this->db->from('item_rates');
		$this->db->where_in('rate_id', $expense_category_ids);
		$this->db->order_by('rate_name', 'asc');

		return $this->db->get();
	}

	/*
	Inserts or updates an expense_category
	*/
	public function save(&$expense_category_data, $expense_category_id = FALSE)
	{
		if(!$expense_category_id || !$this->exists($expense_category_id))
		{
			if($this->db->insert('item_rates', $expense_category_data))
			{
				$expense_category_data['rate_id'] = $this->db->insert_id();

				return TRUE;
			}

			return FALSE;
		}

		$this->db->where('rate_id', $expense_category_id);

		return $this->db->update('item_rates', $expense_category_data);
	}

	/*
	Deletes a list of expense_category
	*/
	public function delete_list($expense_category_ids)
	{
		$this->db->where_in('rate_id', $expense_category_ids);

		return $this->db->update('item_rates', array('deleted' => 1));
 	}

	/*
	Gets rows
	*/
	public function get_found_rows($search)
	{
		
		return $this->search($search, 0, 0, 'rate_name', 'asc', TRUE);
	}

	/*
	Perform a search on expense_category
	*/
	public function search($search, $rows = 0, $limit_from = 0, $sort = 'rate_name', $order='asc', $count_only = FALSE)
	{

		
		// get_found_rows case
		if($count_only == TRUE)
		{
			$this->db->select('COUNT(item_rates.rate_id) as count');
		}

		$this->db->from('item_rates AS item_rates');
		$this->db->group_start();
		$this->db->like('rate_name', $search);
		$this->db->or_like('rate_description', $search);
		$this->db->group_end();
		$this->db->where('deleted', 0);

		// get_found_rows case
		if($count_only == TRUE)
		{
			return $this->db->get()->row()->count;
		}

		$this->db->order_by($sort, $order);

		if($rows > 0)
		{
			$this->db->limit($rows, $limit_from);
		}

		return $this->db->get();
	}
}
?>
