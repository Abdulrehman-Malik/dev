<div id="required_fields_message"><?php echo $this->lang->line('common_fields_required_message'); ?></div>

<ul id="error_message_box" class="error_message_box"></ul>

<?php echo form_open('item_rates/save/'.$category_info->rate_id, array('id'=>'expense_category_edit_form', 'class'=>'form-horizontal')); ?>
	<fieldset id="item_rates">
		<div class="form-group form-group-sm">
			<?php echo form_label($this->lang->line('rate_name'), 'rate_name', array('class'=>'required control-label col-xs-3')); ?>
			<div class='col-xs-8'>
				<?php echo form_input(array(
						'name'=>'rate_name',
						'id'=>'rate_name',
						'class'=>'form-control input-sm',
						'value'=>$category_info->rate_name)
						);?>
			</div>
		</div>

		<div class="form-group form-group-sm">
			<?php echo form_label($this->lang->line('rate_description'), 'rate_description', array('class'=>'control-label col-xs-3')); ?>
			<div class='col-xs-8'>
				<?php echo form_textarea(array(
						'name'=>'rate_description',
						'id'=>'rate_description',
						'class'=>'form-control input-sm',
						'value'=>$category_info->rate_description)
						);?>
			</div>
		</div>
		
	</fieldset>
<?php echo form_close(); ?>

<script type='text/javascript'>
//validation and submit handling
$(document).ready(function()
{
	$('#expense_category_edit_form').validate($.extend({
		submitHandler: function(form) {
			$(form).ajaxSubmit({
				success: function(response)
				{
					dialog_support.hide();
					table_support.handle_submit("<?php echo site_url($controller_name); ?>", response);
				},
				dataType: 'json'
			});
		},

		errorLabelContainer: '#error_message_box',

		rules:
		{
			rate_name: 'required'
		},

		messages:
		{
			rate_name: "<?php echo $this->lang->line('rate_name_required'); ?>"
		}
	}, form_support.error));
});
</script>
