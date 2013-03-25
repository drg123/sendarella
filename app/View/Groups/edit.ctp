<div class="groups form">
<?php echo $this->Form->create('Group');?>
	<fieldset>
		<legend><?php echo __('Edit Group'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('textkeyword');
	?>
		<a id="showcheckedpatients" href="#" class="btn" style="float: right; text-decoration:none;"><span id="a">Hide</span> Checked Patients</a><br><br>
		<a id="showuncheckedpatients" href="#" class="btn" style="float: right; text-decoration:none;"><span id="b">Show</span> Unchecked Patients</a>

		<br><br>
		<div style="height:300px;overflow:auto;">
		<label for="GroupTextkeyword">Patients In Group</label>
		<span style="float:right;font-size:12px;padding-right:11px;"><b>Email</b>&nbsp;&nbsp;&nbsp;
		<b for="GroupTextkeyword">Print</b>&nbsp;&nbsp;&nbsp;
		<b for="GroupTextkeyword">Mobile</b></span>&nbsp;&nbsp;&nbsp;
	<?	
		echo $this->Form->input('Patient', array('multiple'=>'checkbox', 'label'=>''));
	?>
		</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>

<style>
form div {margin-bottom: 0 !important;}
.disabled {
	opacity:0.1;
	filter:alpha(opacity=10); /* For IE8 and earlier */
}
.onoffbuttons img {cursor:pointer;}
.checkbox {border-bottom: dashed 1px;}
</style>
<script>
var c = true;
var u = false;

$(function() {

	$("div.checkbox label").after('<span class="onoffbuttons" style="float:right;margin-right:0px;margin-top:-4px;"><img width="30" src="/img/email.png" style="padding-right:20px;"><img width="30" src="/img/mail.png" style="padding-right:10px;"><img width="30" src="/img/text.png" style="padding-right:0px;"></span>');
	 $(".checkbox:odd").css("background-color", "#FFFFFF");
  $(".checkbox:even").css("background-color", "#F9F9F9");	

	$("input:checkbox").not(":checked").parent().hide();
	$(".onoffbuttons img").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("disabled");
	});
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