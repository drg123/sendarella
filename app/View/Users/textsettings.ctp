<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Edit Text Settings'); ?></legend>
	<?php
		echo $this->Form->input('keyword');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
