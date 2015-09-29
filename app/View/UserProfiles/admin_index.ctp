<div class="userProfiles index">
	<h2><?php echo __('User Profiles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('user_profile_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nickname'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('language_code'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('del_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($userProfiles as $userProfile): ?>
	<tr>
		<td><?php echo h($userProfile['UserProfile']['user_profile_id']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['nickname']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['gender']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['age']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['language_code']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($userProfile['UserProfile']['del_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userProfile['UserProfile']['user_profile_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userProfile['UserProfile']['user_profile_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userProfile['UserProfile']['user_profile_id']), array('confirm' => __('Are you sure you want to delete # %s?', $userProfile['UserProfile']['user_profile_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New User Profile'), array('action' => 'add')); ?></li>
	</ul>
</div>
