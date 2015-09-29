<div class="logItemViews form">
<?php echo $this->Form->create('LogItemView'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Log Item View'); ?></legend>
	<?php
		echo $this->Form->input('log_item_view_id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('device');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LogItemView.log_item_view_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('LogItemView.log_item_view_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Log Item Views'), array('action' => 'index')); ?></li>
	</ul>
</div>
