<div class="purchases view">
<h2><?php echo __('Purchase'); ?></h2>
	<dl>
		<dt><?php echo __('Purchase Id'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['purchase_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Id'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['item_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seller User Id'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['seller_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Buyer User Id'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['buyer_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Status Id'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['purchase_status_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delivery Id'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['delivery_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Compensate Flg'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['compensate_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Purchase'), array('action' => 'edit', $purchase['Purchase']['purchase_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Purchase'), array('action' => 'delete', $purchase['Purchase']['purchase_id']), array('confirm' => __('Are you sure you want to delete # %s?', $purchase['Purchase']['purchase_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchases'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase'), array('action' => 'add')); ?> </li>
	</ul>
</div>
