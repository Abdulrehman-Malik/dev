<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("Secure_Controller.php");

class Payments extends Secure_Controller
{
	public function __construct()
	{
		parent::__construct('payments');

		$this->load->library('payment_lib');
		$this->load->library('token_lib');
		$this->load->library('barcode_lib');
	}

	public function index()
	{
		$this->_reload();
	}

	

	public function select_supplier()
	{
		$supplier_id = $this->input->post('supplier');
		if($this->Supplier->exists($supplier_id))
		{
			$this->payment_lib->set_supplier($supplier_id);
		}

		$this->_reload();
	}

	public function change_mode()
	{
		$stock_destination = $this->input->post('stock_destination');
		$stock_source = $this->input->post('stock_source');

		if((!$stock_source || $stock_source == $this->payment_lib->get_stock_source()) &&
			(!$stock_destination || $stock_destination == $this->payment_lib->get_stock_destination()))
		{
			$this->payment_lib->clear_reference();
			$mode = $this->input->post('mode');
			$this->payment_lib->set_mode($mode);
		}
		elseif($this->Stock_location->is_allowed_location($stock_source, 'receivings'))
		{
			$this->payment_lib->set_stock_source($stock_source);
			$this->payment_lib->set_stock_destination($stock_destination);
		}

		$this->_reload();
	}
	
	public function set_comment()
	{
		$this->payment_lib->set_comment($this->input->post('comment'));
	}

	public function set_print_after_sale()
	{
		$this->payment_lib->set_print_after_sale($this->input->post('recv_print_after_sale'));
	}
	
	public function set_reference()
	{
		$this->payment_lib->set_reference($this->input->post('recv_reference'));
	}
	public function set_total()
	{
		$this->payment_lib->set_total($this->input->post('amount_tendered'));
	}
	

	
	
	public function edit($receiving_id)
	{
		$data = array();

		$data['suppliers'] = array('' => 'No Supplier');
		foreach($this->Supplier->get_all()->result() as $supplier)
		{
			$data['suppliers'][$supplier->person_id] = $this->xss_clean($supplier->first_name . ' ' . $supplier->last_name);
		}
	
		$data['employees'] = array();
		foreach($this->Employee->get_all()->result() as $employee)
		{
			$data['employees'][$employee->person_id] = $this->xss_clean($employee->first_name . ' '. $employee->last_name);
		}
	
		$receiving_info = $this->xss_clean($this->Receiving->get_info($receiving_id)->row_array());
		$data['selected_supplier_name'] = !empty($receiving_info['supplier_id']) ? $receiving_info['company_name'] : '';
		$data['selected_supplier_id'] = $receiving_info['supplier_id'];
		$data['receiving_info'] = $receiving_info;
	
		$this->load->view('receivings/form', $data);
	}

	public function delete_item($item_number)
	{
		$this->payment_lib->delete_item($item_number);

		$this->_reload();
	}
	
	public function delete($receiving_id = -1, $update_inventory = TRUE) 
	{
		$employee_id = $this->Employee->get_logged_in_employee_info()->person_id;
		$receiving_ids = $receiving_id == -1 ? $this->input->post('ids') : array($receiving_id);
	
		if($this->Receiving->delete_list($receiving_ids, $employee_id, $update_inventory))
		{
			echo json_encode(array('success' => TRUE, 'message' => $this->lang->line('receivings_successfully_deleted') . ' ' .
							count($receiving_ids) . ' ' . $this->lang->line('receivings_one_or_multiple'), 'ids' => $receiving_ids));
		}
		else
		{
			echo json_encode(array('success' => FALSE, 'message' => $this->lang->line('receivings_cannot_be_deleted')));
		}
	}

	public function remove_supplier()
	{
		$this->payment_lib->clear_reference();
		$this->payment_lib->remove_supplier();

		$this->_reload();
	}

