<div class="shops form">
<?php echo $this->Form->create('Shop'); ?>
	<fieldset>
		<legend><?php echo __('Add Shop'); ?></legend>
	<?php
		echo $this->Form->input('shop_detail_id');
		echo $this->Form->input('shop_type_id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('photo_id');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
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

		<li><?php echo $this->Html->link(__('List Shops'), array('action' => 'index')); ?></li>
	</ul>
</div>
