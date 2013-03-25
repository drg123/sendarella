<div class="emails form">
<?php echo $this->Form->create('Text');?>
	<fieldset>
		<legend><?php echo __('Edit Text'); ?></legend>
		<span id="counter" style="float:right;position:relative;top:50px;right:300px;font-weight:bold;">0 characters</span>

	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('content');
		echo $this->Form->input('scheduledon');
		echo $this->Form->input('group_id', array('empty' => 'All'));		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<script>
$(function() {
	var new_length = $('#TextContent').val().length;
	$('#counter').html( new_length + ' characters');


	$('#TextContent').keyup(function(){ 
		var new_length = $(this).val().length;
		$('#counter').html( new_length + ' characters');
	});

});


</script>