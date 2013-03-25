<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
    <fieldset style="width:400px; margin:auto;">
        <legend>Please enter your username and password</legend>
    <div class="input text required">
    	<label for="UserUsername" style="font-weight:bold;">Username</label><br>
    	<input style="width:300px;" name="data[User][username]" maxlength="255" type="text" id="UserUsername"/>
    </div>
    <br>
    <div class="input password required">
    	<label for="UserPassword" style="font-weight:bold;">Password</label><br>
    	<input style="width:300px;" name="data[User][password]" type="password" id="UserPassword"/>
    </div>

<div class="submit"><br><br>
<center><input type="submit" value="Login" style="font-size: 18px;"></center>
</div>
    </fieldset>
</div>
</form>

<br><br>

<div class="users form">
<form action="/resetpassword" id="UserLoginForm2" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>
    <fieldset style="width:400px; margin:auto;">
        <legend>Forgot your password?</legend>
    <div class="input text required">
    	<label for="UserUsername" style="font-weight:bold;">Username</label><br>
    	<input style="width:300px;" name="data[User][username2]" maxlength="255" type="text" id="UserUsername2"/>
    </div>

<div class="submit"><br><br>
<center><input type="submit" value="Reset Your Password" style="font-size: 18px;"></center>
</div>
    </fieldset>
</div>
