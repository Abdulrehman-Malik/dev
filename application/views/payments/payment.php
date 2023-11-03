<?php $this->load->view("partial/header"); ?>

<?php
if (isset($error))
{
	echo "<div class='alert alert-dismissible alert-danger'>".$error."</div>";
}

if (!empty($warning))
{
	echo "<div class='alert alert-dismissible alert-warning'>".$warning."</div>";
}

if (isset($success))
{
	echo "<div class='alert alert-dismissible alert-success'>".$success."</div>";
}
?>
<div id="overall_sale" class="panel panel-default" style="margin:0 auto; text-align: center;">
Previous Balance :
</div>
<div id="overall_sale" class="panel panel-default" style="margin:0 auto; text-align: center;">
<?php 
if(isset($supplier))
echo to_currency($balance);
else
echo to_currency(0.00);
?>

</div>

<!-- Overall Receiving -->
<div id="overall_sale" class="panel panel-default" style="margin:0 auto; text-align: center;">
	<div class="panel-body">
		<?php
		if(isset($supplier))
		{
		?>
			<table class="sales_table_100">
				<tr>
					<th style='width: 55%;'><?php echo $this->lang->line("receivings_supplier"); ?></th>
					<th style="width: 45%; text-align: right;"><?php echo $supplier; ?></th>
				</tr>
				<?php
				if(!empty($supplier_email))
				{
				?>
					<tr>
						<th style='width: 55%;'><?php echo $this->lang->line("receivings_supplier_email"); ?></th>
						<th style="width: 45%; text-align: right;"><?php echo $supplier_email; ?></th>
					</tr>
				<?php
				}
				?>
				<?php
				if(!empty($supplier_address))
				{
				?>
					<tr>
						<th style='width: 55%;'><?php echo $this->lang->line("receivings_supplier_address"); ?></th>
						<th style="width: 45%; text-align: right;"><?php echo $supplier_address; ?></th>
					</tr>
				<?php
				}
				?>
				<?php
				if(!empty($supplier_location))
				{
				?>
					<tr>
						<th style='width: 55%;'><?php echo $this->lang->line("receivings_supplier_location"); ?></th>
						<th style="width: 45%; text-align: right;"><?php echo $supplier_location; ?></th>
					</tr>
				<?php
				}
				?>
			</table>
			
			<button class="btn btn-danger btn-sm" id="remove_supplier_button" title="<?php echo $this->lang->line('common_remove').' '.$this->lang->line('suppliers_supplier')?>">
				<span class="glyphicon glyphicon-remove">&nbsp</span><?php echo $this->lang->line('common_remove').' '.$this->lang->line('suppliers_supplier') ?>
			</button>

		<?php
		}
		else
		{
		?>
			<?php echo form_open($controller_name."/select_supplier", array('id'=>'select_supplier_form', 'class'=>'form-horizontal')); ?>
				<div class="form-group" id="select_customer">
					<label id="supplier_label" for="supplier" class="control-label" style="margin-bottom: 1em; margin-top: -1em;"><?php echo $this->lang->line('receivings_select_supplier'); ?></label>
					<?php echo form_input(array('name'=>'supplier', 'id'=>'supplier', 'class'=>'form-control input-sm', 'value'=>$this->lang->line('receivings_start_typing_supplier_name'))); ?>

					<button id='new_supplier_button' class='btn btn-info btn-sm modal-dlg' data-btn-submit='<?php echo $this->lang->line('common_submit') ?>' data-href='<?php echo site_url("suppliers/view"); ?>'
							title='<?php echo $this->lang->line('receivings_new_supplier'); ?>'>
						<span class="glyphicon glyphicon-user">&nbsp</span><?php echo $this->lang->line('receivings_new_supplier'); ?>
					</button>

				</div>
			<?php echo form_close(); ?>
		<?php
		}
		?>

		<table class="sales_table_100" id="sale_totals">
			<tr>
				<?php
				if($mode != 'requisition')
				{
				?>
					<th style="width: 55%;"><?php //echo $this->lang->line('sales_total'); ?></th>
					<th style="width: 45%; text-align: right;"><?php //echo to_currency($total); ?></th>
				<?php 
				}
				else
				{
				?>
					<th style="width: 55%;"></th>
					<th style="width: 45%; text-align: right;"></th>
				<?php 
				}
				?>
			</tr>
		</table>

		<?php
		if(count($cart) == 0)
		{
		?>
			<div id="finish_sale">
				<?php
				if($mode == 'requisition')
				{
				?>
					<?php echo form_open($controller_name."/requisition_complete", array('id'=>'finish_receiving_form', 'class'=>'form-horizontal')); ?>
						<div class="form-group form-group-sm">
							<label id="comment_label" for="comment"><?php echo $this->lang->line('common_comments'); ?></label>
							<?php echo form_textarea(array('name'=>'comment', 'id'=>'comment', 'class'=>'form-control input-sm', 'value'=>$comment, 'rows'=>'4')); ?>

							<div class="btn btn-sm btn-danger pull-left" id='cancel_receiving_button'><span class="glyphicon glyphicon-remove">&nbsp</span><?php echo $this->lang->line('receivings_cancel_receiving'); ?></div>
							
							<div class="btn btn-sm btn-success pull-right" id='finish_receiving_button'><span class="glyphicon glyphicon-ok">&nbsp</span><?php echo $this->lang->line('receivings_complete_receiving'); ?></div>
						</div>
					<?php echo form_close(); ?>
				<?php
				}
				else
				{
				?>
					<?php echo form_open($controller_name."/complete", array('id'=>'finish_receiving_form', 'class'=>'form-horizontal')); ?>
						<div class="form-group form-group-sm">
							<label id="comment_label" for="comment"><?php echo $this->lang->line('common_comments'); ?></label>
							<?php echo form_textarea(array('name'=>'comment', 'id'=>'comment', 'class'=>'form-control input-sm', 'value'=>$comment, 'rows'=>'4'));?>
							<div id="payment_details" >
								<table class="sales_table_100" >
									<tr>
										<td><?php echo $this->lang->line('receivings_print_after_sale'); ?></td>
										<td>
											<?php echo form_checkbox(array('name'=>'recv_print_after_sale', 'id'=>'recv_print_after_sale', 'class'=>'checkbox', 'value'=>1, 'checked'=>$print_after_sale)); ?>
										</td>
									</tr>
									<?php
									if ($mode == "receive")
									{
									?>
										<tr>
											<td><?php echo $this->lang->line('receivings_reference');?></td>
											<td>
												<?php echo form_input(array('name'=>'recv_reference', 'id'=>'recv_reference', 'class'=>'form-control input-sm', 'value'=>$reference, 'size'=>5));?>
											</td>
										</tr>
									<?php
									}
									?>
									<tr>
										<td><?php echo $this->lang->line('sales_payment'); ?></td>
										<td>
											<?php echo form_dropdown('payment_type', $payment_options, array(), array('id'=>'payment_types', 'class'=>'selectpicker show-menu-arrow', 'data-style'=>'btn-default btn-sm', 'data-width'=>'auto')); ?>
										</td>
									</tr>
									<tr>
										<td><?php echo $this->lang->line('sales_amount_tendered'); ?></td>
										<td>
											<?php echo form_input(array('name'=>'amount_tendered','id'=>'amount_tendered', 'value'=>$total, 'class'=>'form-control input-sm', 'size'=>'5')); ?>
										</td>
									</tr>
								</table>
							</div>

							<div class='btn btn-sm btn-danger pull-left' id='cancel_receiving_button'><span class="glyphicon glyphicon-remove">&nbsp</span><?php echo $this->lang->line('receivings_cancel_receiving') ?></div>
							
							<div class='btn btn-sm btn-success pull-right' id='finish_receiving_button'><span class="glyphicon glyphicon-ok">&nbsp</span><?php echo $this->lang->line('receivings_complete_receiving') ?></div>
						</div>
					<?php echo form_close(); ?>
				<?php
				}
				?>
			</div>
		<?php
		}
		?>
	</div>
