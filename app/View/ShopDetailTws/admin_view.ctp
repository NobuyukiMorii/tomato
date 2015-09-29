<div class="shopDetailTws view">
<h2><?php echo __('Shop Detail Tw'); ?></h2>
	<dl>
		<dt><?php echo __('Shop Detail Id'); ?></dt>
		<dd>
			<?php echo h($shopDetailTw['ShopDetailTw']['shop_detail_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($shopDetailTw['ShopDetailTw']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($shopDetailTw['ShopDetailTw']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip Code'); ?></dt>
		<dd>
			<?php echo h($shopDetailTw['ShopDetailTw']['zip_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($shopDetailTw['ShopDetailTw']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($shopDetailTw['ShopDetailTw']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($shopDetailTw['ShopDetailTw']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($shopDetailTw['ShopDetailTw']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($shopDetailTw['ShopDetailTw']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($shopDetailTw['ShopDetailTw']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shop Detail Tw'), array('action' => 'edit', $shopDetailTw['ShopDetailTw']['shop_detail_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shop Detail Tw'), array('action' => 'delete', $shopDetailTw['ShopDetailTw']['shop_detail_id']), array('confirm' => __('Are you sure you want to delete # %s?', $shopDetailTw['ShopDetailTw']['shop_detail_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Shop Detail Tws'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop Detail Tw'), array('action' => 'add')); ?> </li>
	</ul>
</div>
