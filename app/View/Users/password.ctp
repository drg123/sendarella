<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Your Account Password'); ?></legend>
	<?php
		echo $this->Form->input('password', array('label' => 'Password', 'value' => ''));
		echo $this->Form->input('password2', array('label' => 'Confirm Password', 'div' => array('class' => 'required')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
