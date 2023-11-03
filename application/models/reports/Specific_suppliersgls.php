<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("Report.php");

class Specific_suppliersgls extends Report
{
	public function create(array $inputs)
	{
		//Create our temp tables to work with the data in our report
		$this->Sale->create_temp_ledger_op_balance($inputs);
		$this->Sale->create_temp_table_gl($inputs);
		
	}

	public function getDataColumns()
	{
		return array(
			array('ledger_id' => 'Ledger ID'),
			array('ledger_time' => 'Time'),
			array('trans_type' => 'Type'),
			array('payment_type' => 'Type Desc'),
			array('supplier_name' => 'Account Name'),
			array('reference' => 'Reference'),
			array('comments' => 'Comments'),
			array('debit_amount' => 'Debit'),
			array('credit_amount' => 'Credit'),
			array('balance' => 'Balance'),
			array('user' => 'User'),
			
		);
	}

	public function getData(array $inputs)
	{
		
		$this->db->select('
		ledger_id ,
		ledger_time,
		payment_type ,
		supplier_name ,
		employee_id,
		reference,
		debit_amount,
		credit_amount,
		balance,
		trans_type,
		user
			');
		$this->db->from('temp_gl');
		$this->db->where('supplier_id', $inputs['supplier_id']);
		//$this->db->group_by('item_id');
		$this->db->order_by('ledger_id');
		
		return $this->db->get()->result_array();
	}

	public function getSummaryData(array $inputs)
	{
		$this->db->select('
		SUM(debit_amount) debit_sum,
		SUM(credit_amount) credit_sum,
case when SUM(ROUND(debit_amount, 2)) > SUM(ROUND(credit_amount, 2)) then SUM(ROUND(debit_amount, 2))-SUM(ROUND(credit_amount, 2)) else 0 end AS debit_amount_balance,
case when SUM(ROUND(credit_amount, 2)) > SUM(ROUND(debit_amount, 2)) then SUM(ROUND(credit_amount, 2))-SUM(ROUND(debit_amount, 2)) else 0 end AS credit_amount_balance
		');
		$this->db->from('temp_gl');
		$this->db->where('supplier_id', $inputs['supplier_id']);
		return $this->db->get()->row_array();
	}
}
?>
