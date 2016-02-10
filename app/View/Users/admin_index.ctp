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
							<div class="row">
								<div class="col-sm-12" style='text-align: left;'>
									<div id="dataTables-example_filter" class="dataTables_filter">
										<label style="float: left;"><?= __('Username') ?>:
											<?= $this->Form->input('username', Configure::read('form.users.username')); ?>
											<!--<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example">-->
										</label>
										<p><button type="button" class="btn btn-default"><?= __('Search') ?></button></p>
									</div>
								</div>
							</div>
							<table class="table table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th><?php echo $this->Paginator->sort('id'); ?></th>
										<th><?php echo $this->Paginator->sort('username'); ?></th>
										<th><?php echo $this->Paginator->sort('created'); ?></th>
										<th><?php echo $this->Paginator->sort('modified'); ?></th>
										<th><?php echo __('Actions'); ?></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($users as $user): ?>
										<tr>
											<td nowrap><?php echo h($user['User']['id']); ?>&nbsp;</td>
											<td nowrap><?php echo h($user['User']['username']); ?>&nbsp;</td>
											<td nowrap><?php echo h($user['User']['created']); ?>&nbsp;</td>
											<td nowrap><?php echo h($user['User']['modified']); ?>&nbsp;</td>
											<td nowrap style="text-align: center;">
												<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']), array('class' => 'btn btn-default')); ?>
												<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-default')); ?>
												<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-default'), __('Are you sure you want to delete "%s"?', $user['User']['username'])); ?>
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
<?php
$this->end();
