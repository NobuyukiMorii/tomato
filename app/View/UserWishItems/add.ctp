<div class="userWishItems form">
<?php echo $this->Form->create('UserWishItem'); ?>
	<fieldset>
		<legend><?php echo __('Add User Wish Item'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('item_name');
		echo $this->Form->input('item_url');
		echo $this->Form->input('shop_name');
		echo $this->Form->input('shop_address');
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

		<li><?php echo $this->Html->link(__('List User Wish Items'), array('action' => 'index')); ?></li>
	</ul>
</div>
