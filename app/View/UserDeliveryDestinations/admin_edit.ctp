<div class="userDeliveryDestinations form">
<?php echo $this->Form->create('UserDeliveryDestination'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit User Delivery Destination'); ?></legend>
	<?php
		echo $this->Form->input('user_delivery_destination_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('family_name');
		echo $this->Form->input('country_code');
		echo $this->Form->input('zipcode');
		echo $this->Form->input('address');
		echo $this->Form->input('tel_numbe');
		echo $this->Form->input('primary_flg');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserDeliveryDestination.user_delivery_destination_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('UserDeliveryDestination.user_delivery_destination_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List User Delivery Destinations'), array('action' => 'index')); ?></li>
	</ul>
</div>
