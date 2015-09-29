<div class="purchases index">
	<h2><?php echo __('Purchases'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('purchase_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('seller_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('buyer_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('purchase_status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('delivery_id'); ?></th>
			<th><?php echo $this->Paginator->sort('compensate_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('del_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($purchases as $purchase): ?>
	<tr>
		<td><?php echo h($purchase['Purchase']['purchase_id']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['item_id']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['seller_user_id']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['buyer_user_id']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['purchase_status_id']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['delivery_id']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['compensate_flg']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['del_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $purchase['Purchase']['purchase_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $purchase['Purchase']['purchase_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $purchase['Purchase']['purchase_id']), array('confirm' => __('Are you sure you want to delete # %s?', $purchase['Purchase']['purchase_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Purchase'), array('action' => 'add')); ?></li>
	</ul>
</div>
