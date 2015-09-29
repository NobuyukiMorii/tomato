<div class="reviews index">
	<h2><?php echo __('Reviews'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('review_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('review'); ?></th>
			<th><?php echo $this->Paginator->sort('review_photo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('point'); ?></th>
			<th><?php echo $this->Paginator->sort('reported_count'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('del_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($reviews as $review): ?>
	<tr>
		<td><?php echo h($review['Review']['review_id']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['item_id']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['review']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['review_photo_id']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['point']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['reported_count']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['del_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $review['Review']['review_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $review['Review']['review_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $review['Review']['review_id']), array('confirm' => __('Are you sure you want to delete # %s?', $review['Review']['review_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Review'), array('action' => 'add')); ?></li>
	</ul>
</div>
