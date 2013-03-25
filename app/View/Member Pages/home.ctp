<script src="/js/guiders.js"></script>

<center><h1 align="center" style="width:310px; height:120px; vertical-align:middle"><img style="float:left;" src="/img/1335481145_Control-Panel.png" height="100"><br><font color="black"><img src="/img/ControlPanelText.png"></font></h1><br></center>

<div class="alert-message block-message info" id="info-div" style="width:898px;"><center>
<a class="close" href="#" id="close-button" style="font-size:14px; text-decoration:none;">X</a>
<a id="clinic-info" class="btn large" style="text-decoration:none;" href="#"><center><img src="/img/1327027885_kcmdrkonqi.png"><br>Set Up<br> Clinic Info</center></a>
&nbsp;&nbsp;&nbsp;<a id="setup-email" class="btn large eighty" style="text-decoration:none;" href="#"><center><img src="/img/1327027688_email.png"><br>Set Up<br> Email</center></a>
&nbsp;&nbsp;&nbsp;<a id="setup-mobile" class="btn large eighty" style="text-decoration:none;" href="#"><center><img src="/img/1327027840_stock_cell-phone.png"><br>Set Up<br> Mobile</center></a>
&nbsp;&nbsp;&nbsp;<a id="setup-print" class="btn large eighty" style="text-decoration:none;" href="#"><center><img src="/img/1327027772_mail.png"><br>Set Up<br> Print Shop</center></a>
&nbsp;&nbsp;&nbsp;<a id="preview-newsletter" class="btn large eighty" style="text-decoration:none;" href="#"><center><img src="/img/1327027922_news.png"><br>Preview<br>Content</center></a>
&nbsp;&nbsp;&nbsp;<a id="manage-patients" class="btn large eighty" style="text-decoration:none;" href="#"><center><img src="/img/1335475501_PatientMale.png"><br>Manage<br>Patients</center></a>

&nbsp;&nbsp;&nbsp;<a id="setup-referral" class="btn large eighty" style="text-decoration:none;" href="#"><center><img src="/img/1335475501_PatientMale.png"><br>Set Up<br>Referrals</center></a>
</center>


<div id="clinic-div" style="display:none;">
<?php echo $this->Form->create('User', array("type" => "file", "action" => "update"));?>
	<fieldset>
		<legend style="position:relative; margin-left:160px;top:30px;margin-top:10px;"><font color="darkblue">Clinic Information</font></legend>
		<img src="/img/help.png" id="helpbutton15" style="cursor:pointer;">
		<p id="help15" style="display:none; margin-left:40px;">This information will appear in the email, as well as the print version of your newsletter.</p>
		<br><br>
		<div class="well" style="width:500px;height:100px;border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #1</p></div>
		
		<label style="position:relative; top:-10px;left:-25">Enter your clinic name</label>
		
	<?php
			
		echo $this->Form->input('clinicname', array('label' => '<img style="float:left;padding-right:30px;" src="/img/clinic1.png">'));
		
	?>
</div><br>
<div class="well" style="width:500px;height:100px;border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #2</p></div>
		
		<label style="position:relative; top:-10px;left:-25">Enter your clinic's address</label>
		
	<?php
			
		echo $this->Form->input('clinicaddress', array('label' => '<img style="float:left;padding-right:30px;" src="/img/maps.png">'));
		
	?>
</div><br>

<div class="well" style="width:500px;height:100px;border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #3</p></div>
		
		<label style="position:relative; top:-10px;left:-25">Enter your clinic's phone number</label>
		
	<?php
			
		echo $this->Form->input('clinicphone', array('label' => '<img style="width:65px;float:left;padding-right:30px;" src="/img/address_book.png">'));
		
	?>
</div><br>

<div class="well" style="width:500px;height:100px;border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #4</p></div>
		
		<label style="position:relative; top:-10px;left:-25">Enter your doctor's full name</label>
		
	<?php
			
		echo $this->Form->input('clinicdocname', array('label' => '<img style="width:65px;float:left;padding-right:30px;" src="/img/user_info.png">'));
		
	?>
</div><br>





<div class="well" style="width:688px;border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #5</p></div>
<label style="position:relative; top:-10px;left:-25;">Upload your Clinic Logo (Optional)</label>
<img style="float:left;" src="/img/upload1.png">
<?	
		echo $this->Form->input('cliniclogo', array('style'=>'float:left;position:relative; top:-50px;right:-100px;', 'label' => '', 'type' => 'file'));
		?>
		
<? if ($user['User']['logo'] == 1) { ?>
		
	<a href="/users/delete_logo" class="btn large primary" style="text-decoration:none;float:left;position:relative;top:-36px;right:-100px;">Delete</a>		

<img src="/img/public/<?=$id;?>/logo.jpg?<?=rand(1,99999);?>" style="float:right;position:relative;top:-140px;max-height:100px;max-width:400px;">

<? } ?>
</div>		
	

		<br>
			<div class="well" style="min-height:200px;width:688px;border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #6</p></div>
<label style="position:relative; top:-10px;left:-25;">Upload your Picture (Optional)</label>
<style>#UserProfilepic {position: relative;top:20px;right:-20px; }</style>

		<?
		
		if ($user['User']['pic'] == 1) {$after = '<img src="/img/public/'.$id.'/profile.jpg?'.rand(1,99999).'" width="100" style="float:right;position:relative;top:-30px;"><br><a href="/users/delete_profile" class="btn large primary" style="text-decoration:none;float:right;position:relative;top:84px;right:-90px;">Delete</a>';}
		else {$after = '';
		}
		
		echo $this->Form->input('profilepic', array('after' => $after, 'label' => '<img style="float:left;" src="/img/profile1.png">', 'type' => 'file'));
		?>

				
		</div>
		<?
	?>
	</fieldset>
<?php echo $this->Form->end(__('Update'));?>
</div>

