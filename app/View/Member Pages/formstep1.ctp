<?php echo $this->Form->create('Textfollowup', array("type" => "file", "action" => "add2"));?>
<div class="input select">
<div class="alert-message" style="width:65px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;">PART A</p></div>


					<?php
		echo $this->Form->input('textseries', array('label' => 'Turn on Email referral function (optional)', 'type' => 'select', 'options' => array('Yes', 'No')));
	?>	
	
			<img src="/img/help.png" style="float:right;position:relative; top:-25px;" id="helpbutton3" style="cursor:pointer;">
		<p id="help3" style="display:none; margin-left:40px;">If this function is turned on, a special button will appear within the newsletter which will read "Refer a Friend".  This will allow your patients when reading the newsletter,  the option of entering  email addresses of their family or friends, so they may start receiving the newsletter as well.</p>

<div class="alert-message" style="width:65px; -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;">PART B</p></div>
	
	<label style="position:relative; top:-10px;">Customize Main Message on Referral Page (optional)</label> 

	
	<?
// include the WysiwygPro class
include_once("/home/drgranat/public_html/app/Vendor/wysiwygPro/wysiwygPro.class.php");

// create a new editor instance:
$editor = new wysiwygPro();

// give the editor a name
$editor->name = 'data[Email][html_content]';

// set the content to be edited
$editor->value = '';

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



<div class="alert-message" style="width:65px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;">PART C</p></div>

	<label style="position:relative; top:-10px;">Give the prospective patient a bonus for signing up? (optional)</label> 

	<? 		echo $this->Form->input('emailreferral', array('style'=>'width:100px;','label' => '', 'type' => 'select', 'options' => array('Yes', 'No'))); ?>

<script src="/js/jquery.boxy.js"></script>
<link href="/css/boxy.css" rel="stylesheet" type="text/css" />
<input style="position:relative;right:-300px;" type="button" onclick="new Boxy('#cert1', {title: 'Gift Certificate'});" value="Edit Gift Certificate">

<div id="cert1" style="display:none;background-image:url(/img/Certificate-01.png);height:449px;margin:0px;padding:0px;padding-top:100px;">
<input type="text" style="position:relative;top:35px;left:720px;padding:0px;" value="<?=$user['User']['certamount'];?>" size="4"><br>
<p style="position:relative;top:85px;left:300px;">Person's Name</p><br>
<input type="text" style="padding:0px;position:relative;top:40px;left:600px;font-size:16px;" value="30 Minute Massage" size="19"><br>
<input type="text" style="padding:0px;position:relative;top:58px;left:147px;font-size:13px;" value="Back In Motion Physical Therapy and Spine Center" size="45"><br>
<input type="text" style="padding:0px;position:relative;top:35px;left:540px;font-size:16px;font-size:16px;" value="1(815) 675-0699" size="14"><br>
<input type="text" style="padding:0px;position:relative;left:222px;top:52px;font-size:16px;" value="Sonia Kwapisinski" size="28"><br>
<p style="position:relative;left:235px;top:80px;">Patient Name</p><br>
<input type="text" style="padding:0px;position:relative;left:309px;top:95px;font-size:16px;" value="07/05/2012" size="14"><br>
</div>


</div>

	<div class="alert-message" style="width:65px;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;">
<p style="font-weight:bold;margin-right:0px;">PART D</p></div>	
		
		<?php
			
		echo $this->Form->input('Activate', array('label' => 'Activate the Email Referral Function', 'type' => 'submit'));
		
	?>

		
</div>	
