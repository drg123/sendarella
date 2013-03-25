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
		})
	});
	
	</script>
		<script type="text/javascript" src="https://js.stripe.com/v1/"></script>
        <!-- jQuery is used only for this example; it isn't required to use Stripe -->
        <script type="text/javascript">
            // this identifies your website in the createToken call below
            Stripe.setPublishableKey('pk_EaF4OmCwswDN8GWIf6Ivx0NsqCy3Y');

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    // re-enable the submit button
                    $('.submit-button').removeAttr("disabled");
                    // show the errors on the form
                    //$(".payment-errors").html(response.error.message);
                    //alert(response.error.message);
                    form$.get(0).submit();
                } else {
                    var form$ = $("#payment-form");
                    // token contains id, last4, and card type
                    var token = response['id'];
                    alert(token);
                    // insert the token into the form so it gets submitted to the server
                    form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                    // and submit
                    form$.get(0).submit();
                }
            }

            $(document).ready(function() {	            
                $("#paymednt-form").submit(function(event) {
                    // disable the submit button to prevent repeated clicks
                    $('.submit-button').attr("disabled", "disabled");
                    var chargeAmount = 1000; //amount you want to charge, in cents. 1000 = $10.00, 2000 = $20.00 ...
                    // createToken returns immediately - the supplied callback submits the form if there are no errors
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, chargeAmount, stripeResponseHandler);
                    return false; // submit from callback
                });
            });
        </script>
	<?php
		//echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('main');

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
				<li><a href="/">Home</a></li>
				<li><a href="/pricing">Pricing</a></li>
				<li><a href="/features">Features</a></li>
				<li><a href="/joinnow">Join Now</a></li>
				<li><a href="/contactus">Contact Us</a></li>
				<li id="login"><a href="/login">Member Login</a></li>
			</ul>
		</div>
		<div class="content-frame">
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>	
	</div>
	<div class="body-gray">
		<div class="body-gray-content">
			<div class="dashed-frame">
				<a href="/joinnow"><img class="order-button" src="/img/newsletter-order-button.png" /></a>
				<img src="/img/cc-visa.png" />
				<img src="/img/cc-amex.png" />
				<img src="/img/cc-discover.png" />
				<img src="/img/cc-mastercard.png" />
				<img src="/img/cc-paypal.png" />
				<img src="/img/cc-secure.png" />
			</div>
			<img class="guarantee" src="/img/satisfaction-guarantee.png">
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