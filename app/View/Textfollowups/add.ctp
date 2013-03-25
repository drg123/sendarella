<div class="emails form">
<?php echo $this->Form->create('Followup');?>
	<fieldset>
		<legend><?php echo __('Add Followup Text'); ?></legend>
		<span id="counter" style="float:right;position:relative;top:50px;right:300px;font-weight:bold;">0 characters</span>

	<?php
		echo $this->Form->input('content', array('type'=>'textarea'));
		echo $this->Form->input('days');
		echo $this->Form->input('group_id', array('empty' => 'All'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<script>
$(function() {
	$('#FollowupContent').keyup(function(){ 
		var new_length = $(this).val().length;
		$('#counter').html( new_length + ' characters');
	});

});
</script>