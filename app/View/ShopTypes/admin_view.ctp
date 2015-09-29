<div class="shopTypes view">
<h2><?php echo __('Shop Type'); ?></h2>
	<dl>
		<dt><?php echo __('Shop Type Id'); ?></dt>
		<dd>
			<?php echo h($shopType['ShopType']['shop_type_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($shopType['ShopType']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($shopType['ShopType']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($shopType['ShopType']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($shopType['ShopType']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shop Type'), array('action' => 'edit', $shopType['ShopType']['shop_type_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shop Type'), array('action' => 'delete', $shopType['ShopType']['shop_type_id']), array('confirm' => __('Are you sure you want to delete # %s?', $shopType['ShopType']['shop_type_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Shop Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
