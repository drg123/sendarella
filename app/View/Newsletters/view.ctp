<div class="emails view">
<h2><?php  echo __('Email');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($email['Tempemail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($email['Tempemail']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($email['Tempemail']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo h($email['Tempemail']['subject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text Content'); ?></dt>
		<dd>
			<?php echo h($email['Tempemail']['text_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Html Content'); ?></dt>
		<dd>
			<?php echo h($email['Tempemail']['html_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Scheduled On'); ?></dt>
		<dd>
			<?php echo h($email['Tempemail']['scheduledon']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
