<div class="companyDetailJps form">
<?php echo $this->Form->create('CompanyDetailJp'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Company Detail Jp'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('zipcode');
		echo $this->Form->input('address');
		echo $this->Form->input('description');
		echo $this->Form->input('head');
		echo $this->Form->input('title');
		echo $this->Form->input('main');
		echo $this->Form->input('feature_first_head');
		echo $this->Form->input('feature_first_description');
		echo $this->Form->input('feature_second_head');
		echo $this->Form->input('feature_second_description');
		echo $this->Form->input('feature_third_head');
		echo $this->Form->input('feature_third_description');
		echo $this->Form->input('middle_right_title');
		echo $this->Form->input('middle_right_first_title');
		echo $this->Form->input('middle_right_first_description');
		echo $this->Form->input('middle_right_second_title');
		echo $this->Form->input('middle_right_second_description');
		echo $this->Form->input('middle_right_third_title');
		echo $this->Form->input('middle_right_third_description');
		echo $this->Form->input('middle_left_head');
		echo $this->Form->input('middle_left_title');
		echo $this->Form->input('middle_left_description');
		echo $this->Form->input('middle_left_point_first');
		echo $this->Form->input('middle_left_point_second');
		echo $this->Form->input('middle_left_point_third');
		echo $this->Form->input('middle_left_point_fourth');
		echo $this->Form->input('middle_left_point_fifth');
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

		<li><?php echo $this->Html->link(__('List Company Detail Jps'), array('action' => 'index')); ?></li>
	</ul>
</div>
