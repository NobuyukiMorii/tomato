<div class="photoSizes view">
<h2><?php echo __('Photo Size'); ?></h2>
	<dl>
		<dt><?php echo __('Photo Size Id'); ?></dt>
		<dd>
			<?php echo h($photoSize['PhotoSize']['photo_size_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Width'); ?></dt>
		<dd>
			<?php echo h($photoSize['PhotoSize']['width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($photoSize['PhotoSize']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($photoSize['PhotoSize']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($photoSize['PhotoSize']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($photoSize['PhotoSize']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Photo Size'), array('action' => 'edit', $photoSize['PhotoSize']['photo_size_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Photo Size'), array('action' => 'delete', $photoSize['PhotoSize']['photo_size_id']), array('confirm' => __('Are you sure you want to delete # %s?', $photoSize['PhotoSize']['photo_size_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Photo Sizes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo Size'), array('action' => 'add')); ?> </li>
	</ul>
</div>
