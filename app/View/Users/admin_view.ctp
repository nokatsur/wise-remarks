<div id="wrapper">

	<?php echo $this->element('nav'); ?>

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php echo __('View User'); ?></h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<?php echo __('User'); ?>
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped">
								<tbody>
									<tr>
										<td><?php echo __('Id'); ?></td>
										<td><?php echo h($user['User']['id']); ?></td>
									</tr>
									<tr>
										<td><?php echo __('Username'); ?></td>
										<td><?php echo h($user['User']['username']); ?></td>
									</tr>
									<tr>
										<td><?php echo __('Created'); ?></td>
										<td><?php echo h($user['User']['created']); ?></td>
									</tr>
									<tr>
										<td><?php echo __('Modified'); ?></td>
										<td><?php echo h($user['User']['modified']); ?></td>
									</tr>
								</tbody>
							</table>
						<?php
						echo $this->Form->postLink(__('Delete'),
							array('action' => 'delete', $user['User']['id']),
							array('class' => 'btn btn-default', 'style' => 'float: right;'),
							__('Are you sure you want to delete # %s?', $user['User']['id']));
						?>
						</div>
						<!-- /.table-responsive -->
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-6 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
