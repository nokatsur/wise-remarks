<div class="remarks view">
<h2><?php echo __('Remark'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($remark['Remark']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($remark['User']['username'], array('controller' => 'users', 'action' => 'view', $remark['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remark'); ?></dt>
		<dd>
			<?php echo h($remark['Remark']['remark']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('By'); ?></dt>
		<dd>
			<?php echo h($remark['Remark']['by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($remark['Remark']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($remark['Remark']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Remark'), array('action' => 'edit', $remark['Remark']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Remark'), array('action' => 'delete', $remark['Remark']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $remark['Remark']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Remarks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Remark'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
