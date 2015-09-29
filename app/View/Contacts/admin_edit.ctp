<div class="contacts form">
<?php echo $this->Form->create('Contact'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Contact'); ?></legend>
	<?php
		echo $this->Form->input('contact_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('contact_date');
		echo $this->Form->input('title');
		echo $this->Form->input('content');
		echo $this->Form->input('status');
		echo $this->Form->input('charger_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Contact.contact_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Contact.contact_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?></li>
	</ul>
</div>