</div>
	
<script type="text/javascript">
$(document).ready(function()
{
	const redirect = function() {
		window.location.href = "<?php echo site_url('payments'); ?>";
	};

	$("#remove_supplier_button").click(function()
	{
		$.post("<?php echo site_url('payments/remove_supplier'); ?>", redirect);
	});


	$('#comment').keyup(function() 
	{
		$.post('<?php echo site_url($controller_name."/set_comment");?>', {comment: $('#comment').val()});
	});

	$('#recv_reference').keyup(function() 
	{
	
		$.post('<?php echo site_url($controller_name."/set_reference");?>', {recv_reference: $('#recv_reference').val()});
	});

	$('#amount_tendered').keyup(function() 
	{
		$.post('<?php echo site_url($controller_name."/set_total");?>', {amount_tendered: $('#amount_tendered').val()});
	});
	
	$("#recv_print_after_sale").change(function()
	{
		$.post('<?php echo site_url($controller_name."/set_print_after_sale");?>', {recv_print_after_sale: $(this).is(":checked")});
	});

	$('#item,#supplier').click(function()
	{
		$(this).attr('value','');
	});

	$("#supplier").autocomplete(
	{
		source: '<?php echo site_url("suppliers/suggest"); ?>',
		minChars:0,
		delay:10,
		select: function (a, ui) {
			$(this).val(ui.item.value);
			$("#select_supplier_form").submit();
		}
	});

	dialog_support.init("a.modal-dlg, button.modal-dlg");

	$('#supplier').blur(function()
	{
		$(this).attr('value',"<?php echo $this->lang->line('receivings_start_typing_supplier_name'); ?>");
	});

	$("#finish_receiving_button").click(function()
	{
		$('#finish_receiving_form').submit();
	});

	$("#cancel_receiving_button").click(function()
	{
		if (confirm('<?php echo $this->lang->line("receivings_confirm_cancel_receiving"); ?>'))
		{
			$('#finish_receiving_form').attr('action', '<?php echo site_url($controller_name."/cancel_receiving"); ?>');
			$('#finish_receiving_form').submit();
		}
	});


	
});

</script>

<?php $this->load->view("partial/footer"); ?>
