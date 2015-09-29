<div class="logUserLogins view">
<h2><?php echo __('Log User Login'); ?></h2>
	<dl>
		<dt><?php echo __('Log User Access Id'); ?></dt>
		<dd>
			<?php echo h($logUserLogin['LogUserLogin']['log_user_access_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($logUserLogin['LogUserLogin']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login Date'); ?></dt>
		<dd>
			<?php echo h($logUserLogin['LogUserLogin']['login_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login Type'); ?></dt>
		<dd>
			<?php echo h($logUserLogin['LogUserLogin']['login_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($logUserLogin['LogUserLogin']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($logUserLogin['LogUserLogin']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Data'); ?></dt>
		<dd>
			<?php echo h($logUserLogin['LogUserLogin']['updated_data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($logUserLogin['LogUserLogin']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Log User Login'), array('action' => 'edit', $logUserLogin['LogUserLogin']['log_user_access_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Log User Login'), array('action' => 'delete', $logUserLogin['LogUserLogin']['log_user_access_id']), array('confirm' => __('Are you sure you want to delete # %s?', $logUserLogin['LogUserLogin']['log_user_access_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Log User Logins'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log User Login'), array('action' => 'add')); ?> </li>
	</ul>
</div>
