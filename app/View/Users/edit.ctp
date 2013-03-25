<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Your Account Information'); ?></legend>
	<?php
		echo $this->Form->input('fname', array('label' => 'First Name'));
		echo $this->Form->input('lname', array('label' => 'Last Name'));
		echo $this->Form->input('email', array('label' => 'Email'));
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('state', array('size' => '2'));
		echo $this->Form->input('zip', array('size' => '10'));
		echo $this->Form->input('phone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
