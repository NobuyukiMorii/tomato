<div class="companies form">
<?php echo $this->Form->create('Company'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Company'); ?></legend>
	<?php
		echo $this->Form->input('company_detail_id');
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

		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?></li>
	</ul>
</div>
