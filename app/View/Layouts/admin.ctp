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
	});
	
	</script>
	<?php
		//echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('main');

		echo $scripts_for_layout;
	?>
	
	<style>
	#main-menu ul li {
		width: 100px;
	}
	</style>
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
				<li><a href="/admin">Home</a></li>
				<li><a href="/admin/users">Users</a>
				<ul>
				<li><a href="/admin/pricing">Pricing</a></li>
				</ul>

				</li>
				<li><a href="/admin/emails">Emails</a>
				</li>
				<li><a href="/admin/texts">Texts</a>
				<ul>
				<li><a href="/admin/textreferrals">Referral Texts</a></li>
				</ul>

				</li>
				<li><a href="/admin/mailers">Print</a></li>
				<li><a href="/admin/autoresponder">CakeMail</a></li>
				<li><a href="/admin/newsletters">Newsletters</a></li>
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