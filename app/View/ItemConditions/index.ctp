<div class="itemConditions index">
	<h2><?php echo __('Item Conditions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('item_condition_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_stock_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_stock_condition'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('del_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($itemConditions as $itemCondition): ?>
	<tr>
		<td><?php echo h($itemCondition['ItemCondition']['item_condition_id']); ?>&nbsp;</td>
		<td><?php echo h($itemCondition['ItemCondition']['item_stock_id']); ?>&nbsp;</td>
		<td><?php echo h($itemCondition['ItemCondition']['item_stock_condition']); ?>&nbsp;</td>
		<td><?php echo h($itemCondition['ItemCondition']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($itemCondition['ItemCondition']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($itemCondition['ItemCondition']['del_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itemCondition['ItemCondition']['item_condition_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itemCondition['ItemCondition']['item_condition_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itemCondition['ItemCondition']['item_condition_id']), array('confirm' => __('Are you sure you want to delete # %s?', $itemCondition['ItemCondition']['item_condition_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Item Condition'), array('action' => 'add')); ?></li>
	</ul>
</div>
