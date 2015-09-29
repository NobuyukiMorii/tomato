<div class="itemConditions form">
<?php echo $this->Form->create('ItemCondition'); ?>
	<fieldset>
		<legend><?php echo __('Add Item Condition'); ?></legend>
	<?php
		echo $this->Form->input('item_stock_id');
		echo $this->Form->input('item_stock_condition');
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

		<li><?php echo $this->Html->link(__('List Item Conditions'), array('action' => 'index')); ?></li>
	</ul>
</div>
