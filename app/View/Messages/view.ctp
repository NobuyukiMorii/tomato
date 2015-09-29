<div class="messages view">
<h2><?php echo __('Message'); ?></h2>
	<dl>
		<dt><?php echo __('Message Id'); ?></dt>
		<dd>
			<?php echo h($message['Message']['message_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($message['Message']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($message['Message']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Count'); ?></dt>
		<dd>
			<?php echo h($message['Message']['count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo Id'); ?></dt>
		<dd>
			<?php echo h($message['Message']['photo_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reported Count'); ?></dt>
		<dd>
			<?php echo h($message['Message']['reported_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($message['Message']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($message['Message']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($message['Message']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Message'), array('action' => 'edit', $message['Message']['message_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Message'), array('action' => 'delete', $message['Message']['message_id']), array('confirm' => __('Are you sure you want to delete # %s?', $message['Message']['message_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('action' => 'add')); ?> </li>
	</ul>
</div>
