<div class="companyMemberDetailEns view">
<h2><?php echo __('Company Member Detail En'); ?></h2>
	<dl>
		<dt><?php echo __('Company Member Id'); ?></dt>
		<dd>
			<?php echo h($companyMemberDetailEn['CompanyMemberDetailEn']['company_member_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($companyMemberDetailEn['CompanyMemberDetailEn']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($companyMemberDetailEn['CompanyMemberDetailEn']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($companyMemberDetailEn['CompanyMemberDetailEn']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($companyMemberDetailEn['CompanyMemberDetailEn']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($companyMemberDetailEn['CompanyMemberDetailEn']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company Member Detail En'), array('action' => 'edit', $companyMemberDetailEn['CompanyMemberDetailEn']['company_member_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company Member Detail En'), array('action' => 'delete', $companyMemberDetailEn['CompanyMemberDetailEn']['company_member_id']), array('confirm' => __('Are you sure you want to delete # %s?', $companyMemberDetailEn['CompanyMemberDetailEn']['company_member_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Member Detail Ens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Member Detail En'), array('action' => 'add')); ?> </li>
	</ul>
</div>
