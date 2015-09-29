<div class="purchaseStatuses form">
<?php echo $this->Form->create('PurchaseStatus'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Purchase Status'); ?></legend>
	<?php
		echo $this->Form->input('purchase_status_id');
		echo $this->Form->input('purchase_id');
		echo $this->Form->input('status');
		echo $this->Form->input('order_date');
		echo $this->Form->input('contract_date');
		echo $this->Form->input('payment_date');
		echo $this->Form->input('cancel_date');
		echo $this->Form->input('error_date');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PurchaseStatus.purchase_status_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('PurchaseStatus.purchase_status_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Purchase Statuses'), array('action' => 'index')); ?></li>
	</ul>
</div>
