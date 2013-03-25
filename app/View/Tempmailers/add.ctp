<div class="emails form">
<?php echo $this->Form->create('Tempmailer', array('type' => 'file'));?>
	<fieldset>
		<legend><?php echo __('Add Mailer'); ?></legend>
	<?php
			echo $this->Form->input('name');
	
?><label for="EmailTextContent">Mailer Content</label><?
// include the WysiwygPro class
include_once("/home/drgranat/public_html/app/Vendor/wysiwygPro/wysiwygPro.class.php");

// create a new editor instance:
$editor = new wysiwygPro();

// give the editor a name
$editor->name = 'data[Tempmailer][content]';

// set the content to be edited
$editor->value = '';

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
		echo $this->Form->input('scheduledon', array('label' => 'Scheduled On', 'type' => 'date'));
		echo $this->Form->input('mailertype', array('label' => 'Type', 'type' => 'select', 'options' => array('Newsletter With Envelope','Newsletter Without Envelope', 'Postcard')));
		echo $this->Form->input('worddoc', array('label' => 'Upload Word Version', 'type' => 'file'));
		echo $this->Form->input('insert', array('label' => 'Upload Optional Insert', 'type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>