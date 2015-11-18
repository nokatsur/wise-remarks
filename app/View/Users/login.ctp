<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="login-panel panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo __('Please Sign In'); ?></h3>
			</div>
			<div class="panel-body">
				<?php
				echo $this->Form->create('User', array(
					'action' => 'login',
					'role' => 'form',
					'inputDefaults' => array(
						'label' => false,
						'legend' => false,
						'required' => false,
						'class' => 'form-control',
						'div' => array(
							'class' => 'form-group'
						),
					),
						)
				);
				?>
				<fieldset>
					<?php
					echo $this->Form->input('username', array(
						'autofocus' => 'autofocus',
						'placeholder' => __('Username'),
					));
					?>
					<?php
					echo $this->Form->input('password', array(
						'placeholder' => __('Password'),
						'value' => '',
					));
					?>
					<!--
					<div class = "checkbox">
						<label>
							<input name = "remember" type = "checkbox" value = "Remember Me"><?php echo __('Remember Me'); ?>
						</label>
					</div>
					-->
					<?php
					echo $this->Form->end(array(
						'label' => __('Login'),
						'class' => 'btn btn-lg btn-success btn-block',
					));
					?>
				</fieldset>
			</div>
		</div>
	</div>
</div>
</div>
<?php echo $this->element('common');
