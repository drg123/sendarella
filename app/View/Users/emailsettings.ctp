<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Email Settings'); ?></legend>
	<?php
		echo $this->Form->input('referfriend');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
