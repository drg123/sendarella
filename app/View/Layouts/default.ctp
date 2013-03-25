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
	<script src="/js/jquery.cookie.js"></script>
	<script>
	$(function(){
//		$('input[type="submit"]').click(function() {
//			$("#overlay").fadeIn("fast");				
//			$("#spinner").fadeIn("fast");	
//		});
		
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
	<div id="container">
		<div id="top-bg">
			<div style="background-image: url('/img/header-bg.png'); height: 309px; margin: 0pt auto; max-width: 1280px; position: relative; z-index: -1;"></div>
		</div>
		  	<div class="main-content">
		<div id="main-header"><img style="position:relative; z-index:1;" src="/img/Sendarella2-test-2.png" /></div>
		<div id="main-menu">
			<ul>
				<li><a href="/members">Home</a></li>
				<li><a href="/members/patients">Patients</a>
					<ul><li><a href="/members/patients/import">Import</a></li>
					<li><a href="/members/groups">Groups</a></li></ul>
				</li>
				<li><a href="/members/emails">Emails</a>
					<ul>
						<li><a href="/members?email=1">Settings</a></li>
						<li><a href="/members/followups">Follow Ups</a></li>
						<li><a href="/members/emails/advanced">Advanced</a></li>
					</ul>
				</li>
				<li><a href="/members/texts">Texts</a>
					<ul>
						<li><a href="/members?mobile=1">Settings</a></li>
						<li><a href="/members/textfollowups">Follow Ups</a></li>
						<li><a href="/members/texts/appointments">Appointments</a></li>
						<li><a href="/members/texts/advanced">Advanced</a></li>
					</ul>
				</li>
				<li><a href="/members/mailers">Print</a>
					<ul>
						<li><a href="/members?print=1">Settings</a></li>
					</ul>
				
				</li>
				<li><a href="http://support.sendarella.com/">Support</a>
				<ul>
						<li><a href="/members/videos">Help Videos</a></li>
					</ul>
				</li>
				<li><a href="/members/account">Your Account</a>
					<ul>
						<li><a href="/members/account/password">Password</a></li>
						<li><a href="/members/account/billing">Billing</a></li>
						<li><a href="/logout">Log Out</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="content-frame">
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>	
	</div>
	<div id="footer">
		<div id="footer-bg">
    		<div class="footer-content">
				<div class="left">
					<a href="">
						2012 &copy; Sendarella.com
					</a>
				</div>
				<div class="right">
					<a href="/">Home</a> | 
					<a href="/pricing">Pricing</a> | 
					<a href="/features">Features</a> |
					<a href="/joinnow">Join Now</a> | 
					<a href="/contactus">Contact Us</a>	|		
					<a href="/login">Login</a>			
				</div>
			</div>
		</div>
	</div>
</div>
		

<div id="spinner">
</div>
<div id="overlay">
</div>
		
		
		
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>