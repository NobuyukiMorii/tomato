<div class="reviews view">
<h2><?php echo __('Review'); ?></h2>
	<dl>
		<dt><?php echo __('Review Id'); ?></dt>
		<dd>
			<?php echo h($review['Review']['review_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($review['Review']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Id'); ?></dt>
		<dd>
			<?php echo h($review['Review']['item_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review'); ?></dt>
		<dd>
			<?php echo h($review['Review']['review']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review Photo Id'); ?></dt>
		<dd>
			<?php echo h($review['Review']['review_photo_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Point'); ?></dt>
		<dd>
			<?php echo h($review['Review']['point']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reported Count'); ?></dt>
		<dd>
			<?php echo h($review['Review']['reported_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($review['Review']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($review['Review']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($review['Review']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Review'), array('action' => 'edit', $review['Review']['review_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Review'), array('action' => 'delete', $review['Review']['review_id']), array('confirm' => __('Are you sure you want to delete # %s?', $review['Review']['review_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('action' => 'add')); ?> </li>
	</ul>
</div>
