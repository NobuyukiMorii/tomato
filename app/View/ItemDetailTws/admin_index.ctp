<div class="itemDetailTws index">
	<h2><?php echo __('Item Detail Tws'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('item_detail_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('del_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($itemDetailTws as $itemDetailTw): ?>
	<tr>
		<td><?php echo h($itemDetailTw['ItemDetailTw']['item_detail_id']); ?>&nbsp;</td>
		<td><?php echo h($itemDetailTw['ItemDetailTw']['name']); ?>&nbsp;</td>
		<td><?php echo h($itemDetailTw['ItemDetailTw']['description']); ?>&nbsp;</td>
		<td><?php echo h($itemDetailTw['ItemDetailTw']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($itemDetailTw['ItemDetailTw']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($itemDetailTw['ItemDetailTw']['del_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itemDetailTw['ItemDetailTw']['item_detail_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itemDetailTw['ItemDetailTw']['item_detail_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itemDetailTw['ItemDetailTw']['item_detail_id']), array('confirm' => __('Are you sure you want to delete # %s?', $itemDetailTw['ItemDetailTw']['item_detail_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Item Detail Tw'), array('action' => 'add')); ?></li>
	</ul>
</div>
