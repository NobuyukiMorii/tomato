<div class="userWishItems view">
<h2><?php echo __('User Wish Item'); ?></h2>
	<dl>
		<dt><?php echo __('User Wish List Id'); ?></dt>
		<dd>
			<?php echo h($userWishItem['UserWishItem']['user_wish_list_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($userWishItem['UserWishItem']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Name'); ?></dt>
		<dd>
			<?php echo h($userWishItem['UserWishItem']['item_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Url'); ?></dt>
		<dd>
			<?php echo h($userWishItem['UserWishItem']['item_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop Name'); ?></dt>
		<dd>
			<?php echo h($userWishItem['UserWishItem']['shop_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shop Address'); ?></dt>
		<dd>
			<?php echo h($userWishItem['UserWishItem']['shop_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($userWishItem['UserWishItem']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($userWishItem['UserWishItem']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($userWishItem['UserWishItem']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Wish Item'), array('action' => 'edit', $userWishItem['UserWishItem']['user_wish_list_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Wish Item'), array('action' => 'delete', $userWishItem['UserWishItem']['user_wish_list_id']), array('confirm' => __('Are you sure you want to delete # %s?', $userWishItem['UserWishItem']['user_wish_list_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List User Wish Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Wish Item'), array('action' => 'add')); ?> </li>
	</ul>
</div>
