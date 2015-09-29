<div class="userPhotos view">
<h2><?php echo __('User Photo'); ?></h2>
	<dl>
		<dt><?php echo __('User Photo Id'); ?></dt>
		<dd>
			<?php echo h($userPhoto['UserPhoto']['user_photo_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($userPhoto['UserPhoto']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo Id'); ?></dt>
		<dd>
			<?php echo h($userPhoto['UserPhoto']['photo_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profile Photo Flg'); ?></dt>
		<dd>
			<?php echo h($userPhoto['UserPhoto']['profile_photo_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reported Count'); ?></dt>
		<dd>
			<?php echo h($userPhoto['UserPhoto']['reported_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($userPhoto['UserPhoto']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($userPhoto['UserPhoto']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($userPhoto['UserPhoto']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Photo'), array('action' => 'edit', $userPhoto['UserPhoto']['user_photo_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Photo'), array('action' => 'delete', $userPhoto['UserPhoto']['user_photo_id']), array('confirm' => __('Are you sure you want to delete # %s?', $userPhoto['UserPhoto']['user_photo_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List User Photos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Photo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
