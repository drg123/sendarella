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


<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Your Billing Information'); ?></legend>
		<div class="input text">
			<label for="CardNumber">Card Number</label>
			<input class="card-number" size="20" autocomplete="off" type="text" id="CardNumber"/>
		</div>
		<div class="input text">
			<label for="CVC">CVC</label>
			<input class="card-cvc" size="4" autocomplete="off" type="text" id="CVC"/>
		</div>
		<div class="input text">
			<label>Expiration (MM/YYYY)</label>
            <input type="text" size="2" class="card-expiry-month"/>
            <span> / </span>
            <input type="text" size="4" class="card-expiry-year"/>
        </div>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
