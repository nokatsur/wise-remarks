<div class="remarks form">
<?php echo $this->Form->create('Remark'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Remark'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('remark');
		echo $this->Form->input('by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Remark.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Remark.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Remarks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
