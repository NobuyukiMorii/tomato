<div class="commentPhotos form">
<?php echo $this->Form->create('CommentPhoto'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Comment Photo'); ?></legend>
	<?php
		echo $this->Form->input('comment_photo_id');
		echo $this->Form->input('comment_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CommentPhoto.comment_photo_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('CommentPhoto.comment_photo_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Comment Photos'), array('action' => 'index')); ?></li>
	</ul>
</div>
