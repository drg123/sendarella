<div class="patients form">
<?php echo $this->Form->create('Patient', array('type' => 'file'));?>
	<fieldset>
		<legend><?php echo __('Import Patients'); ?></legend>
		<p>
		To import patients, please create a CSV file with the patient information in this order:<br>
		First Name,Last Name,E-Mail,Address,City,State,Zip,Phone,Gender,Condition<br>
		<a href="/sendarella.csv">Click here</a> to download a sample CSV
		
		<br><br>
		
		Existing patients (those with duplicate email addresses) will be added to the Group selected.<br><br>
		
		</p>
		
	<?php
		echo $this->Form->input('patientfile', array('label' => 'Patient List In CSV Format', 'type' => 'file'));
		echo $this->Form->input('Groups', array('label' => 'Add Patients To This Group'));
	?>
	<a style="position:relative;top:-66px;left:290px;text-decoration:none;" class="btn large primary" href="/members/groups/add">Create New Group</a>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<br><br><br>


<?php echo $this->Form->create('Patient');?>
	<?php
		echo $this->Form->input('delete', array('value' => '1', 'type' => 'hidden'));
	?>
<?php echo $this->Form->end(__('Delete All'));?>