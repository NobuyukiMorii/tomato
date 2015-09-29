<div class="itemSalesCounts view">
<h2><?php echo __('Item Sales Count'); ?></h2>
	<dl>
		<dt><?php echo __('Item Sales Count Id'); ?></dt>
		<dd>
			<?php echo h($itemSalesCount['ItemSalesCount']['item_sales_count_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Count'); ?></dt>
		<dd>
			<?php echo h($itemSalesCount['ItemSalesCount']['count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($itemSalesCount['ItemSalesCount']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($itemSalesCount['ItemSalesCount']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($itemSalesCount['ItemSalesCount']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item Sales Count'), array('action' => 'edit', $itemSalesCount['ItemSalesCount']['item_sales_count_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item Sales Count'), array('action' => 'delete', $itemSalesCount['ItemSalesCount']['item_sales_count_id']), array('confirm' => __('Are you sure you want to delete # %s?', $itemSalesCount['ItemSalesCount']['item_sales_count_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Sales Counts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Sales Count'), array('action' => 'add')); ?> </li>
	</ul>
</div>
