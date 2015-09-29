<div class="userFavoriteItems view">
<h2><?php echo __('User Favorite Item'); ?></h2>
	<dl>
		<dt><?php echo __('User Favorite Id'); ?></dt>
		<dd>
			<?php echo h($userFavoriteItem['UserFavoriteItem']['user_favorite_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($userFavoriteItem['UserFavoriteItem']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Id'); ?></dt>
		<dd>
			<?php echo h($userFavoriteItem['UserFavoriteItem']['item_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($userFavoriteItem['UserFavoriteItem']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($userFavoriteItem['UserFavoriteItem']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($userFavoriteItem['UserFavoriteItem']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Favorite Item'), array('action' => 'edit', $userFavoriteItem['UserFavoriteItem']['user_favorite_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Favorite Item'), array('action' => 'delete', $userFavoriteItem['UserFavoriteItem']['user_favorite_id']), array('confirm' => __('Are you sure you want to delete # %s?', $userFavoriteItem['UserFavoriteItem']['user_favorite_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List User Favorite Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Favorite Item'), array('action' => 'add')); ?> </li>
	</ul>
</div>
