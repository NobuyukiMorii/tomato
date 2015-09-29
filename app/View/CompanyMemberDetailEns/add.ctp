<div class="companyMemberDetailEns form">
<?php echo $this->Form->create('CompanyMemberDetailEn'); ?>
	<fieldset>
		<legend><?php echo __('Add Company Member Detail En'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Company Member Detail Ens'), array('action' => 'index')); ?></li>
	</ul>
</div>
