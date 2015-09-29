<div class="userProfiles form">
<?php echo $this->Form->create('UserProfile'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add User Profile'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('nickname');
		echo $this->Form->input('gender');
		echo $this->Form->input('age');
		echo $this->Form->input('language_code');
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

		<li><?php echo $this->Html->link(__('List User Profiles'), array('action' => 'index')); ?></li>
	</ul>
</div>
