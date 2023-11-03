<?php $this->load->view("partial/header"); ?>

<script type="text/javascript">
	dialog_support.init("a.modal-dlg");
</script>


<div id="page_title"><?php echo $this->lang->line('reports_report_input'); ?></div>

<?php
if(isset($error))
{
	echo "<div class='alert alert-dismissible alert-danger'>".$error."</div>";
}
?>

<?php echo form_open('#', array('id'=>'item_form', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal')); ?>
<div class="form-group form-group-sm" id="report_specific_input_data">
		<?php echo form_label($specific_input_name, 'specific_input_name_label', array('class'=>'required control-label col-xs-2')); ?>
		<div class="col-xs-3 discount_percent">
			<?php echo form_dropdown('specific_input_data', $specific_input_data, '', 'id="specific_input_data" class="form-control"'); ?>
		</div>

		<?php	
		if (isset($discount_type_options))
		{
		?>
		<div class="col-xs-3 discount_fixed">
			<?php echo form_input(array(
				'name' => 'discount_fixed',
				'id' => 'discount_fixed',
				'class' => 'form-control input-sm required',
				'type' => 'number',
				'min' => 0,
				'value' => $this->config->item('default_sales_discount'))); ?>
		</div>
		<?php
		}
		?>
	</div>

	<div class="form-group form-group-sm" style="display:none">
		<?php echo form_label($this->lang->line('reports_stock_location'), 'reports_stock_location_label', array('class'=>'required control-label col-xs-2')); ?>
		<div id='report_stock_location' class="col-xs-3">
			<?php echo form_dropdown('stock_location',$stock_locations,'all','id="location_id" class="form-control"'); ?>
		</div>
	</div>

	<div class="form-group form-group-sm" style="display:none">
		<?php echo form_label($this->lang->line('reports_item_count'), 'reports_item_count_label', array('class'=>'required control-label col-xs-2')); ?>
		<div id='report_item_count' class="col-xs-3">
			<?php echo form_dropdown('item_count',$item_count,'all','id="item_count" class="form-control"'); ?>
		</div>
	</div>

	<?php
	echo form_button(array(
		'name'=>'generate_report',
		'id'=>'generate_report',
		'content'=>$this->lang->line('common_submit'),
		'class'=>'btn btn-primary btn-sm')
	);
	?>
<?php echo form_close(); ?>

<?php $this->load->view("partial/footer"); ?>

<script type="text/javascript">
$(document).ready(function()
{
	$("#generate_report").click(function()
	{
		window.location = [window.location, $("#location_id").val(), $("#item_count").val(), $("#specific_input_data").val()].join("/");
	});
});
</script>