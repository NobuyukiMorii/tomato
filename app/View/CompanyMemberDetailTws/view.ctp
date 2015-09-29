<div class="companyMemberDetailTws view">
<h2><?php echo __('Company Member Detail Tw'); ?></h2>
	<dl>
		<dt><?php echo __('Company Member Id'); ?></dt>
		<dd>
			<?php echo h($companyMemberDetailTw['CompanyMemberDetailTw']['company_member_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($companyMemberDetailTw['CompanyMemberDetailTw']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($companyMemberDetailTw['CompanyMemberDetailTw']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($companyMemberDetailTw['CompanyMemberDetailTw']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($companyMemberDetailTw['CompanyMemberDetailTw']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($companyMemberDetailTw['CompanyMemberDetailTw']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company Member Detail Tw'), array('action' => 'edit', $companyMemberDetailTw['CompanyMemberDetailTw']['company_member_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company Member Detail Tw'), array('action' => 'delete', $companyMemberDetailTw['CompanyMemberDetailTw']['company_member_id']), array('confirm' => __('Are you sure you want to delete # %s?', $companyMemberDetailTw['CompanyMemberDetailTw']['company_member_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Member Detail Tws'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Member Detail Tw'), array('action' => 'add')); ?> </li>
	</ul>
</div>
