<?php echo $this->Form->create('User', array("type" => "file", "action" => "update3"));?>

<input type="hidden" name="inframe" value="1">
<div class="input select">
<div class="alert-message" style="width:75px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PART A</p></div>


					<?php
		echo $this->Form->input('textseries', array('label' => 'Turn on Print referral function (optional)', 'type' => 'select', 'options' => array('Yes', 'No')));
	?>	
	
			<img src="/img/help.png" style="float:right;position:relative; top:-25px;" id="helpbutton3" style="cursor:pointer;">
		<p id="help3" style="display:none; margin-left:40px;">If this function is turned on, a special button will appear within the newsletter which will read "Refer a Friend".  This will allow your patients when reading the newsletter,  the option of entering  email addresses of their family or friends, so they may start receiving the newsletter as well.</p>

<div class="alert-message" style="width:75px; -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PART B</p></div>
	
<label style="position:relative; top:-10px;left:-25;">Upload your Referral Insert (Optional)</label>

Note: You can have up to 2 one-sheet(up to 2 page) Inserts in a Print Mailer. This referral insert can be one of them.<br><br>
<?	
		echo $this->Form->input('firstinsert', array('style'=>'', 'label' => '', 'type' => 'file'));
		?>
	
	
<a target="_blank" href="/inserts/<?=$id;?>-1.doc" class="btn primary" style="width:140px;text-decoration:none;margin-left:300px;float:right;">Preview Current Insert</a>
		
<div class="alert-message" style="width:75px; -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PART C</p></div>
	
<label style="position:relative; top:-10px;left:-25;">Choose a color for the insert</label>
	<?
		echo $this->Form->input('auto', array('style' => 'width:100px;float:right; position:relative;right:265px;', 'label' => '', 'type' => 'select', 'options' => array('Red', 'Blue', 'Green')));
	?>
	
	<img src="/img/help.png" id="helpbutton14" style="position:relative;left:450px;top:10px;cursor:pointer;">
<p id="help14" style="display:none; margin-left:30px;">After your newsletters are printed, you have two choices.  If you select the first choice, then we will mail the newsletters for you, to the list of patients that you have specified. If you select the second choice, we print your newsletters for you and send them directly to you at the address you specify, and you will do your own mailing. </p>
	
	
	<div class="alert-message" style="width:75px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;font-family: Arial Black;">PART D</p></div>	

<?php echo $this->Session->flash(); ?>
		
		<?php
			
		echo $this->Form->input('Activate', array('label' => 'Activate the Print Referral Function', 'type' => 'submit'));
		
	?>

		
</div>	

