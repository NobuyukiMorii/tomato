<div class="languages view">
<h2><?php echo __('Language'); ?></h2>
	<dl>
		<dt><?php echo __('Language Id'); ?></dt>
		<dd>
			<?php echo h($language['Language']['language_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($language['Language']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Language Code'); ?></dt>
		<dd>
			<?php echo h($language['Language']['language_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($language['Language']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($language['Language']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($language['Language']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Language'), array('action' => 'edit', $language['Language']['language_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Language'), array('action' => 'delete', $language['Language']['language_id']), array('confirm' => __('Are you sure you want to delete # %s?', $language['Language']['language_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Languages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('action' => 'add')); ?> </li>
	</ul>
</div>
