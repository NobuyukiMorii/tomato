<div class="userAdmins form">
<?php echo $this->Form->create('UserAdmin'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit User Admin'); ?></legend>
	<?php
		echo $this->Form->input('user_admin_id');
		echo $this->Form->input('authority_level');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('created_date');
		echo $this->Form->input('updated_date');
		echo $this->Form->input('del_flg');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserAdmin.user_admin_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('UserAdmin.user_admin_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List User Admins'), array('action' => 'index')); ?></li>
	</ul>
</div>
