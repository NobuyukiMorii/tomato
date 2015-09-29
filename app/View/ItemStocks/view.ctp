<div class="itemStocks view">
<h2><?php echo __('Item Stock'); ?></h2>
	<dl>
		<dt><?php echo __('Item Stock Id'); ?></dt>
		<dd>
			<?php echo h($itemStock['ItemStock']['item_stock_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($itemStock['ItemStock']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop Id'); ?></dt>
		<dd>
			<?php echo h($itemStock['ItemStock']['shop_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($itemStock['ItemStock']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Get Date'); ?></dt>
		<dd>
			<?php echo h($itemStock['ItemStock']['get_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sell Date'); ?></dt>
		<dd>
			<?php echo h($itemStock['ItemStock']['sell_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Buyer'); ?></dt>
		<dd>
			<?php echo h($itemStock['ItemStock']['buyer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Condition Id'); ?></dt>
		<dd>
			<?php echo h($itemStock['ItemStock']['item_condition_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($itemStock['ItemStock']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($itemStock['ItemStock']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($itemStock['ItemStock']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item Stock'), array('action' => 'edit', $itemStock['ItemStock']['item_stock_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item Stock'), array('action' => 'delete', $itemStock['ItemStock']['item_stock_id']), array('confirm' => __('Are you sure you want to delete # %s?', $itemStock['ItemStock']['item_stock_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Stocks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Stock'), array('action' => 'add')); ?> </li>
	</ul>
</div>
