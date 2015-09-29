<div class="shopDetailJps form">
<?php echo $this->Form->create('ShopDetailJp'); ?>
	<fieldset>
		<legend><?php echo __('Edit Shop Detail Jp'); ?></legend>
	<?php
		echo $this->Form->input('shop_detail_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ShopDetailJp.shop_detail_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ShopDetailJp.shop_detail_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Shop Detail Jps'), array('action' => 'index')); ?></li>
	</ul>
</div>
