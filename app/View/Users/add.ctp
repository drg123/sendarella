<span class="payment-errors"></span>
<div class="users form">
<?php echo $this->Form->create('User', array('id' => 'payment-form'));?>
	<fieldset>
		<legend><?php echo __('Sign Up'); ?></legend>
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
		<div class="input text">
			<label for="CardNumber">Card Number</label>
			<input class="card-number" size="20" autocomplete="off" type="text" id="CardNumber"/>
		</div>
		<div class="input text">
			<label for="CVC">CVC</label>
			<input class="card-cvc" size="4" autocomplete="off" type="text" id="CVC"/>
		</div>
		<div class="input text">
			<label>Expiration (MM/YYYY)</label>
            <input type="text" size="2" class="card-expiry-month"/>
            <span> / </span>
            <input type="text" size="4" class="card-expiry-year"/>
        </div>

	</fieldset>
<?php echo $this->Form->end(array('class' => 'submit-button'));?>
</div>