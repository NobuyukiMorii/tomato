<div class="itemSalesCounts form">
<?php echo $this->Form->create('ItemSalesCount'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Item Sales Count'); ?></legend>
	<?php
		echo $this->Form->input('item_sales_count_id');
		echo $this->Form->input('count');
		echo $this->Form->input('created_date');
		echo $this->Form->input('updated_date');
		echo $this->Form->input('del_flg');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ItemSalesCount.item_sales_count_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ItemSalesCount.item_sales_count_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Item Sales Counts'), array('action' => 'index')); ?></li>
	</ul>
</div>
