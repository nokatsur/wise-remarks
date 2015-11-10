<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Remarks'), array('controller' => 'remarks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Remark'), array('controller' => 'remarks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Remarks'); ?></h3>
	<?php if (!empty($user['Remark'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Remark'); ?></th>
		<th><?php echo __('By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Remark'] as $remark): ?>
		<tr>
			<td><?php echo $remark['id']; ?></td>
			<td><?php echo $remark['user_id']; ?></td>
			<td><?php echo $remark['remark']; ?></td>
			<td><?php echo $remark['by']; ?></td>
			<td><?php echo $remark['created']; ?></td>
			<td><?php echo $remark['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'remarks', 'action' => 'view', $remark['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'remarks', 'action' => 'edit', $remark['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'remarks', 'action' => 'delete', $remark['id']), array(), __('Are you sure you want to delete # %s?', $remark['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Remark'), array('controller' => 'remarks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
