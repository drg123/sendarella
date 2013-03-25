<div class="emails form">
<?php echo $this->Form->create('Textfollowup');?>
	<fieldset>
		<legend><?php echo __('Edit Followup Text'); ?></legend>
		<span id="counter" style="float:right;position:relative;top:50px;right:300px;font-weight:bold;">0 characters</span>
	<?php
		echo $this->Form->input('content');
		echo $this->Form->input('days');
		echo $this->Form->input('group_id', array('empty' => 'All'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<script>
$(function() {
	var new_length = $('#FollowupContent').val().length;
	$('#counter').html( new_length + ' characters');


	$('#FollowupContent').keyup(function(){ 
		var new_length = $(this).val().length;
		$('#counter').html( new_length + ' characters');
	});

});


</script>