<?php echo $this->Form->create('Text', array("type" => "file", "action" => "add2", 'onsubmit'=>'return confirm("Are you sure you want to send out the referral texts?");'));?>
<div class="input select">
<div class="alert-message" style="width:75px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PART A</p></div>


<? 		echo $this->Form->input('campaign', array('label' => 'Pick a Referral Campaign Name', 'type' => 'text'));
?>

<div class="alert-message" style="width:75px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PART B</p></div>

					<?php
		$serieslist = array();			
		for ($i=0;$i<count($textreferrals);$i++) {
			if ((!array_key_exists($i-1, $serieslist)) OR ($serieslist[$i-1] != 'Series ('.$textreferrals[$i]['Textreferrals']['series'].')')) {
				$serieslist[$i] = 'Series ('.$textreferrals[$i]['Textreferrals']['series'].')';
			}
		}			
					
		echo $this->Form->input('textseries', array('label' => 'Preview and Edit a Text Message Series', 'type' => 'select', 'options' => $serieslist));
	?>	
	<style>
/* Bubble with an isoceles triangle
------------------------------------------ */

.triangle-isosceles {
   position:relative;
   padding:15px;
   margin:1em 0 3em;
   color:#000;
   background:#ffffff;

   /* css3 */
   -moz-border-radius:10px;
   -webkit-border-radius:10px;
   border-radius:10px;
   background:-moz-linear-gradient(top, #ffffff, #E6E6E6);
   background:linear-gradient(top, #ffffff, #E6E6E6);
}

/* creates triangle */
.triangle-isosceles:after {
   content:"";
   display:block; /* reduce the damage in FF3.0 */
   position:absolute;
   bottom:-15px;
   left:50px;
   width:0;
   border-width:15px 15px 0;
   border-style:solid;
   border-color:#ffffff transparent;
}

#textedit0 {display: none;}
#textedit1 {display: none;}
#textedit2 {display: none;}
#textedit3 {display: none;}
#textedit4 {display: none;}
#textedit5 {display: none;}
#textedit6 {display: none;}
#textedit7 {display: none;}
#textedit8 {display: none;}
#textedit9 {display: none;}
#textedit10 {display: none;}
#textedit11 {display: none;}
#textedit12 {display: none;}
#textedit13 {display: none;}
#textedit14 {display: none;}
#textedit15 {display: none;}
#textedit16 {display: none;}


#textnum2 {display: none;}
#textnum3 {display: none;}
#textnum4 {display: none;}
#textnum5 {display: none;}
#textnum6 {display: none;}
#textnum7 {display: none;}
#textnum8 {display: none;}
#textnum9 {display: none;}
#textnum10 {display: none;}
#textnum11 {display: none;}
#textnum12 {display: none;}
#textnum13 {display: none;}
#textnum14 {display: none;}
#textnum15 {display: none;}
#textnum16 {display: none;}

</style>

<script>

$(function () {

$('#TextAdd2Form').submit(function() {
	if ($('#textnum0').css('display') != 'none') {
		$('#content1').val($('#textcontent0').val());
	}
	if ($('#textnum1').css('display') != 'none') {
		$('#content2').val($('#textcontent1').val());
	}
	if ($('#textnum2').css('display') != 'none') {
		$('#content1').val($('#textcontent2').val());
	}
	if ($('#textnum3').css('display') != 'none') {
		$('#content2').val($('#textcontent3').val());
	}
	if ($('#textnum4').css('display') != 'none') {
		$('#content1').val($('#textcontent4').val());
	}
	if ($('#textnum5').css('display') != 'none') {
		$('#content2').val($('#textcontent5').val());
	}
	if ($('#textnum6').css('display') != 'none') {
		$('#content1').val($('#textcontent6').val());	
	}
	if ($('#textnum7').css('display') != 'none') {
		$('#content2').val($('#textcontent7').val());
	}

});

$('#TextAdd2Form').submit(function(){
	var text2 = $('#content2').val();
	var n=text2.replace('KEYWORD', $('#TextKeyword').val());	
	if (n.length > 160) {
		return confirm("Your text messages are over 160 characters and you will be charged for 2 messages. Continue?");
	}
});

$("#editbtn0").click(function() {
	$("#textnum0").hide();
	$("#textedit0").show();
});
$("#savebtn0").click(function() {
	$("#textnum0").show();
	$("#textedit0").hide();
	$("#textshow0").html($("#textcontent0").val());
});

$("#editbtn1").click(function() {
	$("#textnum1").hide();
	$("#textedit1").show();
});
$("#savebtn1").click(function() {
	$("#textnum1").show();
	$("#textedit1").hide();
	$("#textshow1").html($("#textcontent1").val());
});

$("#editbtn2").click(function() {
	$("#textnum2").hide();
	$("#textedit2").show();
});
$("#savebtn2").click(function() {
	$("#textnum2").show();
	$("#textedit2").hide();
	$("#textshow2").html($("#textcontent2").val());
});

$("#editbtn3").click(function() {
	$("#textnum3").hide();
	$("#textedit3").show();
});
$("#savebtn3").click(function() {
	$("#textnum3").show();
	$("#textedit3").hide();
	$("#textshow3").html($("#textcontent3").val());
});

$("#editbtn4").click(function() {
	$("#textnum4").hide();
	$("#textedit4").show();
});
$("#savebtn4").click(function() {
	$("#textnum4").show();
	$("#textedit4").hide();
	$("#textshow4").html($("#textcontent4").val());
});

$("#editbtn5").click(function() {
	$("#textnum5").hide();
	$("#textedit5").show();
});
$("#savebtn5").click(function() {
	$("#textnum5").show();
	$("#textedit5").hide();
	$("#textshow5").html($("#textcontent5").val());
});

$("#editbtn6").click(function() {
	$("#textnum6").hide();
	$("#textedit6").show();
});
$("#savebtn6").click(function() {
	$("#textnum6").show();
	$("#textedit6").hide();
	$("#textshow6").html($("#textcontent6").val());
});

$("#editbtn7").click(function() {
	$("#textnum7").hide();
	$("#textedit7").show();
});
$("#savebtn7").click(function() {
	$("#textnum7").show();
	$("#textedit7").hide();
	$("#textshow7").html($("#textcontent7").val());
});



	$("#TextTextseries").change(function() {
	
		if ($("#TextTextseries").val() == 0) {
			$("#textnum0").fadeIn();
			$("#textnum1").fadeIn();
			$("#textnum2").hide();
			$("#textnum3").hide();
			$("#textnum4").hide();
			$("#textnum5").hide();
			$("#textnum6").hide();
			$("#textnum7").hide();			
		}

		if ($("#TextTextseries").val() == 2) {
			$("#textnum0").hide();
			$("#textnum1").hide();
			$("#textnum2").fadeIn();
			$("#textnum3").fadeIn();
			$("#textnum4").hide();
			$("#textnum5").hide();
			$("#textnum6").hide();
			$("#textnum7").hide();			
		}
		if ($("#TextTextseries").val() == 4) {
			$("#textnum0").hide();
			$("#textnum1").hide();
			$("#textnum2").hide();
			$("#textnum3").hide();
			$("#textnum4").fadeIn();
			$("#textnum5").fadeIn();
			$("#textnum6").hide();
			$("#textnum7").hide();			
		}
		if ($("#TextTextseries").val() == 6) {
			$("#textnum0").hide();
			$("#textnum1").hide();
			$("#textnum2").hide();
			$("#textnum3").hide();
			$("#textnum4").hide();
			$("#textnum5").hide();
			$("#textnum6").fadeIn();
			$("#textnum7").fadeIn();			
		}
		if ($("#TextTextseries").val() == 8) {
			$("#textnum0").hide();
			$("#textnum1").hide();
			$("#textnum2").hide();
			$("#textnum3").hide();
			$("#textnum4").hide();
			$("#textnum5").hide();
			$("#textnum6").hide();
			$("#textnum7").hide();			
			$("#textnum8").fadeIn();
			$("#textnum9").fadeIn();			
		}
	
	});
		
});

</script>
<script>
$(function() {

	$('#TextKeyword').keyup(function(){ 
		var new_length = $(this).val().length;
		$('#keycounter0').html( '+ '+ new_length + ' char keyword');
		$('#keycounter1').html( '+ '+ new_length + ' char keyword');
		$('#keycounter2').html( '+ '+ new_length + ' char keyword');
		$('#keycounter3').html( '+ '+ new_length + ' char keyword');
		$('#keycounter4').html( '+ '+ new_length + ' char keyword');
		$('#keycounter5').html( '+ '+ new_length + ' char keyword');
		$('#keycounter6').html( '+ '+ new_length + ' char keyword');
		$('#keycounter7').html( '+ '+ new_length + ' char keyword');
	});

	var new_length = $('#textcontent0').val().length;
	$('#counter0').html( new_length + ' characters');
	$('#textcontent0').keyup(function(){ 
		var new_length = $(this).val().length;
		$('#counter0').html( new_length + ' characters');
	});


	var new_length = $('#textcontent1').val().length;
	$('#counter1').html( new_length + ' characters');
	$('#textcontent1').keyup(function(){ 
		var new_length = $(this).val().length;
		$('#counter1').html( new_length + ' characters');
	});

	var new_length = $('#textcontent2').val().length;
	$('#counter2').html( new_length + ' characters');
	$('#textcontent2').keyup(function(){ 
		var new_length = $(this).val().length;
		$('#counter2').html( new_length + ' characters');
	});

	var new_length = $('#textcontent3').val().length;
	$('#counter3').html( new_length + ' characters');
	$('#textcontent3').keyup(function(){ 
		var new_length = $(this).val().length;
		$('#counter3').html( new_length + ' characters');
	});

	var new_length = $('#textcontent4').val().length;
	$('#counter4').html( new_length + ' characters');
	$('#textcontent4').keyup(function(){ 
		var new_length = $(this).val().length;
		$('#counter4').html( new_length + ' characters');
	});

	var new_length = $('#textcontent5').val().length;
	$('#counter5').html( new_length + ' characters');
	$('#textcontent5').keyup(function(){ 
		var new_length = $(this).val().length;
		$('#counter5').html( new_length + ' characters');
	});

	var new_length = $('#textcontent6').val().length;
	$('#counter6').html( new_length + ' characters');
	$('#textcontent6').keyup(function(){ 
		var new_length = $(this).val().length;
		$('#counter6').html( new_length + ' characters');
	});

	var new_length = $('#textcontent7').val().length;
	$('#counter7').html( new_length + ' characters');
	$('#textcontent7').keyup(function(){ 
		var new_length = $(this).val().length;
		$('#counter7').html( new_length + ' characters');
	});


});


</script>
	
		<?
		
		
//		$textcontent[0] = "If u have a friend or family member who is in pain and u feel that we may be able to help, then forward the next message we send you, to that person.";
//		$textcontent[1] = "I would like to help u feel better, text KEYWORD to 72727 and you will receive a free vip consultation from my favorite chiropractor. ";
//		$textcontent[2] = "If u have a friend or family member who you would like to do something nice for during this holiday, we may be able to help. Forward the next message we send you, to that person.";
//		$textcontent[3] = "Happy Holidays, here is something from me to u, text \"KEYWORD\" to 72727 and u will receive a free vip consultation from my favorite chiropractor";
//		$textcontent[4] = "If u have a friend or family member who would like to receive our free, must have health newsletter, then forward the next message we send you, to that person";
//		$textcontent[5] = "If you're in the market for a good Chiropractor then you should read what mine has to say about your health. Text KEYWORD to 72727";
//		$textcontent[6] = "If u have a friend or family member who's having a B-day & u would like to do something nice 4 them. Forward the next message we send u, to that person";
//		$textcontent[7] = "Happy B-day! Text \"KEYWORD\" to 72727 to receive a gift certificate for a 30 min massage, courtesy of me. Enjoy!";
		
		for ($i=0;$i<count($textreferrals);$i++) {
		
			if (isset($texts[0])) {
				echo "<p style='border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);border-style:solid;border-width:1px;' class='triangle-isosceles' id='textnum".$i."'><span id='textshow".$i."'>".$textreferrals[$i]['Textreferrals']['content']."</span><a id='editbtn".$i."' style='text-decoration:none;float:right;position:relative;top:13px;' class='btn large primary' href='#'>Edit</a></p>";
				echo "<p style='border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);border-style:solid;border-width:1px;' class='triangle-isosceles' id='textedit".$i."'><textarea id='textcontent".$i."' style='font-size:14px;width:300px;'>".$textreferrals[$i]['Textreferrals']['content']."</textarea><span id='counter$i' style='float:right;font-weight:bold;'>0 characters</span><span id='keycounter$i' style='font-weight:bold;font-size:13px;margin-top:-23px;float:right'>+ 0 char keyword</span><a id='savebtn".$i."' style='text-decoration:none;float:right;position:relative;top:-5px;' class='btn large primary' href='#'>Save</a></p>";
			}
			else {
				echo "<textarea id='textcontent".$i."' style='display:none;'></textarea>";
			}
		}	
		?>
	

<div class="alert-message" style="width:75px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PART C</p></div>

	<?php
			
		echo $this->Form->input('keyword', array('style' => 'margin-bottom:2px;width:360px;float:left;', 'label' => 'Check keyword availibility.'));
		
	?><a onClick="$.get('/members/keywordcheck/', { keyword: $('#TextKeyword').val() }, function(data) {alert(data);});" style='text-decoration:none;float:right;position:relative;top:-25px;' class='btn large primary' href='#'>Check</a>
	
	<font size="2">&nbsp;&nbsp;This keyword will appear in the text message you will be sending.</font>

<div class="alert-message" style="width:75px; -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PART D</p></div>
	
						<?php
		echo $this->Form->input('group_id', array('label' => 'Pick a Group of Recipients', 'type' => 'select', 'options' => array_merge(array('all' => 'All', $groups))));
	?>		
	
	<div class="alert-message" style="width:75px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PART E</p></div>

	
					<?php
		echo $this->Form->input('days', array('label' => 'When would you like the message sent?', 'type' => 'select', 'options' => array('Now', 'Tomorrow', 'In 2 Days', 'In 3 Days')));
	?>	
	
	<div class="alert-message" style="width:75px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PART F</p></div>	
		
		<?php
			
		echo $this->Form->input('Activate', array('label' => 'Activate the Refer a Friend Message Sequence', 'type' => 'submit'));
		
	?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<input type="text" id="content1" style="margin-bottom:2px;width:360px;float:left;" name="data[Text][content1]" value="">	
<input type="text" id="content2" style="margin-bottom:2px;width:360px;float:left;" name="data[Text][content2]" value="">	

		
</div>	
