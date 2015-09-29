<div class="photos view">
<h2><?php echo __('Photo'); ?></h2>
	<dl>
		<dt><?php echo __('Photo Id'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['photo_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo Size Id'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['photo_size_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Folder Name'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['folder_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Data'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['updated_data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Photo'), array('action' => 'edit', $photo['Photo']['photo_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Photo'), array('action' => 'delete', $photo['Photo']['photo_id']), array('confirm' => __('Are you sure you want to delete # %s?', $photo['Photo']['photo_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
