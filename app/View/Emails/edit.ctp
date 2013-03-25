<div class="emails form">
<?php echo $this->Form->create('Email');?>
	<fieldset>
		<legend><?php echo __('Edit Broadcast Email'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('subject');
		echo $this->Form->input('text_content');
?><label for="EmailTextContent">HTML Content</label><?
// include the WysiwygPro class
include_once("/home/drgranat/public_html/app/Vendor/wysiwygPro/wysiwygPro.class.php");

// create a new editor instance:
$editor = new wysiwygPro();

// give the editor a name
$editor->name = 'data[Email][html_content]';

// set the content to be edited
$editor->value = $email['Email']['html_content'];

$editor->iframeDialogs = true;

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

$editor->display('800', '500');

		echo $this->Form->input('scheduledon');
		echo $this->Form->input('group_id', array('empty' => 'All'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>