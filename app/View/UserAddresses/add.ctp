<div class="userAddresses form">
<?php echo $this->Form->create('UserAddress'); ?>
	<fieldset>
		<legend><?php echo __('Add User Address'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('family_name');
		echo $this->Form->input('country_code');
		echo $this->Form->input('zip_code');
		echo $this->Form->input('address');
		echo $this->Form->input('tel_number');
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

		<li><?php echo $this->Html->link(__('List User Addresses'), array('action' => 'index')); ?></li>
	</ul>
</div>
