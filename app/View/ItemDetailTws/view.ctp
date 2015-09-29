<div class="itemDetailTws view">
<h2><?php echo __('Item Detail Tw'); ?></h2>
	<dl>
		<dt><?php echo __('Item Detail Id'); ?></dt>
		<dd>
			<?php echo h($itemDetailTw['ItemDetailTw']['item_detail_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($itemDetailTw['ItemDetailTw']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($itemDetailTw['ItemDetailTw']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($itemDetailTw['ItemDetailTw']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($itemDetailTw['ItemDetailTw']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($itemDetailTw['ItemDetailTw']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item Detail Tw'), array('action' => 'edit', $itemDetailTw['ItemDetailTw']['item_detail_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item Detail Tw'), array('action' => 'delete', $itemDetailTw['ItemDetailTw']['item_detail_id']), array('confirm' => __('Are you sure you want to delete # %s?', $itemDetailTw['ItemDetailTw']['item_detail_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Detail Tws'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Detail Tw'), array('action' => 'add')); ?> </li>
	</ul>
</div>
