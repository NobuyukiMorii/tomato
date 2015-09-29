<div class="logItemViews view">
<h2><?php echo __('Log Item View'); ?></h2>
	<dl>
		<dt><?php echo __('Log Item View Id'); ?></dt>
		<dd>
			<?php echo h($logItemView['LogItemView']['log_item_view_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Id'); ?></dt>
		<dd>
			<?php echo h($logItemView['LogItemView']['item_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($logItemView['LogItemView']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Device'); ?></dt>
		<dd>
			<?php echo h($logItemView['LogItemView']['device']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($logItemView['LogItemView']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($logItemView['LogItemView']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($logItemView['LogItemView']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Log Item View'), array('action' => 'edit', $logItemView['LogItemView']['log_item_view_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Log Item View'), array('action' => 'delete', $logItemView['LogItemView']['log_item_view_id']), array('confirm' => __('Are you sure you want to delete # %s?', $logItemView['LogItemView']['log_item_view_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Log Item Views'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log Item View'), array('action' => 'add')); ?> </li>
	</ul>
</div>
