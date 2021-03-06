<div class="countries index">
	<h2><?php echo __('Countries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('country_code'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('del_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($countries as $country): ?>
	<tr>
		<td><?php echo h($country['Country']['country_id']); ?>&nbsp;</td>
		<td><?php echo h($country['Country']['name']); ?>&nbsp;</td>
		<td><?php echo h($country['Country']['country_code']); ?>&nbsp;</td>
		<td><?php echo h($country['Country']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($country['Country']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($country['Country']['del_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $country['Country']['country_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $country['Country']['country_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $country['Country']['country_id']), array('confirm' => __('Are you sure you want to delete # %s?', $country['Country']['country_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Country'), array('action' => 'add')); ?></li>
	</ul>
</div>
