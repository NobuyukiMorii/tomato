<div class="items view">
<h2><?php echo __('Item'); ?></h2>
	<dl>
		<dt><?php echo __('Item Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['item_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Detail  Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['item_detail__id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Stock Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['item_stock_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['category_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($item['Item']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['shop_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['photo_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Admin User Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['admin_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item View Count Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['item_view_count_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Sales Count Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['item_sales_count_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Started Date'); ?></dt>
		<dd>
			<?php echo h($item['Item']['started_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($item['Item']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reported Count'); ?></dt>
		<dd>
			<?php echo h($item['Item']['reported_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($item['Item']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($item['Item']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($item['Item']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['item_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['item_id']), array('confirm' => __('Are you sure you want to delete # %s?', $item['Item']['item_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
	</ul>
</div>
