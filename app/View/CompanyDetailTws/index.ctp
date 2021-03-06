<div class="companyDetailTws index">
	<h2><?php echo __('Company Detail Tws'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('company_detail_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('head'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('main'); ?></th>
			<th><?php echo $this->Paginator->sort('feature_first_head'); ?></th>
			<th><?php echo $this->Paginator->sort('feature_first_description'); ?></th>
			<th><?php echo $this->Paginator->sort('feature_second_head'); ?></th>
			<th><?php echo $this->Paginator->sort('feature_second_description'); ?></th>
			<th><?php echo $this->Paginator->sort('feature_third_head'); ?></th>
			<th><?php echo $this->Paginator->sort('feature_third_description'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_right_title'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_right_first_title'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_right_first_description'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_right_second_title'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_right_second_description'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_right_third_title'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_right_third_description'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_left_head'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_left_title'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_left_description'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_left_point_first'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_left_point_second'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_left_point_third'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_left_point_fourth'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_left_point_fifth'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_data'); ?></th>
			<th><?php echo $this->Paginator->sort('del_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($companyDetailTws as $companyDetailTw): ?>
	<tr>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['company_detail_id']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['name']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['zipcode']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['address']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['description']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['head']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['title']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['main']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['feature_first_head']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['feature_first_description']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['feature_second_head']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['feature_second_description']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['feature_third_head']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['feature_third_description']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['middle_right_title']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['middle_right_first_title']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['middle_right_first_description']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['middle_right_second_title']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['middle_right_second_description']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['middle_right_third_title']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['middle_right_third_description']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['middle_left_head']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['middle_left_title']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['middle_left_description']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['middle_left_point_first']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['middle_left_point_second']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['middle_left_point_third']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['middle_left_point_fourth']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['middle_left_point_fifth']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['updated_data']); ?>&nbsp;</td>
		<td><?php echo h($companyDetailTw['CompanyDetailTw']['del_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $companyDetailTw['CompanyDetailTw']['company_detail_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $companyDetailTw['CompanyDetailTw']['company_detail_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $companyDetailTw['CompanyDetailTw']['company_detail_id']), array('confirm' => __('Are you sure you want to delete # %s?', $companyDetailTw['CompanyDetailTw']['company_detail_id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Company Detail Tw'), array('action' => 'add')); ?></li>
	</ul>
</div>
