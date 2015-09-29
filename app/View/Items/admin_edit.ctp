<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Item'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('item_detail__id');
		echo $this->Form->input('item_stock_id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('price');
		echo $this->Form->input('shop_id');
		echo $this->Form->input('photo_id');
		echo $this->Form->input('admin_user_id');
		echo $this->Form->input('item_view_count_id');
		echo $this->Form->input('item_sales_count_id');
		echo $this->Form->input('started_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('reported_count');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Item.item_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Item.item_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li>
	</ul>
</div>
