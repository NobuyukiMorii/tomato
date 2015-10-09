<div class="languages form">
<?php echo $this->Form->create('Language'); ?>
	<fieldset>
		<legend><?php echo __('Edit Language'); ?></legend>
	<?php
		echo $this->Form->input('language_id');
		echo $this->Form->input('name');
		echo $this->Form->input('language_code');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Language.language_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Language.language_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Languages'), array('action' => 'index')); ?></li>
	</ul>
</div>