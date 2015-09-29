<div class="reviewPhotos form">
<?php echo $this->Form->create('ReviewPhoto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Review Photo'); ?></legend>
	<?php
		echo $this->Form->input('review_photo_id');
		echo $this->Form->input('review_id');
		echo $this->Form->input('photo_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ReviewPhoto.review_photo_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ReviewPhoto.review_photo_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Review Photos'), array('action' => 'index')); ?></li>
	</ul>
</div>
