<div class="patients form">
<?php echo $this->Form->create('Patient');?>
	<fieldset>
		<legend><?php echo __('Add Patient'); ?></legend>
	<?php
		echo $this->Form->input('fname', array('label' => 'First Name'));
		echo $this->Form->input('lname', array('label' => 'Last Name'));
		echo $this->Form->input('email');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('phone');
		echo $this->Form->input('gender');
		echo $this->Form->input('condition');
		echo $this->Form->input('Group', array('multiple' => 'checkbox'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>