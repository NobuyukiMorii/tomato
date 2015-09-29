<div class="userDeliveryDestinations view">
<h2><?php echo __('User Delivery Destination'); ?></h2>
	<dl>
		<dt><?php echo __('User Delivery Destination Id'); ?></dt>
		<dd>
			<?php echo h($userDeliveryDestination['UserDeliveryDestination']['user_delivery_destination_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($userDeliveryDestination['UserDeliveryDestination']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($userDeliveryDestination['UserDeliveryDestination']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family Name'); ?></dt>
		<dd>
			<?php echo h($userDeliveryDestination['UserDeliveryDestination']['family_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Code'); ?></dt>
		<dd>
			<?php echo h($userDeliveryDestination['UserDeliveryDestination']['country_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zipcode'); ?></dt>
		<dd>
			<?php echo h($userDeliveryDestination['UserDeliveryDestination']['zipcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($userDeliveryDestination['UserDeliveryDestination']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel Numbe'); ?></dt>
		<dd>
			<?php echo h($userDeliveryDestination['UserDeliveryDestination']['tel_numbe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primary Flg'); ?></dt>
		<dd>
			<?php echo h($userDeliveryDestination['UserDeliveryDestination']['primary_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($userDeliveryDestination['UserDeliveryDestination']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($userDeliveryDestination['UserDeliveryDestination']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($userDeliveryDestination['UserDeliveryDestination']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Delivery Destination'), array('action' => 'edit', $userDeliveryDestination['UserDeliveryDestination']['user_delivery_destination_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Delivery Destination'), array('action' => 'delete', $userDeliveryDestination['UserDeliveryDestination']['user_delivery_destination_id']), array('confirm' => __('Are you sure you want to delete # %s?', $userDeliveryDestination['UserDeliveryDestination']['user_delivery_destination_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List User Delivery Destinations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Delivery Destination'), array('action' => 'add')); ?> </li>
	</ul>
</div>
