<div class="userAdmins index">
	<h2><?php echo __('User Admins'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('user_admin_id'); ?></th>
			<th><?php echo $this->Paginator->sort('authority_level'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('del_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($userAdmins as $userAdmin): ?>
	<tr>
		<td><?php echo h($userAdmin['UserAdmin']['user_admin_id']); ?>&nbsp;</td>
		<td><?php echo h($userAdmin['UserAdmin']['authority_level']); ?>&nbsp;</td>
		<td><?php echo h($userAdmin['UserAdmin']['username']); ?>&nbsp;</td>
		<td><?php echo h($userAdmin['UserAdmin']['password']); ?>&nbsp;</td>
		<td><?php echo h($userAdmin['UserAdmin']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($userAdmin['UserAdmin']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($userAdmin['UserAdmin']['del_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userAdmin['UserAdmin']['user_admin_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userAdmin['UserAdmin']['user_admin_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userAdmin['UserAdmin']['user_admin_id']), array('confirm' => __('Are you sure you want to delete # %s?', $userAdmin['UserAdmin']['user_admin_id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User Admin'), array('action' => 'add')); ?></li>
	</ul>
</div>
