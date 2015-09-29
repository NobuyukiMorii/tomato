<div class="itemConditions view">
<h2><?php echo __('Item Condition'); ?></h2>
	<dl>
		<dt><?php echo __('Item Condition Id'); ?></dt>
		<dd>
			<?php echo h($itemCondition['ItemCondition']['item_condition_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Stock Id'); ?></dt>
		<dd>
			<?php echo h($itemCondition['ItemCondition']['item_stock_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Stock Condition'); ?></dt>
		<dd>
			<?php echo h($itemCondition['ItemCondition']['item_stock_condition']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($itemCondition['ItemCondition']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($itemCondition['ItemCondition']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($itemCondition['ItemCondition']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item Condition'), array('action' => 'edit', $itemCondition['ItemCondition']['item_condition_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item Condition'), array('action' => 'delete', $itemCondition['ItemCondition']['item_condition_id']), array('confirm' => __('Are you sure you want to delete # %s?', $itemCondition['ItemCondition']['item_condition_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Conditions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Condition'), array('action' => 'add')); ?> </li>
	</ul>
</div>
