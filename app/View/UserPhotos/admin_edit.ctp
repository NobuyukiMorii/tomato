<div class="userPhotos form">
<?php echo $this->Form->create('UserPhoto'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit User Photo'); ?></legend>
	<?php
		echo $this->Form->input('user_photo_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('photo_id');
		echo $this->Form->input('profile_photo_flg');
		echo $this->Form->input('reported_count');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserPhoto.user_photo_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('UserPhoto.user_photo_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List User Photos'), array('action' => 'index')); ?></li>
	</ul>
</div>
