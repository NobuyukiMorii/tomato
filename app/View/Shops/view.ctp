<div class="shops view">
<h2><?php echo __('Shop'); ?></h2>
	<dl>
		<dt><?php echo __('Shop Id'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['shop_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop Detail Id'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['shop_detail_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop Type Id'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['shop_type_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Id'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['country_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo Id'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['photo_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($shop['Shop']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shop'), array('action' => 'edit', $shop['Shop']['shop_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shop'), array('action' => 'delete', $shop['Shop']['shop_id']), array('confirm' => __('Are you sure you want to delete # %s?', $shop['Shop']['shop_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Shops'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop'), array('action' => 'add')); ?> </li>
	</ul>
</div>