<div id="email-div" style="display:none;">
<?php echo $this->Form->create('User', array("action" => "update2"));?>
	<fieldset>
		<legend style="position:relative; margin-left:160px;top:30px;margin-top:10px;"><center><font color="darkblue">Email Newsletter</center></font></legend>
		
		<script>
		$(function() {
		
<?

if (!isset($_COOKIE['welcome'])) { ?>

		
		guiders.createGuider({
  buttons: [{name: "Close"}],
  description: "Click here to start setting up your clinic.",
  attachTo: "#clinic-info",
  position: 12,
  overlay: false,
  title: "Welcome to Sendarella!"
}).show();

<? setcookie("welcome", "done"); } ?>
		
			$('#helpbutton1').hover(function () {
				$('#help1').toggle("fast");
			})
			$('#helpbutton2').hover(function () {
				$('#help2').toggle("fast");
			})
			$('#helpbutton3').hover(function () {
				$('#help3').toggle("fast");
			})
			$('#helpbutton4').hover(function () {
				$('#help4').toggle("fast");
			})
			$('#helpbutton5').hover(function () {
				$('#help5').toggle("fast");
			})
			$('#helpbutton6').hover(function () {
				$('#help6').toggle("fast");
			})
			$('#helpbutton7').hover(function () {
				$('#help7').toggle("fast");
			})
			$('#helpbutton8').hover(function () {
				$('#help8').toggle("fast");
			})
			$('#helpbutton9').hover(function () {
				$('#help9').toggle("fast");
			})
			$('#helpbutton10').hover(function () {
				$('#help10').toggle("fast");
			})
			$('#helpbutton11').hover(function () {
				$('#help11').toggle("fast");
			})
			$('#helpbutton12').hover(function () {
				$('#help12').toggle("fast");
			})
			$('#helpbutton13').hover(function () {
				$('#help13').toggle("fast");
			})
			$('#helpbutton14').hover(function () {
				$('#help14').toggle("fast");
			})
			$('#helpbutton15').hover(function () {
				$('#help15').toggle("fast");
			})
			$('#textbutton').click(function (event) {
					event.preventDefault();
				$('#textmessages').toggle("fast");	
			})
			$('#textbutton2').click(function (event) {
					event.preventDefault();
				$('#textmessages2').toggle("fast");	
			})
			$('#textbutton3').click(function (event) {
					event.preventDefault();
				$('#textmessages3').toggle("fast");	
			})
	
			
			$.extend({
  getUrlVars: function(){
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
      hash = hashes[i].split('=');
      vars.push(hash[0]);
      vars[hash[0]] = hash[1];
    }
    return vars;
  },
  getUrlVar: function(name){
    return $.getUrlVars()[name];
  }
});

if($.getUrlVar('clinic')) {
	$('#clinic-div').slideDown('slow');
}

if($.getUrlVar('email')) {
	$('#email-div').slideDown('slow');
}
if($.getUrlVar('mobile')) {
					$('#mobile-div').slideDown('slow');
				}
if($.getUrlVar('print')) {
		$('#print-div').slideDown('slow');
}		
if($.getUrlVar('preview')) {
		$('#preview-div').slideDown('slow');
}
			
		});
		</script>
		
		
		<img src="/img/help.png" id="helpbutton1" style="cursor:pointer;">
		<p id="help1" style="display:none; margin-left:40px;">In this area you will be able to preview and edit the news letter that we provide for you in any way you see fit, or you can use your own content all together. Also, you can turn the auto deliver functions for the newsletter "on" or "off".</p>
		
		<br><br>
		<div class="well" style="width:500px;min-height:100px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #1</p></div>
<label style="position:relative; top:-10px;">Preview Newsletter (optional)</label>
		<img src="/img/preview1.png">
		<div class="input select" style="float:right;margin-right:235px"><p>
		<a class="btn large" style="text-decoration:none;" target="_blank" href="/emails/<?=$lastemail['Email']['id'];?>"><img src="/img/1327027688_email.png">&nbsp; Preview</a>
		</p>
		</div>
</div>
		<br>
		<div class="well" style="width:500px;min-height:100px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #2</p></div>
		<label style="position:relative; top:-10px;">Edit Newsletter (optional)</label>
		<img src="/img/edit1.png">

		<div class="input select" style="float:right;margin-right:260px"><p>
		<a class="btn large" style="text-decoration:none;" href="http://www.sendarella.com/members/emails/edit/<?=$lastemail['Email']['id'];?>"><img src="/img/1327027688_email.png">&nbsp; Edit</a>
		
		</p>
		</div>
</div>		<br>

<div class="well" style="width:500px;min-height:120px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #3</p></div>	
<label style="position:relative; top:-10px;">Choose a group of recipients</label>
	<img src="/img/recipients.png" style="width:75px;">			
			<?php
		echo $this->Form->input('group_id', array('label' => '', 'style' => 'float:right;position:relative;top:-80px;right:170px;', 'type' => 'select', 'options' => array_merge(array('all' => 'All', $groups))));
	?>		

</div><br>
		<div class="well" style="width:500px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #4</p></div>
		<label style="position:relative; top:-10px;">Turn auto mail function on (optional)</label>

	<?php
		echo $this->Form->input('emailauto1', array('label' => '<img src="/img/calendar1.png">', 'style'=>'float:right;width:100px;margin-right:270px;margin-top:-110px;', 'type' => 'select', 'options' => array('No', 'Yes')));
	?>

	<?php
		echo $this->Form->input('emailauto2', array('label' => '', 'style'=>'float:right;width:200px;margin-right:170px;margin-top:-80px;', 'type' => 'select', 'options' => array('On First', 'On Second', 'On Third', 'On Fourth')));
	?>


	<?php
		echo $this->Form->input('emailauto3', array('label' => '', 'style'=>'float:right;width:200px;margin-right:170px;margin-top:-50px;', 'type' => 'select', 'options' => array('Mondays', 'Tuesdays', 'Wednesdays', 'Thursdays', 'Fridays', 'Saturdays', 'Sundays')));
	?>


		<img style="float:right;position:relative; top:-25px;" src="/img/help.png" id="helpbutton2" style="cursor:pointer;">
		<p id="help2" style="display:none; margin-left:40px;">If this function is turned on, the newsletter will be sent out automatically 1x/month on the date that you specify.  You may edit the content up until the newsletter is sent out. If this function is left in the "off" position, than every month, you will need to make sure to manually send out the newsletter to your patients.</p>

</div>
	
	</fieldset>
<?php echo $this->Form->end(__('Update'));?>
</div>

<div id="mobile-div" style="display:none;">
<?php echo $this->Form->create('User', array('action' => 'textsettings'));?>
	<fieldset>
		<legend style="position:relative; margin-left:160px;top:30px;margin-top:10px;"><font color="darkblue">Mobile Settings</font></legend>
		
		<img src="/img/help.png" id="helpbutton5" style="cursor:pointer;">
		<p id="help5" style="display:none; margin-left:40px;">In this area, you will be able to preview and edit the text communication that we provide for you in any way you see fit, or you can use your own content all together.  Also, you can turn the auto deliver functions for the content "on" or "off".</p>
