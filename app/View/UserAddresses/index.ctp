<div class="userAddresses index">
	<h2><?php echo __('User Addresses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('user_address_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('family_name'); ?></th>
			<th><?php echo $this->Paginator->sort('country_code'); ?></th>
			<th><?php echo $this->Paginator->sort('zip_code'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('tel_number'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('del_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($userAddresses as $userAddress): ?>
	<tr>
		<td><?php echo h($userAddress['UserAddress']['user_address_id']); ?>&nbsp;</td>
		<td><?php echo h($userAddress['UserAddress']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($userAddress['UserAddress']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($userAddress['UserAddress']['family_name']); ?>&nbsp;</td>
		<td><?php echo h($userAddress['UserAddress']['country_code']); ?>&nbsp;</td>
		<td><?php echo h($userAddress['UserAddress']['zip_code']); ?>&nbsp;</td>
		<td><?php echo h($userAddress['UserAddress']['address']); ?>&nbsp;</td>
		<td><?php echo h($userAddress['UserAddress']['tel_number']); ?>&nbsp;</td>
		<td><?php echo h($userAddress['UserAddress']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($userAddress['UserAddress']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($userAddress['UserAddress']['del_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userAddress['UserAddress']['user_address_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userAddress['UserAddress']['user_address_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userAddress['UserAddress']['user_address_id']), array('confirm' => __('Are you sure you want to delete # %s?', $userAddress['UserAddress']['user_address_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New User Address'), array('action' => 'add')); ?></li>
	</ul>
</div>
