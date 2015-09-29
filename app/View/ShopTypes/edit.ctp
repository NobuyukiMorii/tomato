<div class="shopTypes form">
<?php echo $this->Form->create('ShopType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Shop Type'); ?></legend>
	<?php
		echo $this->Form->input('shop_type_id');
		echo $this->Form->input('type');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ShopType.shop_type_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ShopType.shop_type_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Shop Types'), array('action' => 'index')); ?></li>
	</ul>
</div>
