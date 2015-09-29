<div class="purchaseStatuses view">
<h2><?php echo __('Purchase Status'); ?></h2>
	<dl>
		<dt><?php echo __('Purchase Status Id'); ?></dt>
		<dd>
			<?php echo h($purchaseStatus['PurchaseStatus']['purchase_status_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Id'); ?></dt>
		<dd>
			<?php echo h($purchaseStatus['PurchaseStatus']['purchase_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($purchaseStatus['PurchaseStatus']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Date'); ?></dt>
		<dd>
			<?php echo h($purchaseStatus['PurchaseStatus']['order_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contract Date'); ?></dt>
		<dd>
			<?php echo h($purchaseStatus['PurchaseStatus']['contract_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Date'); ?></dt>
		<dd>
			<?php echo h($purchaseStatus['PurchaseStatus']['payment_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cancel Date'); ?></dt>
		<dd>
			<?php echo h($purchaseStatus['PurchaseStatus']['cancel_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Error Date'); ?></dt>
		<dd>
			<?php echo h($purchaseStatus['PurchaseStatus']['error_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($purchaseStatus['PurchaseStatus']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($purchaseStatus['PurchaseStatus']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($purchaseStatus['PurchaseStatus']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Purchase Status'), array('action' => 'edit', $purchaseStatus['PurchaseStatus']['purchase_status_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Purchase Status'), array('action' => 'delete', $purchaseStatus['PurchaseStatus']['purchase_status_id']), array('confirm' => __('Are you sure you want to delete # %s?', $purchaseStatus['PurchaseStatus']['purchase_status_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchase Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase Status'), array('action' => 'add')); ?> </li>
	</ul>
</div>
