<div class="userProfiles view">
<h2><?php echo __('User Profile'); ?></h2>
	<dl>
		<dt><?php echo __('User Profile Id'); ?></dt>
		<dd>
			<?php echo h($userProfile['UserProfile']['user_profile_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($userProfile['UserProfile']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nickname'); ?></dt>
		<dd>
			<?php echo h($userProfile['UserProfile']['nickname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($userProfile['UserProfile']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($userProfile['UserProfile']['age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Language Code'); ?></dt>
		<dd>
			<?php echo h($userProfile['UserProfile']['language_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($userProfile['UserProfile']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($userProfile['UserProfile']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($userProfile['UserProfile']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Profile'), array('action' => 'edit', $userProfile['UserProfile']['user_profile_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Profile'), array('action' => 'delete', $userProfile['UserProfile']['user_profile_id']), array('confirm' => __('Are you sure you want to delete # %s?', $userProfile['UserProfile']['user_profile_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List User Profiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Profile'), array('action' => 'add')); ?> </li>
	</ul>
</div>
