<div class="emails form">
<?php echo $this->Form->create('Followup');?>
	<fieldset>
		<legend><?php echo __('Edit Followup Email'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('subject');
		echo $this->Form->input('text_content');
		echo $this->Form->input('html_content');
		echo $this->Form->input('days', array('default' => '7', 'label' => 'Send after # of days:'));
		echo $this->Form->input('group_id', array('empty' => 'All'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>