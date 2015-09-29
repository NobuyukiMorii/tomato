<div class="itemDetailEns view">
<h2><?php echo __('Item Detail En'); ?></h2>
	<dl>
		<dt><?php echo __('Item Detail Id'); ?></dt>
		<dd>
			<?php echo h($itemDetailEn['ItemDetailEn']['item_detail_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($itemDetailEn['ItemDetailEn']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($itemDetailEn['ItemDetailEn']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($itemDetailEn['ItemDetailEn']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($itemDetailEn['ItemDetailEn']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($itemDetailEn['ItemDetailEn']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item Detail En'), array('action' => 'edit', $itemDetailEn['ItemDetailEn']['item_detail_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item Detail En'), array('action' => 'delete', $itemDetailEn['ItemDetailEn']['item_detail_id']), array('confirm' => __('Are you sure you want to delete # %s?', $itemDetailEn['ItemDetailEn']['item_detail_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Detail Ens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Detail En'), array('action' => 'add')); ?> </li>
	</ul>
</div>
