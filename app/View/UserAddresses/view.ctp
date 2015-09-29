<div class="userAddresses view">
<h2><?php echo __('User Address'); ?></h2>
	<dl>
		<dt><?php echo __('User Address Id'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['user_address_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family Name'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['family_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Code'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['country_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip Code'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['zip_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel Number'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['tel_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Address'), array('action' => 'edit', $userAddress['UserAddress']['user_address_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Address'), array('action' => 'delete', $userAddress['UserAddress']['user_address_id']), array('confirm' => __('Are you sure you want to delete # %s?', $userAddress['UserAddress']['user_address_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List User Addresses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Address'), array('action' => 'add')); ?> </li>
	</ul>
</div>
