<div class="emails form">
<?php echo $this->Form->create('Newsletter');?>
	<fieldset>
		<legend><?php echo __('Edit Newsletter'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
echo $this->Form->input('issue');
echo $this->Form->input('month');
echo $this->Form->input('year');
?>
</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