<br><br>
		<div class="well" style="width:500px;min-height:150px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #1</p></div>
<label style="position:relative; top:-10px;">Preview Outgoing texts (optional)</label>
		<div class="input select" style="margin-right:90px;width:400px">
		<img src="/img/texts1.png">
		<a id="textbutton" class="btn large" style="position:relative; top:-45px;left:20px;text-decoration:none;" href="#"><img src="/img/1327027840_stock_cell-phone.png">&nbsp; Preview Texts</a>
		
		</div><div id="textmessages" style="display:none;">
		<?
		
		for ($i=0;$i<4;$i++) {
		
			if (isset($texts[$i])) {
				echo "<p style='border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);border-style:solid;border-width:1px;' class='triangle-isosceles'>".$texts[$i]['Text']['content']."</p>";
			}
		}	
		?>
		</div>
</div>

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
</style>
		
<br>
				
<div class="well" style="width:500px;min-height:120px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #2</p></div>	
<label style="position:relative; top:-10px;">Choose a group of recipients</label>
	<img src="/img/recipients2.png" style="width:75px;">		
			<?php
		echo $this->Form->input('group_id', array('label' => '', 'style' => 'float:right;position:relative;top:-80px;right:170px;', 'type' => 'select', 'options' => array_merge(array('all' => 'All', $groups))));
	?>		

</div><br>


		<div class="well" style="width:500px;min-height:250px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #3</p></div>	
<label style="position:relative; top:-10px;">Turn auto text function on (optional)</label>
	<img src="/img/texts3.png">			
			<?php
		echo $this->Form->input('mobileauto1', array('style' => 'float:right;width:100px;margin-right:270px;margin-top:-80px;', 'label' => '', 'type' => 'select', 'options' => array('No', 'Yes')));
	?>
			<?php
		echo $this->Form->input('mobileauto2', array('style' => 'float:right;width:200px;margin-right:170px;margin-top:-50px;', 'label' => '', 'type' => 'select', 'options' => array('On Mondays', 'On Tuesdays', 'On Wednesdays', 'On Thursdays', 'On Fridays', 'On Saturdays', 'On Sundays')));
	?>
			<?php
		echo $this->Form->input('mobileauto3', array('style' => 'float:right;width:200px;margin-right:170px;margin-top:-20px;', 'label' => '', 'type' => 'select', 'options' => array('Once per week', 'Once every two weeks', 'Once Per Month')));
	?>

		<img src="/img/help.png" style="float:right;position:relative; top:20px;left:380px;" id="helpbutton6" style="cursor:pointer;">
		<p id="help6" style="display:none; margin-left:40px;"><br><br>If this function is turned "on", one text per week will be sent out automatically on the day of the week you specify.  (ie. Every Monday)  You may edit the content of the text before the content is sent.  If this function is turned "off", then every week you will need to make sure to manually send out the appropriate message to your patient list.</p>
		
</div><br>

<div class="well" style="width:500px;min-height:150px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #4</p></div>
<label style="position:relative; top:-10px;">Edit And Choose Outgoing texts (optional)</label>
				<div class="input select" style="float:right;margin-right:90px;width:400px"><p>
				<img src="/img/texts2.png">
		<a id="textbutton2" class="btn large" style="position:relative; top:-45px;left:20px;text-decoration:none;" href="/members/texts"><img src="/img/1327027840_stock_cell-phone.png">&nbsp; Edit Texts</a>
		</p>
		</div>
		
		<style>
		#textedit0 {display: none;}
#textedit1 {display: none;}
#textedit2 {display: none;}
#textedit3 {display: none;}
#textedit4 {display: none;}
#textedit5 {display: none;}
#textedit6 {display: none;}
#textedit7 {display: none;}

</style>

<script>

$(function () {

$("#editbtn0").click(function(e) {
e.preventDefault();
	$("#textnum0").hide();
	$("#textedit0").show();
});
$("#savebtn0").click(function(e) {
e.preventDefault();
	$("#textnum0").show();
	$("#textedit0").hide();
	$.post("/members/texts/editajax/"+$("#textcontent0").attr('title'), {content: $("#textcontent0").val()});
	$("#textshow0").html($("#textcontent0").val());
});

$("#editbtn1").click(function(e) {
	e.preventDefault();
	$("#textnum1").hide();
	$("#textedit1").show();
});
$("#savebtn1").click(function(e) {
	e.preventDefault();
	$("#textnum1").show();
	$("#textedit1").hide();
	$.post("/members/texts/editajax/"+$("#textcontent1").attr('title'), {content: $("#textcontent1").val()});
	$("#textshow1").html($("#textcontent1").val());
});

$("#editbtn2").click(function(e) {
	e.preventDefault();
	$("#textnum2").hide();
	$("#textedit2").show();
});
$("#savebtn2").click(function(e) {
	e.preventDefault();
	$("#textnum2").show();
	$("#textedit2").hide();
	$.post("/members/texts/editajax/"+$("#textcontent2").attr('title'), {content: $("#textcontent2").val()});
	$("#textshow2").html($("#textcontent2").val());
});

$("#editbtn3").click(function(e) {
	e.preventDefault();
	$("#textnum3").hide();
	$("#textedit3").show();
});
$("#savebtn3").click(function(e) {
	e.preventDefault();
	$("#textnum3").show();
	$("#textedit3").hide();
	$.post("/members/texts/editajax/"+$("#textcontent3").attr('title'), {content: $("#textcontent3").val()});
	$("#textshow3").html($("#textcontent3").val());
});



	$("#TextfollowupTextseries").change(function() {
	
		if ($("#TextfollowupTextseries").val() == 0) {
			$("#textnum0").fadeIn();
			$("#textnum1").fadeIn();
			$("#textnum2").hide();
			$("#textnum3").hide();
			$("#textnum4").hide();
			$("#textnum5").hide();
			$("#textnum6").hide();
			$("#textnum7").hide();			
		}

		if ($("#TextfollowupTextseries").val() == 1) {
			$("#textnum0").hide();
			$("#textnum1").hide();
			$("#textnum2").fadeIn();
			$("#textnum3").fadeIn();
			$("#textnum4").hide();
			$("#textnum5").hide();
			$("#textnum6").hide();
			$("#textnum7").hide();			
		}
		if ($("#TextfollowupTextseries").val() == 2) {
			$("#textnum0").hide();
			$("#textnum1").hide();
			$("#textnum2").hide();
			$("#textnum3").hide();
			$("#textnum4").fadeIn();
			$("#textnum5").fadeIn();
			$("#textnum6").hide();
			$("#textnum7").hide();			
		}
		if ($("#TextfollowupTextseries").val() == 3) {
			$("#textnum0").hide();
			$("#textnum1").hide();
			$("#textnum2").hide();
			$("#textnum3").hide();
			$("#textnum4").hide();
			$("#textnum5").hide();
			$("#textnum6").fadeIn();
			$("#textnum7").fadeIn();			
		}
	
	});
		
});

