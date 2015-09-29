<div class="reviewPhotos index">
	<h2><?php echo __('Review Photos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('review_photo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('review_id'); ?></th>
			<th><?php echo $this->Paginator->sort('photo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('reported_count'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('del_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($reviewPhotos as $reviewPhoto): ?>
	<tr>
		<td><?php echo h($reviewPhoto['ReviewPhoto']['review_photo_id']); ?>&nbsp;</td>
		<td><?php echo h($reviewPhoto['ReviewPhoto']['review_id']); ?>&nbsp;</td>
		<td><?php echo h($reviewPhoto['ReviewPhoto']['photo_id']); ?>&nbsp;</td>
		<td><?php echo h($reviewPhoto['ReviewPhoto']['reported_count']); ?>&nbsp;</td>
		<td><?php echo h($reviewPhoto['ReviewPhoto']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($reviewPhoto['ReviewPhoto']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($reviewPhoto['ReviewPhoto']['del_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reviewPhoto['ReviewPhoto']['review_photo_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reviewPhoto['ReviewPhoto']['review_photo_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reviewPhoto['ReviewPhoto']['review_photo_id']), array('confirm' => __('Are you sure you want to delete # %s?', $reviewPhoto['ReviewPhoto']['review_photo_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Review Photo'), array('action' => 'add')); ?></li>
	</ul>
</div>
