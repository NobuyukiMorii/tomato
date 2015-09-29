<div class="companyDetailJps view">
<h2><?php echo __('Company Detail Jp'); ?></h2>
	<dl>
		<dt><?php echo __('Company Detail Id'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['company_detail_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zipcode'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['zipcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Head'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['head']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Main'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['main']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feature First Head'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['feature_first_head']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feature First Description'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['feature_first_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feature Second Head'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['feature_second_head']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feature Second Description'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['feature_second_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feature Third Head'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['feature_third_head']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feature Third Description'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['feature_third_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Right Title'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['middle_right_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Right First Title'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['middle_right_first_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Right First Description'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['middle_right_first_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Right Second Title'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['middle_right_second_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Right Second Description'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['middle_right_second_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Right Third Title'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['middle_right_third_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Right Third Description'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['middle_right_third_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Left Head'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['middle_left_head']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Left Title'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['middle_left_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Left Description'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['middle_left_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Left Point First'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['middle_left_point_first']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Left Point Second'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['middle_left_point_second']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Left Point Third'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['middle_left_point_third']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Left Point Fourth'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['middle_left_point_fourth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Left Point Fifth'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['middle_left_point_fifth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Data'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['updated_data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($companyDetailJp['CompanyDetailJp']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company Detail Jp'), array('action' => 'edit', $companyDetailJp['CompanyDetailJp']['company_detail_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company Detail Jp'), array('action' => 'delete', $companyDetailJp['CompanyDetailJp']['company_detail_id']), array('confirm' => __('Are you sure you want to delete # %s?', $companyDetailJp['CompanyDetailJp']['company_detail_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Detail Jps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Detail Jp'), array('action' => 'add')); ?> </li>
	</ul>
</div>
