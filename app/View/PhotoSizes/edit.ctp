<div class="photoSizes form">
<?php echo $this->Form->create('PhotoSize'); ?>
	<fieldset>
		<legend><?php echo __('Edit Photo Size'); ?></legend>
	<?php
		echo $this->Form->input('photo_size_id');
		echo $this->Form->input('width');
		echo $this->Form->input('height');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PhotoSize.photo_size_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('PhotoSize.photo_size_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Photo Sizes'), array('action' => 'index')); ?></li>
	</ul>
</div>
