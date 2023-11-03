<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("Secure_Controller.php");

class Item_rates extends Secure_Controller
{
	public function __construct()
	{
		parent::__construct('item_rates');
	}

	public function index()
	{

		 $data['table_headers'] = $this->xss_clean(get_item_rate_manage_table_headers());

		 $this->load->view('item_rates/manage', $data);

		
	}

	/*
	Returns expense_category_manage table data rows. This will be called with AJAX.
	*/
	public function search()
	{
		
		$search = $this->input->get('search');
		$limit  = $this->input->get('limit');
		$offset = $this->input->get('offset');
		$sort   = $this->input->get('sort');
		$order  = $this->input->get('order');

		$expense_categories = $this->Item_Rate->search($search, $limit, $offset, $sort, $order);
		
		$total_rows = $this->Item_Rate->get_found_rows($search);
		
		$data_rows = array();
		foreach($expense_categories->result() as $Item_Rate)
		{
			$data_rows[] = $this->xss_clean(get_item_rate_data_row($Item_Rate));
		}

		echo json_encode(array('total' => $total_rows, 'rows' => $data_rows));
	}

	public function get_row($row_id)
	{
		$data_row = $this->xss_clean(get_item_rate_data_row($this->Item_Rate->get_info($row_id)));

		echo json_encode($data_row);
	}

	public function view($expense_category_id = -1)
	{
		
		$data['category_info'] = $this->Item_Rate->get_info($expense_category_id);

		$this->load->view("item_rates/form", $data);
	}

	public function save($expense_category_id = -1)
	{
		
		$expense_category_data = array(
			'rate_name' => $this->input->post('rate_name'),
			'rate_description' => $this->input->post('rate_description')
		);

		if($this->Item_Rate->save($expense_category_data, $expense_category_id))
		{
			
			$expense_category_data = $this->xss_clean($expense_category_data);

			// New expense_category_id
			if($expense_category_id == -1)
			{
				echo json_encode(array('success' => TRUE, 'message' => $this->lang->line('expenses_categories_successful_adding'), 'id' => $expense_category_data['expense_category_id']));
			}
			else // Existing Expense Category
			{
				echo json_encode(array('success' => TRUE, 'message' => $this->lang->line('expenses_categories_successful_updating'), 'id' => $expense_category_id));
			}
		}
		else//failure
		{
			echo json_encode(array('success' => FALSE, 'message' => $this->lang->line('expenses_categories_error_adding_updating') . ' ' . $expense_category_data['category_name'], 'id' => -1));
		}
	}

	public function delete()
	{
		$expense_category_to_delete = $this->input->post('ids');

		if($this->Item_Rate->delete_list($expense_category_to_delete))
		{
			echo json_encode(array('success' => TRUE, 'message' => $this->lang->line('expenses_categories_successful_deleted') . ' ' . count($expense_category_to_delete) . ' ' . $this->lang->line('expenses_categories_one_or_multiple')));
		}
		else
		{
			echo json_encode(array('success' => FALSE, 'message' => $this->lang->line('expenses_categories_cannot_be_deleted')));
		}
	}
}
?>
