<?php $this->load->view("partial/header"); ?>

<?php
	if (isset($error_message))
	{
		echo "<div class='alert alert-dismissible alert-danger'>".$error_message."</div>";
		exit;
	}

	$this->load->view('partial/print_receipt', array('print_after_sale', $print_after_sale, 'selected_printer'=>'receipt_printer')); 

?>

<div class="print_hide" id="control_buttons" style="text-align:right">
	<a href="javascript:printdoc();"><div class="btn btn-info btn-sm", id="show_print_button"><?php echo '<span class="glyphicon glyphicon-print">&nbsp</span>' . $this->lang->line('common_print'); ?></div></a>
	<?php echo anchor("payments", '<span class="glyphicon glyphicon-save">&nbsp</span>' . $this->lang->line('receivings_register'), array('class'=>'btn btn-info btn-sm', 'id'=>'show_sales_button')); ?>
</div>

<div id="receipt_wrapper">
	<div id="receipt_header">
		<?php
		if ($this->config->item('company_logo') != '') 
		{ 
		?>
			<div id="company_name"><img id="image" src="<?php echo base_url('uploads/' . $this->config->item('company_logo')); ?>" alt="company_logo" /></div>
		<?php
		}
		?>

		<?php
		if ($this->config->item('receipt_show_company_name')) 
		{ 
		?>
			<div id="company_name"><?php echo $this->config->item('company'); ?></div>
		<?php
		}
		?>

		<div id="company_address"><?php echo nl2br($this->config->item('address')); ?></div>
		<div id="company_phone"><?php echo $this->config->item('phone'); ?></div>
		<div id="sale_receipt"><?php echo $this->lang->line('payment_receipt'); ?></div>
		<div id="sale_time"><?php echo $transaction_time ?></div>
	</div>

	<div id="receipt_general_info">
		<?php
		if(isset($supplier))
		{
		?>
			<div id="customer"><?php echo $this->lang->line('suppliers_supplier').": ".$supplier; ?></div>
		<?php
		}
		?>
		<div id="sale_id"><?php echo $this->lang->line('receivings_id').": ".$receiving_id; ?></div>
		<?php 
		if (!empty($reference))
		{
		?>
			<div id="reference"><?php echo $this->lang->line('receivings_reference').": ".$reference; ?></div>	
		<?php 
		}
		?>
		<div id="employee"><?php echo $this->lang->line('employees_employee').": ".$employee; ?></div>
	</div>

	<table id="receipt_items">
	
		<tr>
			<td colspan="3" style='text-align:right;border-top:3px solid #000000;'><?php echo $this->lang->line('previous_balance'); ?></td>
			<td style='border-top:3px solid #000000;'><div class="total-value"><?php echo to_currency($balance); ?></div></td>
		</tr>
		<tr>
			<td colspan="3" style='text-align:right;'><?php echo $this->lang->line('current_payment'); ?></td>
			<td ><div class="total-value"><?php echo to_currency($total); ?></div></td>
		</tr>		
			<tr>
				<td colspan="3" style='text-align:right;'><?php echo $this->lang->line('current_balance'); ?></td>
				<td><div class="total-value"><?php echo to_currency( $balance-$total); ?></div></td>
			</tr>

			<tr>
				<td colspan="3" style='text-align:right;'><?php echo $this->lang->line('sales_payment'); ?></td>
				<td><div class="total-value"><?php echo $payment_type; ?></div></td>
			</tr>

		
	</table>

	<div id="sale_return_policy">
		<?php //echo nl2br($this->config->item('return_policy')); ?>
	</div>

	<div id='barcode'>
	<br>
		<img src='data:image/png;base64,<?php echo $barcode; ?>' /><br>
		<?php echo $receiving_id; ?>
	</div>
</div>
<?php $this->load->view("partial/footer"); ?>
