<div id="wrapper">

	<?php echo $this->element('nav'); ?>

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php echo __('Add User'); ?></h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<?php echo __('User'); ?>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6">
								<?php
								echo $this->Form->create('User', array(
									'action' => 'admin_add',
									'role' => 'form',
									'inputDefaults' => array(
										'legend' => false,
										'required' => false,
										'class' => 'form-control',
										'div' => array(
											'class' => 'form-group'
										),
									),
								));
								?>
								<?php
								echo $this->Form->input('username', Configure::read('form.User.username'));
								echo $this->Form->input('password', Configure::read('form.User.password'));
								echo $this->Form->input('email', Configure::read('form.User.email'));
								echo $this->Form->button(__('Submit'), array('type' => 'submit', 'class' => 'btn btn-default'));
								echo $this->Form->button(__('Reset'), array('type' => 'reset', 'class' => 'btn btn-default'));
								echo $this->Form->end();
								?>
							</div>
							<!-- /.col-lg-6 (nested) -->
						</div>
						<!-- /.row (nested) -->
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg- -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /#page-wrapper -->

</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->