<div class="userAdmins view">
<h2><?php echo __('User Admin'); ?></h2>
	<dl>
		<dt><?php echo __('User Admin Id'); ?></dt>
		<dd>
			<?php echo h($userAdmin['UserAdmin']['user_admin_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Authority Level'); ?></dt>
		<dd>
			<?php echo h($userAdmin['UserAdmin']['authority_level']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($userAdmin['UserAdmin']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($userAdmin['UserAdmin']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($userAdmin['UserAdmin']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($userAdmin['UserAdmin']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($userAdmin['UserAdmin']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Admin'), array('action' => 'edit', $userAdmin['UserAdmin']['user_admin_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Admin'), array('action' => 'delete', $userAdmin['UserAdmin']['user_admin_id']), array('confirm' => __('Are you sure you want to delete # %s?', $userAdmin['UserAdmin']['user_admin_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List User Admins'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Admin'), array('action' => 'add')); ?> </li>
	</ul>
</div>
