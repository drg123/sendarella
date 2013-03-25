<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Print Settings'); ?></legend>
	<?php
		echo $this->Form->input('type', array('label' => 'Type Of Mailers To Send', 'type' => 'select', 'options'=> array('Gift Certificates','Newsletter With Envelopes','Newsletter Without Envelopes', 'Postcards')));
		echo $this->Form->input('auto', array('label' => 'Would you like us to Print and Mail your Newsletter for you or will you be doing this yourself?', 'type' => 'select', 'options' => array('Send Them To My Patients', 'Send Them To Me')));
	?>
	<p>You may change or edit the material as you see fit until the day before it goes out. Or you may choose to use your own content.</p>	
	<?	echo $this->Form->input('charge', array('label' => 'Please send out each month automatically as per my specs and charge my credit card accordingly', 'type' => 'select', 'options' => array('Yes', 'No, I want to manually re-order every month'))); ?>

	<? 		echo $this->Form->input('printreferral', array('label' => 'You have the option of asking your patients for a referral in the newsletter. Would you like include an insert that describes your referral program?', 'type' => 'select', 'options' => array('Yes', 'No'))); ?>


	</fieldset>
<?php echo $this->Form->end(__('Update'));?>

</div>
