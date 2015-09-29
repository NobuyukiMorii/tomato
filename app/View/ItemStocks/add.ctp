<div class="itemStocks form">
<?php echo $this->Form->create('ItemStock'); ?>
	<fieldset>
		<legend><?php echo __('Add Item Stock'); ?></legend>
	<?php
		echo $this->Form->input('cost');
		echo $this->Form->input('shop_id');
		echo $this->Form->input('status');
		echo $this->Form->input('get_date');
		echo $this->Form->input('sell_date');
		echo $this->Form->input('buyer');
		echo $this->Form->input('item_condition_id');
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

		<li><?php echo $this->Html->link(__('List Item Stocks'), array('action' => 'index')); ?></li>
	</ul>
</div>
