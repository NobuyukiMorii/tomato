<div class="logUserLogins form">
<?php echo $this->Form->create('LogUserLogin'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Log User Login'); ?></legend>
	<?php
		echo $this->Form->input('log_user_access_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('login_date');
		echo $this->Form->input('login_type');
		echo $this->Form->input('status');
		echo $this->Form->input('created_date');
		echo $this->Form->input('updated_data');
		echo $this->Form->input('del_flg');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LogUserLogin.log_user_access_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('LogUserLogin.log_user_access_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Log User Logins'), array('action' => 'index')); ?></li>
	</ul>
</div>