</script>
<script>
$(function() {
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

});


</script>

		
		
		<div id="textmessages2" style="display:none;">
		<?
		
		for ($i=0;$i<4;$i++) {
		
			if (isset($texts[0])) {
				if ($texts[$i]['Text']['chosen'] == 1) {$checked = 'checked';}
				else {$checked = '';}
			
				//echo "<p style='border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);border-style:solid;border-width:1px;' class='triangle-isosceles'>".$texts[0]['Text']['content']."<input style='margin-top:5px;' type='checkbox' checked><a style='text-decoration:none;float:right;position:relative;top:-8px;' class='btn large' href='/members/texts/edit/".$texts[0]['Text']['id']."'>Edit</a></p>";
				echo "<p style='border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);border-style:solid;border-width:1px;' class='triangle-isosceles' id='textnum".$i."'><input style='margin-top:5px;' type='checkbox'".$checked."><span id='textshow".$i."'>".$texts[$i]['Text']['content']."</span><a id='editbtn".$i."' style='color:white;text-decoration:none;float:right;position:relative;top:13px;' class='btn large primary' href='#'>Edit</a></p>";
				echo "<p style='border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);border-style:solid;border-width:1px;' class='triangle-isosceles' id='textedit".$i."'><textarea title='".$texts[$i]['Text']['id']."' id='textcontent".$i."' style='font-size:14px;width:300px;'>".$texts[$i]['Text']['content']."</textarea><span id='counter$i' style='float:right;font-weight:bold;'>0 characters</span><a id='savebtn".$i."' style='color:white;text-decoration:none;float:right;position:relative;top:-5px;' class='btn large primary' href='#'>Save</a></p>";
			}
			else {
				echo "<textarea id='textcontent".$i."' style='display:none;'></textarea>";
			}
		}	
		?>
		</div>

</div><br>
<!--		<div class="well" style="width:500px;min-height:150px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:65px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;">STEP #5</p></div>		
<label style="position:relative; top:-10px;">Pick a keyword</label>
	<img src="/img/texts4.png">
	<?php
		echo $this->Form->input('keyword', array('label' => '', 'style' => 'float:right;width:280px;margin-right:95px;margin-top:-80px;'));
	?>
	<a href="#" class="btn large primary" style="text-decoration:none;float:right;position:relative;top:-90px;" onclick="$.get('/members/keywordcheck/', { keyword: "bob" }, function(data) {alert(data);});">Check</a>
		<img style="float:right;position:relative; top:-25px;" src="/img/help.png" id="helpbutton7" style="cursor:pointer;">
		<p id="help7" style="display:none; margin-left:40px;">This is a word that will be given to your patients by you, and asked that they text it to <b>72727</b>. After they text this word, they are giving you permission to be able to send them text communication.  </p>
</div>	<br>	-->
				<div class="well" style="width:500px;min-height:150px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #5</p></div>
<label style="position:relative; top:-10px;">Send a link of your Health newsletter (optional)</label>
<img src="/img/texts5.png">
					<?php
		echo $this->Form->input('autotexton', array('style' => 'float:right;width:100px;margin-right:270px;margin-top:-80px;', 'label' => '', 'type' => 'select', 'options' => array('Yes', 'No')));
	?>
	
		<img src="/img/help.png" style="float:right;position:relative; top:-25px;" id="helpbutton8" style="cursor:pointer;">
		<p style="display:none; margin-left:40px;" id="help8" style="display:none; margin-left:40px;">If you turn this function on, your patients will be able to read your newsletter right on their phone provided they have the internet. </p>
</div><br>

	
	</fieldset>
<?php echo $this->Form->end(__('Update'));?>
</div>

<div id="print-div" style="display:none;">
<?php echo $this->Form->create('User', array('action' => 'update3', 'type' => 'file'));?>
	<fieldset>
		<legend style="position:relative; margin-left:160px;top:30px;margin-top:10px;"><font color="darkblue">Print Settings</font></legend>

<img src="/img/help.png" id="helpbutton10" style="cursor:pointer;">
<p id="help10" style="display:none; margin-left:40px;"> In this Area, you will be able to setup your newsletter to be mailed out to a specific group of patients.  Before the letter is sent, you have the option of previewing and editing the letter in any way you see fit. </p>
<br><br>
		<div class="well" style="width:500px;min-height:100px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #1</p></div>
<label style="position:relative; top:-10px;">Preview This Month's News Letter  </label>

		<div class="input select"><p>
		<img src="/img/print1.png">
		<a class="btn large" style="position:relative; top:-45px;left:20px;text-decoration:none;" href="http://www.sendarella.com/members/mailers/view2/<?=$lastprint['Mailer']['id'];?>"><img src="/img/1327027772_mail.png">&nbsp; Preview Newsletter</a>
		</p>
		</div>
</div><br>
		<div class="well" style="width:500px;min-height:100px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #2</p></div>
<label style="position:relative; top:-10px;">Edit News Letter Before Sending</label>

				<div class="input select"><p>		<img src="/img/print2.png">
				
		<a class="btn large" style="position:relative; top:-45px;left:20px;text-decoration:none;" href="/members/mailers/edit/<?=$lastprint['Mailer']['id'];?>"><img src="/img/1327027772_mail.png">&nbsp; Edit Newsletter</a>
		</p>
		</div>
</div><br>
		<div class="well" style="width:500px;min-height:100px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #3</p></div>
