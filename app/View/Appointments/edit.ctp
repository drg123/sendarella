<div class="emails form">
<?php echo $this->Form->create('Text');?>
	<fieldset>
		<legend><?php echo __('Edit Text'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('content');
		echo $this->Form->input('scheduledon');
		echo $this->Form->input('group_id', array('empty' => 'All'));		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>