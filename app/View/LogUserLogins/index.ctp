<div class="logUserLogins index">
	<h2><?php echo __('Log User Logins'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('log_user_access_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('login_date'); ?></th>
			<th><?php echo $this->Paginator->sort('login_type'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_data'); ?></th>
			<th><?php echo $this->Paginator->sort('del_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($logUserLogins as $logUserLogin): ?>
	<tr>
		<td><?php echo h($logUserLogin['LogUserLogin']['log_user_access_id']); ?>&nbsp;</td>
		<td><?php echo h($logUserLogin['LogUserLogin']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($logUserLogin['LogUserLogin']['login_date']); ?>&nbsp;</td>
		<td><?php echo h($logUserLogin['LogUserLogin']['login_type']); ?>&nbsp;</td>
		<td><?php echo h($logUserLogin['LogUserLogin']['status']); ?>&nbsp;</td>
		<td><?php echo h($logUserLogin['LogUserLogin']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($logUserLogin['LogUserLogin']['updated_data']); ?>&nbsp;</td>
		<td><?php echo h($logUserLogin['LogUserLogin']['del_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $logUserLogin['LogUserLogin']['log_user_access_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $logUserLogin['LogUserLogin']['log_user_access_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $logUserLogin['LogUserLogin']['log_user_access_id']), array('confirm' => __('Are you sure you want to delete # %s?', $logUserLogin['LogUserLogin']['log_user_access_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Log User Login'), array('action' => 'add')); ?></li>
	</ul>
</div>
