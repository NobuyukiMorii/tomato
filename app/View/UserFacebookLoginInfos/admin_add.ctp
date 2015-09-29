<div class="userFacebookLoginInfos form">
<?php echo $this->Form->create('UserFacebookLoginInfo'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add User Facebook Login Info'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('facebook_id');
		echo $this->Form->input('facebook_name');
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

		<li><?php echo $this->Html->link(__('List User Facebook Login Infos'), array('action' => 'index')); ?></li>
	</ul>
</div>
