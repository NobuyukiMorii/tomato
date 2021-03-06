<div class="items index">
	<h2><?php echo __('Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_detail__id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_stock_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_id'); ?></th>
			<th><?php echo $this->Paginator->sort('photo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('admin_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_view_count_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_sales_count_id'); ?></th>
			<th><?php echo $this->Paginator->sort('started_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('reported_count'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('del_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($items as $item): ?>
	<tr>
		<td><?php echo h($item['Item']['item_id']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['item_detail__id']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['item_stock_id']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['category_id']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['price']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['shop_id']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['photo_id']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['admin_user_id']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['item_view_count_id']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['item_sales_count_id']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['started_date']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['reported_count']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['del_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['item_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $item['Item']['item_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Item']['item_id']), array('confirm' => __('Are you sure you want to delete # %s?', $item['Item']['item_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?></li>
	</ul>
</div>
