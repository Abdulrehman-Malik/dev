<?php $this->load->view("partial/header"); ?>

<script type="text/javascript">
	dialog_support.init("a.modal-dlg");
</script>

<div id="page_title"><?php echo $title ?></div>

<div id="page_subtitle"><?php echo $subtitle ?></div>

<div id="table_holder">
	<table id="table"></table>
</div>

<div id="report_summary">
	<?php
	foreach($summary_data as $name => $value)
	{ 
		if($name == "debit_amount_balance" && $value==0 )
		continue;
		if($name == "credit_amount_balance" && $value==0 )
		continue;
		

		if($name == "total_quantity")
		{
	?>
			<div class="summary_row"><b><?php echo $this->lang->line('reports_'.$name) . ': ' .$value; ?></div>
	<?php
		}
		else
		{
	?>
			<div class="summary_row"><b><?php echo $this->lang->line('reports_'.$name) . ': ' . to_currency($value); ?></div>
	<?php
		}
	}
	?>
</div>

<script type="text/javascript">
	$(document).ready(function()
	{
		<?php $this->load->view('partial/bootstrap_tables_locale'); ?>

		$('#table')
			.addClass("table-striped")
			.addClass("table-bordered")
			.bootstrapTable({
				columns: <?php echo transform_headers($headers, TRUE, FALSE); ?>,
				stickyHeader: true,
				stickyHeaderOffsetLeft: $('#table').offset().left + 'px',
				stickyHeaderOffsetRight: $('#table').offset().right + 'px',
				pageSize: <?php echo $this->config->item('lines_per_page'); ?>,
				sortable: true,
				showExport: true,
				exportDataType: 'all',
				exportTypes: ['json', 'xml', 'csv', 'txt', 'sql', 'excel', 'pdf'],
				pagination: true,
				showColumns: true,
				data: <?php echo json_encode($data); ?>,
				iconSize: 'sm',
				paginationVAlign: 'bottom',
				escape: false,
				search: true
		});


	});
</script>

<?php $this->load->view("partial/footer"); ?>
