<div class="messages index">
	<h2><?php echo __('Messages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('message_id'); ?></th>
			<th><?php echo $this->Paginator->sort('message'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('count'); ?></th>
			<th><?php echo $this->Paginator->sort('photo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('reported_count'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('del_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($messages as $message): ?>
	<tr>
		<td><?php echo h($message['Message']['message_id']); ?>&nbsp;</td>
		<td><?php echo h($message['Message']['message']); ?>&nbsp;</td>
		<td><?php echo h($message['Message']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($message['Message']['count']); ?>&nbsp;</td>
		<td><?php echo h($message['Message']['photo_id']); ?>&nbsp;</td>
		<td><?php echo h($message['Message']['reported_count']); ?>&nbsp;</td>
		<td><?php echo h($message['Message']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($message['Message']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($message['Message']['del_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $message['Message']['message_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $message['Message']['message_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $message['Message']['message_id']), array('confirm' => __('Are you sure you want to delete # %s?', $message['Message']['message_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Message'), array('action' => 'add')); ?></li>
	</ul>
</div>
