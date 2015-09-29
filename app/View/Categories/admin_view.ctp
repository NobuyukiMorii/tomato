<div class="categories view">
<h2><?php echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Category Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['category_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name Tw'); ?></dt>
		<dd>
			<?php echo h($category['Category']['name_tw']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name Jp'); ?></dt>
		<dd>
			<?php echo h($category['Category']['name_jp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name En'); ?></dt>
		<dd>
			<?php echo h($category['Category']['name_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($category['Category']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($category['Category']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($category['Category']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['category_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['category_id']), array('confirm' => __('Are you sure you want to delete # %s?', $category['Category']['category_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
	</ul>
</div>
