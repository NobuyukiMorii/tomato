<div class="shopDetailEns index">
	<h2><?php echo __('Shop Detail Ens'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('item_detail_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('zip_code'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('number'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_date'); ?></th>
			<th><?php echo $this->Paginator->sort('del_flg'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($shopDetailEns as $shopDetailEn): ?>
	<tr>
		<td><?php echo h($shopDetailEn['ShopDetailEn']['item_detail_id']); ?>&nbsp;</td>
		<td><?php echo h($shopDetailEn['ShopDetailEn']['name']); ?>&nbsp;</td>
		<td><?php echo h($shopDetailEn['ShopDetailEn']['description']); ?>&nbsp;</td>
		<td><?php echo h($shopDetailEn['ShopDetailEn']['zip_code']); ?>&nbsp;</td>
		<td><?php echo h($shopDetailEn['ShopDetailEn']['address']); ?>&nbsp;</td>
		<td><?php echo h($shopDetailEn['ShopDetailEn']['number']); ?>&nbsp;</td>
		<td><?php echo h($shopDetailEn['ShopDetailEn']['url']); ?>&nbsp;</td>
		<td><?php echo h($shopDetailEn['ShopDetailEn']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($shopDetailEn['ShopDetailEn']['updated_date']); ?>&nbsp;</td>
		<td><?php echo h($shopDetailEn['ShopDetailEn']['del_flg']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $shopDetailEn['ShopDetailEn']['item_detail_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $shopDetailEn['ShopDetailEn']['item_detail_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $shopDetailEn['ShopDetailEn']['item_detail_id']), array('confirm' => __('Are you sure you want to delete # %s?', $shopDetailEn['ShopDetailEn']['item_detail_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Shop Detail En'), array('action' => 'add')); ?></li>
	</ul>
</div>
