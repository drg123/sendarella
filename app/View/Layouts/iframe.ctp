<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Sendarella:
		<?php echo $title_for_layout; ?>
	</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>
	$(function(){
		$('input[type="submit"]').click(function() {
			$("#overlay").fadeIn("fast");				
			$("#spinner").fadeIn("fast");	
		});
		
		$(window).unload(function() {
			$("#overlay").fadeOut("fast");				
			$("#spinner").fadeOut("fast");
		});

		$("#textgroup1").change(function() {
			document.location.href="/members/texts/group/"+$("#textgroup1").val();
		});
	
		$("#textgroup2").change(function() {
			document.location.href="/members/texts/group/"+$("#textgroup2").val();
		});
		
		$("#mailgroup1").change(function() {
			document.location.href="/members/mailers/group/"+$("#mailgroup1").val();
		});
	
		$("#mailgroup2").change(function() {
			document.location.href="/members/mailers/group/"+$("#mailgroup2").val();
		});

		$("#emailgroup1").change(function() {
			document.location.href="/members/emails/group/"+$("#emailgroup1").val();
		});
	
		$("#emailgroup2").change(function() {
			document.location.href="/members/emails/group/"+$("#emailgroup2").val();
		});

		$("#followupgroup").change(function() {
			document.location.href="/members/followups/group/"+$("#followupgroup").val();
		});

		$("#textfgroup").change(function() {
			document.location.href="/members/textfollowups/group/"+$("#textfgroup").val();
		});

	});
	
	</script>
	<?php
		//echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('main');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('guiders');

		echo $scripts_for_layout;
	?>
</head>
<body>


			<?php echo $content_for_layout; ?>
</body>
</html>