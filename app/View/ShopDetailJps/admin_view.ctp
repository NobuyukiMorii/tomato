<div class="shopDetailJps view">
<h2><?php echo __('Shop Detail Jp'); ?></h2>
	<dl>
		<dt><?php echo __('Shop Detail Id'); ?></dt>
		<dd>
			<?php echo h($shopDetailJp['ShopDetailJp']['shop_detail_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($shopDetailJp['ShopDetailJp']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($shopDetailJp['ShopDetailJp']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip Code'); ?></dt>
		<dd>
			<?php echo h($shopDetailJp['ShopDetailJp']['zip_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($shopDetailJp['ShopDetailJp']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($shopDetailJp['ShopDetailJp']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($shopDetailJp['ShopDetailJp']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($shopDetailJp['ShopDetailJp']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($shopDetailJp['ShopDetailJp']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($shopDetailJp['ShopDetailJp']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shop Detail Jp'), array('action' => 'edit', $shopDetailJp['ShopDetailJp']['shop_detail_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shop Detail Jp'), array('action' => 'delete', $shopDetailJp['ShopDetailJp']['shop_detail_id']), array('confirm' => __('Are you sure you want to delete # %s?', $shopDetailJp['ShopDetailJp']['shop_detail_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Shop Detail Jps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop Detail Jp'), array('action' => 'add')); ?> </li>
	</ul>
</div>
