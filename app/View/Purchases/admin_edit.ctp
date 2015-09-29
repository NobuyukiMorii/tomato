<div class="purchases form">
<?php echo $this->Form->create('Purchase'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Purchase'); ?></legend>
	<?php
		echo $this->Form->input('purchase_id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('seller_user_id');
		echo $this->Form->input('buyer_user_id');
		echo $this->Form->input('purchase_status_id');
		echo $this->Form->input('delivery_id');
		echo $this->Form->input('compensate_flg');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Purchase.purchase_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Purchase.purchase_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Purchases'), array('action' => 'index')); ?></li>
	</ul>
</div>
