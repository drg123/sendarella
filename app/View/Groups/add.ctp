<div class="groups form">
<?php echo $this->Form->create('Group');?>
	<fieldset>
		<legend><?php echo __('Add Group'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('textkeyword');
	?>
		<a id="showcheckedpatients" href="#" class="btn" style="float: right; text-decoration:none;"><span id="a">Hide</span> Checked Patients</a><br><br>
		<a id="showuncheckedpatients" href="#" class="btn" style="float: right; text-decoration:none;"><span id="b">Hide</span> Unchecked Patients</a>	
		<br><br>
		<div style="height:300px;overflow:auto;">
		<label for="GroupTextkeyword">Patients In Group</label>
		
	<?	
		echo $this->Form->input('Patient', array('label' => 'Patients In Group','options' => $patients, 'multiple'=>'checkbox', 'label'=>''));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<script>
var c = true;
var u = true;

$(function() {
	$("#showcheckedpatients").click(function(e) {
		e.preventDefault();
		if (c == true) {$("input:checked").parent().hide('slow'); $('#a').html("Show");c = false;}
		else {$("input:checked").parent().show('slow'); $('#a').html("Hide");c = true;}		
	});
	$("#showuncheckedpatients").click(function(e) {
		e.preventDefault();
		if (u == true) {$("input:checkbox").not(":checked").parent().hide('slow'); $('#b').html("Show");u = false;}
		else {$("input:checkbox").not(":checked").parent().show('slow'); $('#b').html("Hide");u = true;}				
	});
	
});
</script>