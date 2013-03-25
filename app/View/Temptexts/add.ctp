<div class="emails form">
<?php echo $this->Form->create('Temptext');?>
	<fieldset>
		<legend><?php echo __('New Broadcast Text'); ?></legend>
	<?php
		echo $this->Form->input('content');
		echo $this->Form->input('scheduledon');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