	public function complete()
	{
		
		$data = array();
	
		//$data['cart'] = $this->payment_lib->get_cart();
		$data['total'] = $this->payment_lib->get_total();
		$data['balance'] = $this->payment_lib->get_balance();
		$data['transaction_time'] = to_datetime(time());
		$data['mode'] = $this->payment_lib->get_mode();
		$data['comment'] = $this->payment_lib->get_comment();
		$data['reference'] = $this->payment_lib->get_reference();
		$data['payment_type'] = $this->input->post('payment_type');
		$data['show_stock_locations'] = $this->Stock_location->show_locations('receivings');
		$data['stock_location'] = $this->payment_lib->get_stock_source();

		

		if($this->input->post('amount_tendered') != NULL)
		{
			//$data['amount_tendered'] = $this->input->post('amount_tendered');
			$data['amount_tendered'] = to_currency($data['amount_tendered']);
		}
		
		$employee_id = $this->Employee->get_logged_in_employee_info()->person_id;
		$employee_info = $this->Employee->get_info($employee_id);
		$data['employee'] = $employee_info->first_name . ' ' . $employee_info->last_name;

		$supplier_info = '';
		$supplier_id = $this->payment_lib->get_supplier();
		if($supplier_id != -1)
		{
			$supplier_info = $this->Supplier->get_info($supplier_id);
			$data['supplier'] = $supplier_info->company_name;
			$data['first_name'] = $supplier_info->first_name;
			$data['last_name'] = $supplier_info->last_name;
			$data['supplier_email'] = $supplier_info->email;
			$data['supplier_address'] = $supplier_info->address_1;
			if(!empty($supplier_info->zip) or !empty($supplier_info->city))
			{
				$data['supplier_location'] = $supplier_info->zip . ' ' . $supplier_info->city;				
			}
			else
			{
				$data['supplier_location'] = '';
			}
		
		
			$data['receiving_id'] = 'PV ' . $this->Payment->save( $supplier_id, $employee_id, $data['comment'], $data['reference'], $data['payment_type'], $data['total'], $data['balance'] );
		
		}else{

			$data['error_message'] = "Please select a supplier before proceeding";
		}

	
		//SAVE receiving to database
		
		//echo $data['receiving_id'] ;
		//return;
		$data = $this->xss_clean($data);

		if($data['receiving_id'] == 'PV -1')
		{
			$data['error_message'] = $this->lang->line('receivings_transaction_failed');
		}
		else
		{
			$data['barcode'] = $this->barcode_lib->generate_receipt_barcode($data['receiving_id']);				
		}

		$data['print_after_sale'] = $this->payment_lib->is_print_after_sale();

		$this->load->view("payments/receipt",$data);

		$this->payment_lib->clear_all();
	}

	public function requisition_complete()
	{
		if($this->payment_lib->get_stock_source() != $this->payment_lib->get_stock_destination()) 
		{
			foreach($this->payment_lib->get_cart() as $item)
			{
				$this->payment_lib->delete_item($item['line']);
				$this->payment_lib->add_item($item['item_id'], $item['quantity'], $this->payment_lib->get_stock_destination(), $item['discount_type']);
				$this->payment_lib->add_item($item['item_id'], -$item['quantity'], $this->payment_lib->get_stock_source(), $item['discount_type']);
			}
			
			$this->complete();
		}
		else 
		{
			$data['error'] = $this->lang->line('receivings_error_requisition');

			$this->_reload($data);	
		}
	}
	
	public function receipt($receiving_id)
	{
		$receiving_info = $this->Receiving->get_info($receiving_id)->row_array();
		$this->payment_lib->copy_entire_receiving($receiving_id);
		$data['cart'] = $this->payment_lib->get_cart();
		$data['total'] = $this->payment_lib->get_total();
		$data['mode'] = $this->payment_lib->get_mode();
		$data['transaction_time'] = to_datetime(strtotime($receiving_info['receiving_time']));
		$data['show_stock_locations'] = $this->Stock_location->show_locations('receivings');
		$data['payment_type'] = $receiving_info['payment_type'];
		$data['reference'] = $this->payment_lib->get_reference();
		$data['receiving_id'] = 'RECV ' . $receiving_id;
		$data['barcode'] = $this->barcode_lib->generate_receipt_barcode($data['receiving_id']);
		$employee_info = $this->Employee->get_info($receiving_info['employee_id']);
		$data['employee'] = $employee_info->first_name . ' ' . $employee_info->last_name;

		$supplier_id = $this->payment_lib->get_supplier();
		if($supplier_id != -1)
		{
			$supplier_info = $this->Supplier->get_info($supplier_id);
			$data['supplier'] = $supplier_info->company_name;
			$data['first_name'] = $supplier_info->first_name;
			$data['last_name'] = $supplier_info->last_name;
			$data['supplier_email'] = $supplier_info->email;
			$data['supplier_address'] = $supplier_info->address_1;
			if(!empty($supplier_info->zip) or !empty($supplier_info->city))
			{
				$data['supplier_location'] = $supplier_info->zip . ' ' . $supplier_info->city;				
			}
			else
			{
				$data['supplier_location'] = '';
			}
		}

		$data['print_after_sale'] = FALSE;

		$data = $this->xss_clean($data);
		
		$this->load->view("receivings/receipt", $data);

		$this->payment_lib->clear_all();
	}

