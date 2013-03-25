<div class="emails form">
<?php echo $this->Form->create('Appointment');?>
	<fieldset>
		<legend><?php echo __('New Appointment Reminder'); ?></legend>
	<?php
	
	echo $this->Form->input('patient');
	echo $this->Form->input('number');
	
		echo $this->Form->input('content');
		echo $this->Form->input('scheduledon');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
