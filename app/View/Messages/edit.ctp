<div class="messages form">
<?php echo $this->Form->create('Message'); ?>
	<fieldset>
		<legend><?php echo __('Edit Message'); ?></legend>
	<?php
		echo $this->Form->input('message_id');
		echo $this->Form->input('message');
		echo $this->Form->input('user_id');
		echo $this->Form->input('count');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Message.message_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Message.message_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Messages'), array('action' => 'index')); ?></li>
	</ul>
</div>
