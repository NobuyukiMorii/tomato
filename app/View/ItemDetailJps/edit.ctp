<div class="itemDetailJps form">
<?php echo $this->Form->create('ItemDetailJp'); ?>
	<fieldset>
		<legend><?php echo __('Edit Item Detail Jp'); ?></legend>
	<?php
		echo $this->Form->input('item_detail_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ItemDetailJp.item_detail_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ItemDetailJp.item_detail_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Item Detail Jps'), array('action' => 'index')); ?></li>
	</ul>
</div>
