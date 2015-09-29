<div class="companyMembers form">
<?php echo $this->Form->create('CompanyMember'); ?>
	<fieldset>
		<legend><?php echo __('Add Company Member'); ?></legend>
	<?php
		echo $this->Form->input('company_member_detail_id');
		echo $this->Form->input('photo_id');
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

		<li><?php echo $this->Html->link(__('List Company Members'), array('action' => 'index')); ?></li>
	</ul>
</div>
