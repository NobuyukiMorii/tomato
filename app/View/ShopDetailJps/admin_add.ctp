<div class="shopDetailJps form">
<?php echo $this->Form->create('ShopDetailJp'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Shop Detail Jp'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('zip_code');
		echo $this->Form->input('address');
		echo $this->Form->input('number');
		echo $this->Form->input('url');
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

		<li><?php echo $this->Html->link(__('List Shop Detail Jps'), array('action' => 'index')); ?></li>
	</ul>
</div>
