<div class="companies view">
<h2><?php echo __('Company'); ?></h2>
	<dl>
		<dt><?php echo __('Company Id'); ?></dt>
		<dd>
			<?php echo h($company['Company']['company_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Detail Id'); ?></dt>
		<dd>
			<?php echo h($company['Company']['company_detail_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($company['Company']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Data'); ?></dt>
		<dd>
			<?php echo h($company['Company']['updated_data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($company['Company']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company'), array('action' => 'edit', $company['Company']['company_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company'), array('action' => 'delete', $company['Company']['company_id']), array('confirm' => __('Are you sure you want to delete # %s?', $company['Company']['company_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?> </li>
	</ul>
</div>