<label style="position:relative; top:-10px;">Choose how your newsletter is mailed</label>
		<img src="/img/print3.png">


	<?php
		echo $this->Form->input('type', array('style' => 'float:right;position:relative;top:-70px;right:10px;','label' => '', 'type' => 'select', 'options'=> array('Newsletter With Envelopes','Newsletter Without Envelopes')));
		
	?>
	
	<img src="/img/help.png" id="helpbutton11" style="position:relative;left:470px;top:10px;cursor:pointer;">
<p id="help11" style="display:none; margin-left:40px;">  You can have your newsletters mailed in an envelope, or you can have your newsletters mailed trifold, with no envelope.  </p>
</div><br>
		<div class="well" style="width:500px;min-height:100px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #4</p></div>
<label style="position:relative; top:-10px;">Upload Up To 2 Inserts (Optional)</label>

		<img src="/img/krita.png" style="width:80px;">

Note: You can have up to 2 one-sheet(double-sided) Inserts in a Print Mailer. If you already have a referral insert uploaded, you can only upload one additional.<br><br>
<?	
		echo $this->Form->input('secondinsert', array('style'=>'', 'label' => '', 'type' => 'file'));
		?>	
<a target="_blank" href="/inserts/<?=$id;?>-2.pdf" class="btn primary" style="width:140px;text-decoration:none;margin-left:300px;float:right;">Preview Current Insert</a>

<?	
		echo $this->Form->input('firstinsert', array('style'=>'', 'label' => '', 'type' => 'file'));
		?>	
<a target="_blank" href="/inserts/<?=$id;?>-1.doc" class="btn primary" style="width:140px;text-decoration:none;margin-left:300px;float:right;">Preview Current Insert</a>

	<img src="/img/help.png" id="helpbutton14" style="position:relative;left:470px;top:10px;cursor:pointer;">
<p id="help14" style="display:none; margin-left:40px;">After your newsletters are printed, you have two choices.  If you select the first choice, then we will mail the newsletters for you, to the list of patients that you have specified. If you select the second choice, we print your newsletters for you and send them directly to you at the address you specify, and you will do your own mailing. </p>
	
	
</div><br>
		<div class="well" style="width:500px;min-height:100px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #5</p></div>
<label style="position:relative; top:-10px;">Choose a color for the inserts</label>

		<img src="/img/krita.png" style="width:80px;">

	<?
		echo $this->Form->input('auto', array('style' => 'width:100px;float:right; position:relative;top:-70px;right:265px;', 'label' => '', 'type' => 'select', 'options' => array('Red', 'Blue', 'Green')));
	?>
	
	<img src="/img/help.png" id="helpbutton14" style="position:relative;left:470px;top:10px;cursor:pointer;">
<p id="help14" style="display:none; margin-left:40px;">After your newsletters are printed, you have two choices.  If you select the first choice, then we will mail the newsletters for you, to the list of patients that you have specified. If you select the second choice, we print your newsletters for you and send them directly to you at the address you specify, and you will do your own mailing. </p>
	
	
</div>

<br>


<div class="well" style="width:500px;min-height:120px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #5</p></div>	
<label style="position:relative; top:-10px;">Choose a group of recipients</label>
	<img src="/img/recipients3.png" style="width:75px;">			
			<?php
		echo $this->Form->input('group_id', array('label' => '', 'style' => 'float:right;position:relative;top:-80px;right:140px;', 'type' => 'select', 'options' => array_merge(array('all' => 'All', $groups))));
	?>		

</div><br>

		<div class="well" style="width:500px;min-height:100px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #6</p></div>
<label style="position:relative; top:-10px;">Turn Auto Print and Mail Function "On" (optional)</label>

		<img src="/img/print5.png">

	<?	echo $this->Form->input('printauto', array('style'=>'width:100px;float:right;position:relative;top:-80px;right:275px;','label' => '', 'type' => 'select', 'options' => array('No, I\'ll re-order every month', 'Yes'))); ?>

	<img src="/img/help.png" id="helpbutton13" style="position:relative;left:470px;top:10px;cursor:pointer;">
<p id="help13" style="display:none; margin-left:40px;">If the print and mail auto function is turned "on", the newsletter will be printed and sent out automatically.  It will be sent 1x/month on the date that you specify. You may edit the content of the newsletter up until it is sent out. If this function is left in the "off" position, then every month you will need to make sure to manually schedule a specific date for the newsletter to be printed and mailed to your patients. If you do not schedule a specific date, it will be assumed that you do not wish to have the newsletter printed and sent to your patients for that month.  </p>

</div>
<br>

	</fieldset>
<?php echo $this->Form->end(__('Update'));?>
</div>

<div id="preview-div" style="display:none;">
<fieldset>
<legend style="position:relative; margin-left:160px;top:30px;margin-top:10px;"><font color="darkblue">Preview Content</font></legend>
</fieldset>
		<div class="well" style="margin-left:10px;width:550px;min-height:100px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">EMAIL</p></div>
<label style="position:relative; top:-10px;">Click here to preview the email version of your<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; newsletter: </label>
<p><a class="btn large" style="margin-left:100px;text-decoration:none;" target="_blank" href="/emails/<?=$lastemail['Email']['id'];?>"><img src="/img/1327027688_email.png">&nbsp; Preview</a></p>
</div>
<br>
	<div class="well" style="margin-left:10px;width:550px;min-height:100px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">TEXT</p></div>
<label style="position:relative; top:-10px;">Click here to preview your texts: </label>
	<p><a class="btn large" id="textbutton3" style="margin-left:100px;text-decoration:none;" href="/members/mailers/download"><img src="/img/1327027922_news.png">&nbsp; Preview</a></p>
	<div id="textmessages3" style="display:none;">
		<?
		
		for ($i=0;$i<4;$i++) {
		
			if (isset($texts[0])) {
				echo "<p class='triangle-isosceles'>".$texts[0]['Text']['content']."</p>";
			}
		}	
		?>
		</div>

</div>

<br>
	<div class="well" style="margin-left:10px;width:550px;min-height:100px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PRINT</p></div>
<label style="position:relative; top:-10px;">Click here to preview the print version of your<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; newsletter: </label>

	<p><a class="btn large" style="margin-left:100px;text-decoration:none;" href="http://www.sendarella.com/members/mailers/view2/<?=$lastprint['Mailer']['id'];?>"><img src="/img/1327027922_news.png">&nbsp; Preview</a></p>
</div>
<!--<br>
	<div class="well" style="margin-left:10px;width:550px;min-height:100px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:65px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;">PRINT</p></div>
