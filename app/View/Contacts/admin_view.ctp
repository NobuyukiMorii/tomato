<div class="contacts view">
<h2><?php echo __('Contact'); ?></h2>
	<dl>
		<dt><?php echo __('Contact Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['contact_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Date'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['contact_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Charger Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['charger_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Data'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['updated_data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact'), array('action' => 'edit', $contact['Contact']['contact_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact'), array('action' => 'delete', $contact['Contact']['contact_id']), array('confirm' => __('Are you sure you want to delete # %s?', $contact['Contact']['contact_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('action' => 'add')); ?> </li>
	</ul>
</div>
