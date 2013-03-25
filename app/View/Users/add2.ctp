<span class="payment-errors"></span>
<div class="users form">
<?php echo $this->Form->create('User', array('id' => 'payment-form', 'autocomplete' =>'off'));?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('confirm_password', array('type' => 'password'));
		echo $this->Form->input('fname', array('label' => 'First Name'));
		echo $this->Form->input('lname', array('label' => 'Last Name'));
		echo $this->Form->input('email', array('label' => 'E-mail Address'));
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('phone', array('label' => 'Phone Number'));
	?>

	</fieldset>
<?php echo $this->Form->end(array('class' => 'submit-button'));?>
</div>