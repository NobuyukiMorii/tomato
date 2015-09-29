<div class="itemViewCountIds form">
<?php echo $this->Form->create('ItemViewCountId'); ?>
	<fieldset>
		<legend><?php echo __('Add Item View Count Id'); ?></legend>
	<?php
		echo $this->Form->input('count');
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

		<li><?php echo $this->Html->link(__('List Item View Count Ids'), array('action' => 'index')); ?></li>
	</ul>
</div>
