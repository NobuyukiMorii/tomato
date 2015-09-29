<div class="photos form">
<?php echo $this->Form->create('Photo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Photo'); ?></legend>
	<?php
		echo $this->Form->input('photo_id');
		echo $this->Form->input('photo_size_id');
		echo $this->Form->input('name');
		echo $this->Form->input('folder_name');
		echo $this->Form->input('created_date');
		echo $this->Form->input('updated_data');
		echo $this->Form->input('del_flg');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Photo.photo_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Photo.photo_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Photos'), array('action' => 'index')); ?></li>
	</ul>
</div>
