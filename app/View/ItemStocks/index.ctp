<div class="itemStocks index">
	<h2><?php echo __('Item Stocks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('item_stock_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cost'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('get_date'); ?></th>
			<th><?php echo $this->Paginator->sort('sell_date'); ?></th>
			<th><?php echo $this->Paginator->sort('buyer'); ?></th>
			<th><?php echo $this->Paginator->sort('item_condition_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('del_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($itemStocks as $itemStock): ?>
	<tr>
		<td><?php echo h($itemStock['ItemStock']['item_stock_id']); ?>&nbsp;</td>
		<td><?php echo h($itemStock['ItemStock']['cost']); ?>&nbsp;</td>
		<td><?php echo h($itemStock['ItemStock']['shop_id']); ?>&nbsp;</td>
		<td><?php echo h($itemStock['ItemStock']['status']); ?>&nbsp;</td>
		<td><?php echo h($itemStock['ItemStock']['get_date']); ?>&nbsp;</td>
		<td><?php echo h($itemStock['ItemStock']['sell_date']); ?>&nbsp;</td>
		<td><?php echo h($itemStock['ItemStock']['buyer']); ?>&nbsp;</td>
		<td><?php echo h($itemStock['ItemStock']['item_condition_id']); ?>&nbsp;</td>
		<td><?php echo h($itemStock['ItemStock']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($itemStock['ItemStock']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($itemStock['ItemStock']['del_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itemStock['ItemStock']['item_stock_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itemStock['ItemStock']['item_stock_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itemStock['ItemStock']['item_stock_id']), array('confirm' => __('Are you sure you want to delete # %s?', $itemStock['ItemStock']['item_stock_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Item Stock'), array('action' => 'add')); ?></li>
	</ul>
</div>