<label style="position:relative; top:-10px;">Click here to download a preview of your newsletter: </label>
	<p><a class="btn large" style="margin-left:100px;text-decoration:none;" href="http://www.sendarella.com/admin/newsletters/mailer/2"><img src="/img/1327027922_news.png">&nbsp; Download</a></p>
</div>-->

</div>

<div id="patients-div" style="display:none;">

<fieldset>
<legend style="position:relative; margin-left:160px;top:30px;margin-top:10px;"><font color="darkblue">Manage Patients</font></legend>
</fieldset>

		<div class="well" style="margin-left:10px;width:500px;min-height:100px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #1</p></div>

	<div class="input select"><p><label style="position:relative; top:-20px;">Create Patient Groups (optional):</label>
			<img src="/img/patients1.png">

	<a class="btn large" style="position:relative; top:-50px; text-decoration:none;" href="/members/groups"><img src="/img/1327027688_email.png">&nbsp; Create Groups</a></p>
	</div>

	<img src="/img/help.png" id="helpbutton4" style="float:right; position:relative; top:-20px; cursor:pointer;">
		<p id="help4" style="display:none; margin-left:40px;"> You have the option of uploading your list from excel in a CSV format</p>
</div>
<br>


		<div class="well" style="margin-left:10px;width:500px;min-height:100px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #2</p></div>

	<div class="input select"><p><label style="position:relative; top:-20px;">Upload Patient List (optional):</label>
			<img src="/img/preferences_contact_list.png" style="width:80px;">

	<a class="btn large" style="position:relative; top:-50px; text-decoration:none;" href="/members/patients/import"><img src="/img/1327027688_email.png">&nbsp; Import Patients</a></p>
	</div>

	<img src="/img/help.png" id="helpbutton4" style="float:right; position:relative; top:-20px; cursor:pointer;">
		<p id="help4" style="display:none; margin-left:40px;"> You have the option of uploading your list from excel in a CSV format</p>
</div>
<br>
		<div class="well" style="margin-left:10px;width:500px;min-height:100px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #3</p></div>
	<div class="input select"><p><label style="position:relative; top:-20px;">Manage Your Patients:</label>
	
			<img src="/img/patients2.png">

	<a class="btn large" style="position:relative; top:-50px;text-decoration:none;" href="/members/patients"><img src="/img/1327027688_email.png">&nbsp; Manage Patients</a></p>
	</div>
</div>
</div>






<div id="referral-div" style="display:none;padding-left:10px;">
<?php  echo $this->Form->create('User', array("id" => 'emailreferralform', "action" => "update2"));?>

<fieldset>
<legend style="position:relative; margin-left:160px;top:30px;margin-top:10px;"><font color="darkblue">Manage Referrals and Offers</font></legend>
</fieldset>

		<div class="well" style="width:650px;min-height:1100px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #1</p></div>
<label style="position:relative; top:-10px;">Manage Email referral function</label>

<img src="/img/referral1.png">
				
<div class="input select" style="width:530px;float:right;">
<div class="alert-message" style="width:75px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PART A</p></div>


					<?php
		echo $this->Form->input('emailreferral', array('label' => 'Turn on Email referral function (optional)', 'type' => 'select', 'options' => array('No', 'Yes')));
	?>	
	
			<img src="/img/help.png" style="float:right;position:relative; top:-25px;" id="helpbutton3" style="cursor:pointer;">
		<p id="help3" style="display:none; margin-left:40px;">If this function is turned on, a special button will appear within the newsletter which will read "Refer a Friend".  This will allow your patients when reading the newsletter,  the option of entering  email addresses of their family or friends, so they may start receiving the newsletter as well.</p>

<div class="alert-message" style="width:75px; -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PART B</p></div>
	
	<label style="position:relative; top:0px;">Customize Main Message on Referral Page (optional)</label> 

	
	<?
// include the WysiwygPro class
include_once("/home/drgranat/public_html/app/Vendor/wysiwygPro/wysiwygPro.class.php");

// create a new editor instance:
$editor = new wysiwygPro();

// give the editor a name
$editor->name = 'data[User][emailreferralcontent]';

// set the content to be edited
$editor->value = $user['User']['emailreferralcontent'];

$editor->iframeDialogs = false;

$editor->upload = true;

//$editor->baseURL = "http://".$site['subdomain'].".".$site['domain']."/"; 
//$editor->addStylesheet ("http://".$site['subdomain'].".".$site['domain']."/css/style.css");

//$editor->urlFormat = "absolute";

// Full file path of your images folder:
$editor->imageDir = "/home/drgranat/public_html/app/webroot/img/public/1/"; 
$editor->imageURL = "http://www.sendarella.com/img/public/1/"; 
// full directory path of your media folder for storing video files:
//$editor->mediaDir = "../../".$site['folder']."/media";
// url of your media folder:
//$editor->mediaURL = "http://".$site['subdomain'].".".$site['domain']."/media"; 

// File editing permissions:
//$editor->editImages = true;
//$editor->renameFiles = true;
//$editor->renameFolders = true;
//$editor->deleteFiles = true;
//$editor->deleteFolders = true;
//$editor->copyFiles = true;
//$editor->copyFolders = true;
//$editor->moveFiles = true;
//$editor->moveFolders = true;
//$editor->upload = true;
//$editor->overwrite = true;
//$editor->createFolders = true;
//
//$editor->maxMediaSize = '500 MB'; 
//
//$editor->maxImageWidth = 2560;
//$editor->maxImageHeight = 1600;
//$editor->maxImageSize = '500 MB';  
//
//$editor->disableFeatures(array('print', 'emoticon'));  

$editor->display('550', '300');
?>
	<a onclick="return confirm('Are you sure you want to reset?');" class="btn primary" style="text-decoration:none;float:right;" href="/members/revertreftext">Reset</a>

<div class="alert-message" style="width:75px; -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PART C</p></div>
	
	<label style="position:relative; top:0px;">Customize Main Message on Thank You Page (optional)</label> 

	
	<?
// include the WysiwygPro class
include_once("/home/drgranat/public_html/app/Vendor/wysiwygPro/wysiwygPro.class.php");

// create a new editor instance:
$editor = new wysiwygPro();

// give the editor a name
$editor->name = 'data[User][emailreferralcontent2]';

// set the content to be edited
$editor->value = $user['User']['emailreferralcontent2'];

$editor->iframeDialogs = false;

$editor->upload = true;

