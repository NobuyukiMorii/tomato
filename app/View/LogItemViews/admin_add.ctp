<div class="logItemViews form">
<?php echo $this->Form->create('LogItemView'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Log Item View'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Log Item Views'), array('action' => 'index')); ?></li>
	</ul>
</div>
