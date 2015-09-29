<div class="userFavoriteItems form">
<?php echo $this->Form->create('UserFavoriteItem'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit User Favorite Item'); ?></legend>
	<?php
		echo $this->Form->input('user_favorite_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('item_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserFavoriteItem.user_favorite_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('UserFavoriteItem.user_favorite_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List User Favorite Items'), array('action' => 'index')); ?></li>
	</ul>
</div>
