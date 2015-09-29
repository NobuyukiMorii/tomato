<div class="companyMembers view">
<h2><?php echo __('Company Member'); ?></h2>
	<dl>
		<dt><?php echo __('Company Member Id'); ?></dt>
		<dd>
			<?php echo h($companyMember['CompanyMember']['company_member_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Member Detail Id'); ?></dt>
		<dd>
			<?php echo h($companyMember['CompanyMember']['company_member_detail_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo Id'); ?></dt>
		<dd>
			<?php echo h($companyMember['CompanyMember']['photo_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($companyMember['CompanyMember']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($companyMember['CompanyMember']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($companyMember['CompanyMember']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company Member'), array('action' => 'edit', $companyMember['CompanyMember']['company_member_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company Member'), array('action' => 'delete', $companyMember['CompanyMember']['company_member_id']), array('confirm' => __('Are you sure you want to delete # %s?', $companyMember['CompanyMember']['company_member_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Member'), array('action' => 'add')); ?> </li>
	</ul>
</div>
