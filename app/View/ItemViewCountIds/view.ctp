<div class="itemViewCountIds view">
<h2><?php echo __('Item View Count Id'); ?></h2>
	<dl>
		<dt><?php echo __('Item View Count Id'); ?></dt>
		<dd>
			<?php echo h($itemViewCountId['ItemViewCountId']['item_view_count_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Count'); ?></dt>
		<dd>
			<?php echo h($itemViewCountId['ItemViewCountId']['count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($itemViewCountId['ItemViewCountId']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($itemViewCountId['ItemViewCountId']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($itemViewCountId['ItemViewCountId']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item View Count Id'), array('action' => 'edit', $itemViewCountId['ItemViewCountId']['item_view_count_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item View Count Id'), array('action' => 'delete', $itemViewCountId['ItemViewCountId']['item_view_count_id']), array('confirm' => __('Are you sure you want to delete # %s?', $itemViewCountId['ItemViewCountId']['item_view_count_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Item View Count Ids'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item View Count Id'), array('action' => 'add')); ?> </li>
	</ul>
</div>