	private function _reload($data = array())
	{
		
		
		//$data['cart'] = $this->payment_lib->get_cart();
		$data['modes'] = array('receive' => $this->lang->line('receivings_receiving'), 'return' => $this->lang->line('receivings_return'));
		$data['mode'] = $this->payment_lib->get_mode();
		//$data['stock_locations'] = $this->Stock_location->get_allowed_locations('receivings');
		//$data['show_stock_locations'] = count($data['stock_locations']) > 1;
		if($data['show_stock_locations']) 
		{
			$data['modes']['requisition'] = $this->lang->line('receivings_requisition');
			$data['stock_source'] = $this->payment_lib->get_stock_source();
			$data['stock_destination'] = $this->payment_lib->get_stock_destination();
		}

		$data['comment'] = $this->payment_lib->get_comment();
		$data['reference'] = $this->payment_lib->get_reference();
		$data['payment_options'] = $this->Payment->get_payment_options();
		$data['total'] = $this->payment_lib->get_total();

		$supplier_id = $this->payment_lib->get_supplier();
		
		$payment_info =  $this->Payment->get_info($supplier_id);
		$balance = $payment_info->credit_amount - $payment_info->debit_amount;
		$this->payment_lib->set_balance($balance);
		
		$data['balance'] = $this->payment_lib->get_balance();

		$supplier_info = '';
		if($supplier_id != -1)
		{
			$supplier_info = $this->Supplier->get_info($supplier_id);
			$data['supplier'] = $supplier_info->company_name;
			$data['first_name'] = $supplier_info->first_name;
			$data['last_name'] = $supplier_info->last_name;
			$data['supplier_email'] = $supplier_info->email;
			$data['supplier_address'] = $supplier_info->address_1;
			if(!empty($supplier_info->zip) or !empty($supplier_info->city))
			{
				$data['supplier_location'] = $supplier_info->zip . ' ' . $supplier_info->city;				
			}
			else
			{
				$data['supplier_location'] = '';
			}
		}
		
		$data['print_after_sale'] = $this->payment_lib->is_print_after_sale();

		$data = $this->xss_clean($data);

		$this->load->view("payments/payment", $data);
	}
	
	public function save($receiving_id = -1)
	{
		$newdate = $this->input->post('date');
		
		$date_formatter = date_create_from_format($this->config->item('dateformat') . ' ' . $this->config->item('timeformat'), $newdate);
		$receiving_time = $date_formatter->format('Y-m-d H:i:s');

		$receiving_data = array(
			'receiving_time' => $receiving_time,
			'supplier_id' => $this->input->post('supplier_id') ? $this->input->post('supplier_id') : NULL,
			'employee_id' => $this->input->post('employee_id'),
			'comment' => $this->input->post('comment'),
			'reference' => $this->input->post('reference') != '' ? $this->input->post('reference') : NULL
		);

		$this->Inventory->update('RECV '.$receiving_id, ['trans_date' => $receiving_time]);
		if($this->Receiving->update($receiving_data, $receiving_id))
		{
			echo json_encode(array('success' => TRUE, 'message' => $this->lang->line('receivings_successfully_updated'), 'id' => $receiving_id));
		}
		else
		{
			echo json_encode(array('success' => FALSE, 'message' => $this->lang->line('receivings_unsuccessfully_updated'), 'id' => $receiving_id));
		}
	}

	public function cancel_receiving()
	{
		$this->payment_lib->clear_all();

		$this->_reload();
	}
}
?>
