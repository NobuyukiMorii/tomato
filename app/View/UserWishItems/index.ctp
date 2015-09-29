<div class="userWishItems index">
	<h2><?php echo __('User Wish Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('user_wish_list_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_name'); ?></th>
			<th><?php echo $this->Paginator->sort('item_url'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_name'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_address'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('del_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($userWishItems as $userWishItem): ?>
	<tr>
		<td><?php echo h($userWishItem['UserWishItem']['user_wish_list_id']); ?>&nbsp;</td>
		<td><?php echo h($userWishItem['UserWishItem']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($userWishItem['UserWishItem']['item_name']); ?>&nbsp;</td>
		<td><?php echo h($userWishItem['UserWishItem']['item_url']); ?>&nbsp;</td>
		<td><?php echo h($userWishItem['UserWishItem']['shop_name']); ?>&nbsp;</td>
		<td><?php echo h($userWishItem['UserWishItem']['shop_address']); ?>&nbsp;</td>
		<td><?php echo h($userWishItem['UserWishItem']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($userWishItem['UserWishItem']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($userWishItem['UserWishItem']['del_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userWishItem['UserWishItem']['user_wish_list_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userWishItem['UserWishItem']['user_wish_list_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userWishItem['UserWishItem']['user_wish_list_id']), array('confirm' => __('Are you sure you want to delete # %s?', $userWishItem['UserWishItem']['user_wish_list_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New User Wish Item'), array('action' => 'add')); ?></li>
	</ul>
</div>