//$editor->baseURL = "http://".$site['subdomain'].".".$site['domain']."/"; 
//$editor->addStylesheet ("http://".$site['subdomain'].".".$site['domain']."/css/style.css");

//$editor->urlFormat = "absolute";

// Full file path of your images folder:
$editor->imageDir = "/home/drgranat/public_html/app/webroot/img/public/1/"; 
$editor->imageURL = "http://www.sendarella.com/img/public/1/"; 
// full directory path of your media folder for storing video files:
//$editor->mediaDir = "../../".$site['folder']."/media";
// url of your media folder:
//$editor->mediaURL = "http://".$site['subdomain'].".".$site['domain']."/media"; 

// File editing permissions:
//$editor->editImages = true;
//$editor->renameFiles = true;
//$editor->renameFolders = true;
//$editor->deleteFiles = true;
//$editor->deleteFolders = true;
//$editor->copyFiles = true;
//$editor->copyFolders = true;
//$editor->moveFiles = true;
//$editor->moveFolders = true;
//$editor->upload = true;
//$editor->overwrite = true;
//$editor->createFolders = true;
//
//$editor->maxMediaSize = '500 MB'; 
//
//$editor->maxImageWidth = 2560;
//$editor->maxImageHeight = 1600;
//$editor->maxImageSize = '500 MB';  
//
//$editor->disableFeatures(array('print', 'emoticon'));  

$editor->display('550', '300');
?>

	<a onclick="return confirm('Are you sure you want to reset?');" class="btn primary" style="text-decoration:none;float:right;" href="/members/revertthanktext">Reset</a>

<div class="alert-message" style="width:75px; -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PART D</p></div>
	
	<label style="position:relative; top:0px;">Customize Referral Email Message (optional)</label> 

<?php
		echo $this->Form->input('emailreferralsubject', array('label' => '<b>Subject</b>', 'style' => 'width:100%;font-size:14px;'));
	?>	
	
	<?php
		echo $this->Form->input('emailreferralcontent3', array('label' => '', 'style' => 'width:100%;font-size:14px;'));
	?>	
	
	<a onclick="return confirm('Are you sure you want to reset?');" class="btn primary" style="text-decoration:none;float:right;" href="/members/revertrefemail">Reset</a>

<div class="alert-message" style="width:75px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PART E</p></div>

	<label style="position:relative; top:0px;">Give the prospective patient a bonus for signing up? (optional)</label> 

	<? 		echo $this->Form->input('emailreferralgift', array('style'=>'width:100px;','label' => '', 'type' => 'select', 'options' => array('No', 'Yes'))); ?>

<script src="/js/jquery.boxy.js"></script>
<link href="/css/boxy.css" rel="stylesheet" type="text/css" />
<input style="position:relative;right:-300px;" type="button" onclick="new Boxy('#cert1', {title: 'Gift Certificate'});" value="Edit Gift Certificate">

<div id="cert1" style="display:none;background-image:url(/img/Certificate-01.png);width:930px;height:449px;margin:0px;padding:0px;padding-top:100px;">
<input type="text" style="position:relative;top:35px;left:720px;padding:0px;" id="certamount" name="data[User][certamount]" value="<?=$user['User']['certamount'];?>" size="4"><br>
<p style="position:relative;top:85px;left:300px;">Person's Name</p><br>
<input type="text" style="padding:0px;position:relative;top:40px;left:600px;font-size:16px;" name="data[User][certgift]" value="<?=$user['User']['certgift'];?>" size="19"><br>
<input type="text" style="padding:0px;position:relative;top:58px;left:147px;font-size:13px;" name="data[User][certclinic]" value="<?=$user['User']['certclinic'];?>" size="45"><br>
<input type="text" style="padding:0px;position:relative;top:35px;left:540px;font-size:16px;font-size:16px;" name="data[User][certphone]" value="<?=$user['User']['certphone'];?>" size="14"><br>
<input type="text" style="padding:0px;position:relative;left:222px;top:52px;font-size:16px;" name="data[User][certdoctor]" value="<?=$user['User']['certdoctor'];?>" size="28"><br>
<p style="position:relative;left:235px;top:80px;">Patient Name</p><br>
<input type="text" style="padding:0px;position:relative;left:309px;top:95px;font-size:16px;" name="data[User][certdate]" value="<?=$user['User']['certdate'];?>" size="14"><br>
<? if ($user['User']['certdisc'] == '') {$user['User']['certdisc'] = 'THIS GIFT CERTIFICATE MAY ONLY BE REDEEMEED BY THE ORIGINAL RECIPIENT. ONLY ONE REDEMPTION PER VISIT. EXPIRES IN ONE YEAR. NOT VALID WITH OTHER OFFERS, DISCOUNTS OR CERTIFICATES. NO CHANGE WILL BE GIVEN ON REDEMPTION.';} ?>
<textarea style="padding:0px;position:relative;left:180px;top:135px;font-size:8px;" name="data[User][certdisc]" rows="2" cols="135"><?=$user['User']['certdisc'];?></textarea><br>

</div>


</div>

	<div class="alert-message" style="width:75px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PART F</p></div>	
		
		<?php
			
		echo $this->Form->input('Activate', array('label' => 'Activate the Email Referral Function', 'id' => 'emailactivate', 'type' => 'submit'));
		
	?>

		
				
				<!--<iframe scrolling="no" style="float:right;" frameborder="0" width="550" height="1050" src="/members/formstep1">
				</iframe>-->


		</div>


<br>
<div class="well" style="width:600px;min-height:850px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #2</p></div>
<label style="position:relative; top:-10px;">Print Referral Function (optional)</label> 
		<img src="/img/print6.png">

	<iframe scrolling="no" style="float:right;" frameborder="0" width="500" height="800" src="/members/formstep2">
				</iframe>
				</div>
<br>



		<div class="well" style="width:600px;min-height:1300px;">
<div class="alert-message" style="float:left; margin-bottom:-30px; width:75px;position:relative; top:-30px; right:35px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">STEP #3</p></div>
<label style="position:relative; top:-10px;">Mobile Refer a friend function</label>
<img src="/img/texts6.png">
				
				<iframe scrolling="no" style="float:right;" frameborder="0" width="500" height="1300" src="/members/form">
				</iframe>
				
				<img src="/img/help.png" style="position:relative;left:465px;top:930px;" id="helpbutton9" style="cursor:pointer;">
