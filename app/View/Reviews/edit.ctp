<div class="reviews form">
<?php echo $this->Form->create('Review'); ?>
	<fieldset>
		<legend><?php echo __('Edit Review'); ?></legend>
	<?php
		echo $this->Form->input('review_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('review');
		echo $this->Form->input('review_photo_id');
		echo $this->Form->input('point');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Review.review_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Review.review_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('action' => 'index')); ?></li>
	</ul>
</div>
