<div class="userFacebookLoginInfos view">
<h2><?php echo __('User Facebook Login Info'); ?></h2>
	<dl>
		<dt><?php echo __('User Facebook Login Info Id'); ?></dt>
		<dd>
			<?php echo h($userFacebookLoginInfo['UserFacebookLoginInfo']['user_facebook_login_info_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($userFacebookLoginInfo['UserFacebookLoginInfo']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook Id'); ?></dt>
		<dd>
			<?php echo h($userFacebookLoginInfo['UserFacebookLoginInfo']['facebook_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook Name'); ?></dt>
		<dd>
			<?php echo h($userFacebookLoginInfo['UserFacebookLoginInfo']['facebook_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($userFacebookLoginInfo['UserFacebookLoginInfo']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($userFacebookLoginInfo['UserFacebookLoginInfo']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($userFacebookLoginInfo['UserFacebookLoginInfo']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Facebook Login Info'), array('action' => 'edit', $userFacebookLoginInfo['UserFacebookLoginInfo']['user_facebook_login_info_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Facebook Login Info'), array('action' => 'delete', $userFacebookLoginInfo['UserFacebookLoginInfo']['user_facebook_login_info_id']), array('confirm' => __('Are you sure you want to delete # %s?', $userFacebookLoginInfo['UserFacebookLoginInfo']['user_facebook_login_info_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List User Facebook Login Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Facebook Login Info'), array('action' => 'add')); ?> </li>
	</ul>
</div>