<p id="help9" style="display:none; margin-left:40px;"><br><br><br><br><br><br><br><br>Here you will find a series of messages designed to ask your patients for an introduction to the people they know. Pick the message that you feel is best suited and schedule the date that you would like it to go out on.  You may change the offers in each series of messages to what will best suite your needs.  Within each message you will be required to pick an available keyword, for example "health123".  This word will be texted to 72727 by a potential patient. You will now have their phone number, so that you can begin marketing to them through text.</p>

</div>



</div>







</div>

<script>

$(function() {
	$('#emailactivate').click(function(e) {
		e.preventDefault();
		$('#emailreferralform').append($('#cert1').clone());
		$('#emailreferralform').submit();
	});
	
	$('#close-button').click(function() {
		$('#info-div').css('display', 'none');
		$('.guider').css('display', 'none');
	});
	
	$('#clinic-info').click(function() {
		$('#patients-div').css('display', 'none');
		$('#email-div').css('display', 'none');
		$('#mobile-div').css('display', 'none');
		$('#print-div').css('display', 'none');
		$('#preview-div').css('display', 'none');
		//$('#clinic-div').css('display', 'block');
		$('#clinic-div').slideDown('slow');
		$('#referral-div').css('display', 'none');
	});

	$('#setup-email').click(function() {
		$('#patients-div').css('display', 'none');	
		$('#email-div').slideDown('slow');
		$('#mobile-div').css('display', 'none');
		$('#print-div').css('display', 'none');
		$('#preview-div').css('display', 'none');
		$('#clinic-div').css('display', 'none');
		$('#referral-div').css('display', 'none');
	});

	$('#setup-mobile').click(function() {
		$('#patients-div').css('display', 'none');
		$('#email-div').css('display', 'none');
		$('#mobile-div').slideDown('slow');
		$('#print-div').css('display', 'none');
		$('#preview-div').css('display', 'none');
		$('#clinic-div').css('display', 'none');
		$('#referral-div').css('display', 'none');
	});
	
	$('#setup-print').click(function() {
		$('#patients-div').css('display', 'none');
		$('#email-div').css('display', 'none');
		$('#mobile-div').css('display', 'none');
		$('#print-div').slideDown('slow');
		$('#preview-div').css('display', 'none');
		$('#clinic-div').css('display', 'none');
		$('#referral-div').css('display', 'none');
	});
	
	$('#preview-newsletter').click(function() {
		$('#patients-div').css('display', 'none');
		$('#email-div').css('display', 'none');
		$('#mobile-div').css('display', 'none');
		$('#print-div').css('display', 'none');
		$('#preview-div').slideDown('slow');
		$('#clinic-div').css('display', 'none');
		$('#referral-div').css('display', 'none');
	});

	$('#manage-patients').click(function() {
		$('#patients-div').slideDown('slow');
		$('#email-div').css('display', 'none');
		$('#mobile-div').css('display', 'none');
		$('#print-div').css('display', 'none');
		$('#preview-div').css('display', 'none');
		$('#clinic-div').css('display', 'none');
		$('#referral-div').css('display', 'none');
	});
	$('#setup-referral').click(function() {
		$('#referral-div').slideDown('slow');
		$('#email-div').css('display', 'none');
		$('#mobile-div').css('display', 'none');
		$('#print-div').css('display', 'none');
		$('#preview-div').css('display', 'none');
		$('#clinic-div').css('display', 'none');
		$('#patients-div').css('display', 'none');
	});

});


</script>


		<!-- 1. Add these JavaScript inclusions in the head of your page -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/highcharts.js"></script>
		
		<!-- 1a) Optional: add a theme file -->
		<!--
			<script type="text/javascript" src="../js/themes/gray.js"></script>
		-->
				
		
		<!-- 2. Add the JavaScript to initialize the chart on document ready -->
		<script type="text/javascript">
		
			var chart;
			$(document).ready(function() {
				chart = new Highcharts.Chart({
					chart: {
						renderTo: 'chart',
						defaultSeriesType: 'column'
					},
					title: {
						text: 'Usage Statistics'
					},
					subtitle: {
						text: ''
					},
					xAxis: {
						categories: [
							'Jan', 
							'Feb', 
							'Mar', 
							'Apr', 
							'May', 
							'Jun', 
							'Jul', 
							'Aug', 
							'Sep', 
							'Oct', 
							'Nov', 
							'Dec'
						]
					},
					yAxis: {
						min: 0,
						title: {
							text: 'Messages Sent'
						}
					},
					legend: {
						layout: 'vertical',
						backgroundColor: '#FFFFFF',
						align: 'left',
						verticalAlign: 'top',
						x: 100,
						y: 70,
						floating: true,
						shadow: true
					},
					tooltip: {
						formatter: function() {
							return ''+
								this.x +': '+ this.y +' mm';
						}
					},
					plotOptions: {
						column: {
							pointPadding: 0.2,
							borderWidth: 0
						}
					},
				        series: [{
						name: 'Email',
						data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
				
					}, {
						name: 'Text',
						data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]
				
					}, {
						name: 'Print',
						data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]
				
					}]
				});
				
				
			});
				
		</script>

<div class="alert-message block-message info" id="chart1" style="background-color: #FFFFFF; padding:0px; width: 500px; height: 400px;">
	<div id="chart" style="width:498px;height:390px;"></div>
</div>
<div class="alert-message block-message info" style="background-color: #FFFFFF;height:375px;width:385px;float:right; position:relative; top:-420px;margin-right:55px;">
<center><h2>Account Information</h2></center><br>
<span style="float:right;"><b>Auto Email <? if ($user['User']['emailauto1'] == 1) {echo "ON";} else {echo "OFF";} ?><b><br>
<b>Auto Mobile <? if ($user['User']['mobileauto1'] == 1) {echo "ON";} else {echo "OFF";} ?><b><br>
<b>Auto Print <? if ($user['User']['printauto'] == 1) {echo "ON";} else {echo "OFF";} ?><b><br>
</span>
Account Status: <b>Active</b><br><br>

Last Payment: $127.95<br><br>
Next Payment: $98.00<br>
Due On: August 7th<br><br>

<b><u>Current Month Usage Stats</u></b><br>
Texts Sent: 758<br>
Emails Sent: 128<br>
Mailers Sent: 58<br><br>

<b><u>Extra Usage Charges</u></b><br>
Mobile: $0.00<br>
Email: $17.32<br>
Print: $28.00<br>


</div>
