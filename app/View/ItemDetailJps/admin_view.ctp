<div class="itemDetailJps view">
<h2><?php echo __('Item Detail Jp'); ?></h2>
	<dl>
		<dt><?php echo __('Item Detail Id'); ?></dt>
		<dd>
			<?php echo h($itemDetailJp['ItemDetailJp']['item_detail_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($itemDetailJp['ItemDetailJp']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($itemDetailJp['ItemDetailJp']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($itemDetailJp['ItemDetailJp']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($itemDetailJp['ItemDetailJp']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($itemDetailJp['ItemDetailJp']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item Detail Jp'), array('action' => 'edit', $itemDetailJp['ItemDetailJp']['item_detail_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item Detail Jp'), array('action' => 'delete', $itemDetailJp['ItemDetailJp']['item_detail_id']), array('confirm' => __('Are you sure you want to delete # %s?', $itemDetailJp['ItemDetailJp']['item_detail_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Detail Jps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Detail Jp'), array('action' => 'add')); ?> </li>
	</ul>
</div>
