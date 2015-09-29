<div class="reviewPhotos view">
<h2><?php echo __('Review Photo'); ?></h2>
	<dl>
		<dt><?php echo __('Review Photo Id'); ?></dt>
		<dd>
			<?php echo h($reviewPhoto['ReviewPhoto']['review_photo_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Review Id'); ?></dt>
		<dd>
			<?php echo h($reviewPhoto['ReviewPhoto']['review_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo Id'); ?></dt>
		<dd>
			<?php echo h($reviewPhoto['ReviewPhoto']['photo_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reported Count'); ?></dt>
		<dd>
			<?php echo h($reviewPhoto['ReviewPhoto']['reported_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($reviewPhoto['ReviewPhoto']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($reviewPhoto['ReviewPhoto']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($reviewPhoto['ReviewPhoto']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Review Photo'), array('action' => 'edit', $reviewPhoto['ReviewPhoto']['review_photo_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Review Photo'), array('action' => 'delete', $reviewPhoto['ReviewPhoto']['review_photo_id']), array('confirm' => __('Are you sure you want to delete # %s?', $reviewPhoto['ReviewPhoto']['review_photo_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Review Photos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review Photo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
