<div class="shopDetailEns view">
<h2><?php echo __('Shop Detail En'); ?></h2>
	<dl>
		<dt><?php echo __('Item Detail Id'); ?></dt>
		<dd>
			<?php echo h($shopDetailEn['ShopDetailEn']['item_detail_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($shopDetailEn['ShopDetailEn']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($shopDetailEn['ShopDetailEn']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip Code'); ?></dt>
		<dd>
			<?php echo h($shopDetailEn['ShopDetailEn']['zip_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($shopDetailEn['ShopDetailEn']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($shopDetailEn['ShopDetailEn']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($shopDetailEn['ShopDetailEn']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($shopDetailEn['ShopDetailEn']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($shopDetailEn['ShopDetailEn']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($shopDetailEn['ShopDetailEn']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shop Detail En'), array('action' => 'edit', $shopDetailEn['ShopDetailEn']['item_detail_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shop Detail En'), array('action' => 'delete', $shopDetailEn['ShopDetailEn']['item_detail_id']), array('confirm' => __('Are you sure you want to delete # %s?', $shopDetailEn['ShopDetailEn']['item_detail_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Shop Detail Ens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop Detail En'), array('action' => 'add')); ?> </li>
	</ul>
</div>
