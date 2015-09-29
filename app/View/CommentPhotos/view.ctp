<div class="commentPhotos view">
<h2><?php echo __('Comment Photo'); ?></h2>
	<dl>
		<dt><?php echo __('Comment Photo Id'); ?></dt>
		<dd>
			<?php echo h($commentPhoto['CommentPhoto']['comment_photo_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Id'); ?></dt>
		<dd>
			<?php echo h($commentPhoto['CommentPhoto']['comment_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo Id'); ?></dt>
		<dd>
			<?php echo h($commentPhoto['CommentPhoto']['photo_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reported Count'); ?></dt>
		<dd>
			<?php echo h($commentPhoto['CommentPhoto']['reported_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($commentPhoto['CommentPhoto']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated Date'); ?></dt>
		<dd>
			<?php echo h($commentPhoto['CommentPhoto']['updated_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Del Flg'); ?></dt>
		<dd>
			<?php echo h($commentPhoto['CommentPhoto']['del_flg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comment Photo'), array('action' => 'edit', $commentPhoto['CommentPhoto']['comment_photo_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comment Photo'), array('action' => 'delete', $commentPhoto['CommentPhoto']['comment_photo_id']), array('confirm' => __('Are you sure you want to delete # %s?', $commentPhoto['CommentPhoto']['comment_photo_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Comment Photos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment Photo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
