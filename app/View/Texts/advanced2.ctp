<? if (!isset($_GET['error_code'])) {?>

<script>
$(function() {document.loginForm.submit();});
</script>

Loading...

<? } else {echo "There has been an error.";} ?>

<div id="login-box" style="display:none;">
    <H2>SMS Service Login</H2>
    <br/>
    <br/>
    <form name="loginForm" action="https://login.avidmobile.com/MarketingCenter2.0/ulogin.php" method="POST">
    	<div id="login-box-name" style="margin-top:20px;">Username:</div>
    	<div id="login-box-field" style="margin-top:20px;">
    		<input name="username" type="hidden" class="form-login" title="Username" value="sendarella<?=$username;?>" size="30" maxlength="2048" />
    	</div>
    	<div id="login-box-name">Password:</div>
    	<div id="login-box-field">
    		<input name="password" type="hidden" class="form-login" title="Password" value="<?=$password;?>" size="30" maxlength="2048" />
    	</div>
    	<br/>
    	<span class="login-box-options"></span>
    	<br/>
    	<a href="javascript:document.loginForm.submit();">
    		<img src="images/login-btn.png" width="103" height="42" style="margin-left:90px;"/>
    	</a>
    	<input type="hidden" name="action" value="submit"/>
    	<input type="hidden" name="errcallback_url" value="http://www.sendarella.com/members/texts/advanced"/>
    </form>
</div>