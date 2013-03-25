<div class="emails view">
<h2><?php  echo __('Email');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($email['Email']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($email['Email']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($email['Email']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo h($email['Email']['subject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text Content'); ?></dt>
		<dd>
			<?php echo h($email['Email']['text_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Html Content'); ?></dt>
		<dd>
			<?php echo h($email['Email']['html_content']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
