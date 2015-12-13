<div id="wrapper">

	<?php echo $this->element('nav'); ?>

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php echo __('Users'); ?></h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<?php echo __('List Users'); ?>
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="dataTable_wrapper">
							<table class="table table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th><?php echo $this->Paginator->sort('id'); ?></th>
										<th><?php echo $this->Paginator->sort('user_id'); ?></th>
										<th><?php echo $this->Paginator->sort('remark'); ?></th>
										<th><?php echo $this->Paginator->sort('by'); ?></th>
										<th><?php echo $this->Paginator->sort('created'); ?></th>
										<th><?php echo $this->Paginator->sort('modified'); ?></th>
										<th><?php echo __('Actions'); ?></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($remarks as $remark): ?>
										<tr>
											<td nowrap><?php echo h($remark['Remark']['id']); ?>&nbsp;</td>
											<td nowrap><?php echo h($remark['Remark']['user_id']); ?>&nbsp;</td>
											<td nowrap><?php echo h($remark['Remark']['remark']); ?>&nbsp;</td>
											<td nowrap><?php echo h($remark['Remark']['by']); ?>&nbsp;</td>
											<td nowrap><?php echo h($remark['Remark']['created']); ?>&nbsp;</td>
											<td nowrap><?php echo h($remark['Remark']['modified']); ?>&nbsp;</td>
											<td nowrap style="text-align: center;">
												<?php echo $this->Html->link(__('View'), array('action' => 'view', $remark['Remark']['id']), array('class' => 'btn btn-default')); ?>
												<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $remark['Remark']['id']), array('class' => 'btn btn-default')); ?>
												<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $remark['Remark']['id']), array('class' => 'btn btn-default'), __('Are you sure you want to delete "%s"?', $remark['Remark']['remark'])); ?>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
						<!-- /.table-responsive -->
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<?php $this->start('css'); ?>
<!-- DataTables CSS -->
<?= $this->Html->css('/sb-admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap') ?>
<!-- DataTables Responsive CSS -->
<?= $this->Html->css('/sb-admin/bower_components/datatables-responsive/css/dataTables.responsive') ?>
<?php $this->end(); ?>

<?php $this->start('script'); ?>
<!-- DataTables JavaScript -->
<?= $this->Html->script('/sb-admin/bower_components/datatables/media/js/jquery.dataTables.min') ?>
<?= $this->Html->script('/sb-admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min') ?>
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
	$(document).ready(function () {
		$('#dataTables-example').DataTable({
			responsive: true,
			"language": {
				"sProcessing": "処理中...",
				"sLengthMenu": "_MENU_ 件表示",
				"sZeroRecords": "データはありません。",
				"sInfo": " _TOTAL_ 件中 _START_ から _END_ まで表示",
				"sInfoEmpty": " 0 件中 0 から 0 まで表示",
				"sInfoFiltered": "（全 _MAX_ 件より抽出）",
				"sInfoPostFix": "",
				"sSearch": "検索:",
				"sUrl": "",
				"oPaginate": {
					"sFirst": "先頭",
					"sPrevious": "前",
					"sNext": "次",
					"sLast": "最終"
				}
			}
		});
	});
</script>
<?php $this->end();