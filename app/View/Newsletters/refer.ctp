<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Email Template - Classic</title>
<style type="text/css">
a:hover { text-decoration: underline !important; }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
</script>
<script>
$(function() {
	$('#sender').click(function(e) {
		e.preventDefault();
		$('#ref').submit();
	});
	
});
</script>

<script src="/js/jquery.boxy.js"></script>
<link href="/css/boxy.css" rel="stylesheet" type="text/css" />
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f7f2e4;" bgcolor="#f7f2e4" leftmargin="0">
<!--100% body table-->
<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f7f2e4">
  <tr>
    <td>
	<!--top links-->
   <!--header-->
   <table style="background:url(/newsletters/images/header-bg.jpg); background-repeat: no-repeat; background-position: center; background-color: #fffdf9;" width="684" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td valign="top" width="173">
		<!--ribbon-->
		<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td height="120" width="45"></td>
		<td background="/img/BlueRibbon.png" valign="top" height="120" width="80">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td valign="bottom" align="center" height="35">
		<p style="font-size: 14px; font-family: Georgia, 'Times New Roman', Times, serif; color: #ffffff; margin-top: 0px; margin-bottom: 0px;"><br>REFER<br>
		<img style="margin-top:15px;" src='/img/1338960077_keditbookmarks.png'></p>
		</td>
	</tr>
	<tr>
		<td valign="top" align="center">
		<p style="font-size: 36px; font-family: Georgia, 'Times New Roman', Times, serif; color: #ffffff; margin-top: 0px; margin-bottom: 0px; text-shadow: 1px 1px 1px #333;">
</p>
		</td>
	</tr>
</table>
		</td>
	</tr>
	</table><!--ribbon-->
		</td>
		<td valign="middle" width="493"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td height="60"></td>
			</tr>
			<tr>
				<td>
				<h1 style="color: #333; margin-top: 0px; margin-bottom: 0px; font-weight: normal; font-size: 48px; font-family: Georgia, 'Times New Roman', Times, serif">
&nbsp;&nbsp;Refer A Friend
</h1>
				</td>
			</tr>
			<tr>
				<td height="40">
				</td>
			</tr>
		</table>

		</td>
		<td width="18"></td>
	</tr>
</table>
	</td>
    </tr>
</table><!--/header-->
    <!--email container-->
    <table bgcolor="#fffdf9" cellspacing="0" border="0" align="center" cellpadding="30" width="684">
  <tr>
    <td>
    <!--email content-->
    <table cellspacing="0" border="0" id="email-content" cellpadding="0" width="624">
  <tr>
    <td>
    <!--section 1-->
    <table cellspacing="0" border="0" cellpadding="0" width="100%">
  <tr>
    <td valign="top" align="center">
	
   
<? if ($user['User']['id'] == 9) {?> 
%%CLINICINFO%%
<? } 

else if (($user['User']['logo'] == 1) && ($user['User']['pic'] == 1)) { ?> 
<div style="width:311px;float:right;">
<img src="http://www.sendarella.com/img/public/<?=$user['User']['id'];?>/logo.jpg?<?=rand(1,99999);?>" alt="image dsc" style="max-height:300px;border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="300" />
<h3><?=$user['User']['clinicname'];?></h3>
<p><?=$user['User']['clinicaddress'];?><br>

Phone: <?=$user['User']['clinicphone'];?><br></p>

</div>
<div style="float:left;">
<img src="http://www.sendarella.com/img/public/<?=$user['User']['id'];?>/profile.jpg?<?=rand(1,99999);?>" alt="image dsc" style="border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="200" />
<br>
<b><?=$user['User']['clinicdocname'];?></b>
</div>

<? } 

else if ($user['User']['logo'] == 1) { ?> 

<div style="width:100%;float:right;">
<img src="http://www.sendarella.com/img/public/<?=$user['User']['id'];?>/logo.jpg?<?=rand(1,99999);?>" alt="image dsc" style="max-height:300px;border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="600" />
<h3><?=$user['User']['clinicname'];?></h3>
<p><?=$user['User']['clinicaddress'];?><br>

Phone: <?=$user['User']['clinicphone'];?><br></p>
</div>

<? } else if ($user['User']['pic'] == 1) { ?>

<div style="width:100%;float:right;">
<img src="http://www.sendarella.com/img/public/<?=$user['User']['id'];?>/profile.jpg?<?=rand(1,99999);?>" alt="image dsc" style="border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="250" /><br>
<b><?=$user['User']['clinicdocname'];?></b><br><br>
<h3><?=$user['User']['clinicname'];?></h3>
<p><?=$user['User']['clinicaddress'];?><br>

Phone: <?=$user['User']['clinicphone'];?><br></p>

</div>
<? } ?>
</td>
        </tr>
        </table>
</div>   
 </td>
  </tr>
</table><!--/section 1-->
<!--line break-->
  <table cellspacing="0" border="0" cellpadding="0" width="100%">
  <tr>
    <td height="72"><img src="/newsletters/images/line-break-2.jpg" width="622" height="72">
    </td>
  </tr>
</table><!--/line break-->
 <!--section 3-->
    <table cellspacing="0" border="0" cellpadding="0" width="100%">
  <tr>
    <td>

<table cellspacing="0" border="0" cellpadding="0" width="100%" style="background:url(/img/border.png);padding:60px;">
  <tr>
    <td valign="top" width="100%">
    <h1 style="font-size: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333333; margin-top: 0px; margin-bottom: 12px;"></h1>
    <p style="font-size: 16px; line-height: 22px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 0px;">
    <?=$user['User']['emailreferralcontent'];?>
    <br><br>
    
</p>
    </td>
  </tr>
</table>

 
 
 
 
 
 
 <form id="ref" action="/refer/send/<?=$user['User']['id'];?>" method="post">
 
 <table width="300" border="0" cellspacing="0" cellpadding="3">
              <tr>
                <td width="130">
                  <strong>Your Name: </strong>
                </td>

                <td width="170">
                  <label>
                    <input name="txtName" type="text" value="" maxlength="100" id="txtName" style="width:150px;" />
                  </label>
                </td>
              </tr>
              <tr>
                <td>
                  <strong>Your Email Address: </strong>

                </td>
                <td>
                  <input name="txtEmail" type="text" value="" maxlength="100" id="txtEmail" style="width:150px;" /></td>
              </tr>
            </table>
            
            <table width="550" border="0" cellspacing="0" cellpadding="3" style="margin-top: 30px">
              <tr><td width="30"></td>

                <td width="160">
                  <strong>
                    Friend's Name
                  </strong>
                </td>
                <td width="160">
                  <strong>Friend's Email Address</strong>
                </td>
                <td width="160">

                  Friend's Phone Number
                </td>
              </tr>
              <tr>
                <td>
                  <img src="images/rf1.gif" alt="1" width="20" height="20" /></td>
                <td>
                  <input name="txtName1" type="text" value=""maxlength="100" id="txtName1" style="width:150px;" /></td>
                <td>

                  <input name="txtEmail1" type="text" value="" maxlength="100" id="txtEmail1" style="width:150px;" /></td>
                <td>
                  <input name="txtPhone1" type="text" maxlength="20" id="txtPhone1" style="width:120px;" /></td>
              </tr>
              <tr>
                <td>
                  <img src="images/rf2.gif" alt="2" width="20" height="20" /></td>
                <td>
                  <input name="txtName2" type="text" value="" maxlength="100" id="txtName2" style="width:150px;" /></td>

                <td>
                  <input name="txtEmail2" type="text" value="" maxlength="100" id="txtEmail2" style="width:150px;" /></td>
                <td>
                  <input name="txtPhone2" type="text" value="" maxlength="20" id="txtPhone2" style="width:120px;" /></td>
              </tr>
              <tr>
                <td>
                  <img src="images/rf3.gif" alt="3" width="20" height="20" /></td>
                <td>

                  <input name="txtName3" type="text" value="" maxlength="100" id="txtName3" style="width:150px;" /></td>
                <td>
                  <input name="txtEmail3" type="text" maxlength="100" value="" id="txtEmail3" style="width:150px;" /></td>
                <td>
                  <input name="txtPhone3" type="text" maxlength="20" id="txtPhone3" style="width:120px;" /></td>
              </tr>
            </table>
            <p align="right">
            </p>
          </div>
          
        </td>
      </tr>
      <tr><td></td>
      </tr>
    </table>
 
 
 
<center>  <table border="0" cellspacing="0" cellpadding="0">
        <tr>
                <td valign="top" align="center" bgcolor="#312c26" background="/newsletters/images/date-bg2.png" width="357" height="42">
                <table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td height="5"></td></tr></table>
        <p style="font-size: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #ffffff; margin-top: 0px; margin-bottom: 0px;">
        <a href="#" id="sender" style="color: #FFFFFF; text-decoration: none;">CLICK HERE TO SEND</a>

</p>

                </td>
                
        </tr>
        </table><br><br>        
        <input style="font-size:18px;" type="button" onclick="new Boxy('#cert1', {title: 'Gift Certificate'});" value="Preview Gift Certificate">
<!--<img src="/img/Certificate-01.png" width="600">-->

        </form>
</center>

    </td>
  </tr>
</table><!--/section 3-->
    </td>
  </tr>
</table><!--/email content-->
    </td>
  </tr>
</table><!--/email container-->
<!--footer-->
    <table width="680" border="0" align="center" cellpadding="30" cellspacing="0">
  <tr>
    <td valign="top">
    <p style="font-size: 14px; line-height: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #b0a08b; margin: 0px;">
	You’re receiving this newsletter because you’ve subscribed to our newsletter<br> 
    Not interested anymore? <unsubscribe style="color: #bc1f31; text-decoration: none;" href="#">Unsubscribe instantly.</unsubscribe></p>
    </td>
    <td valign="top"><p style="font-size: 14px; line-height: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #b0a08b; margin: 0px;">
</p></td>
  </tr>
  <tr>
  	<td height="30"></td>
  	<td height="30"></td>
  	</tr>
	</table><!--/footer-->
    </td>
  </tr>
</table><!--/100% body table-->
</body>
</html>

<div id="cert1" style="background-image:url(/img/Certificate-01.png);width:930px;height:449px;margin:0px;padding:0px;padding-top:100px; display:none;">
<p style="position:relative;top:25px;left:720px;padding:0px;"><?=$user['User']['certamount'];?></p>
<p style="position:relative;top:65px;left:300px;">Patient Name</p>
<p style="padding:0px;position:relative;top:30px;left:600px;font-size:16px;"><?=$user['User']['certgift'];?></p>
<p style="padding:0px;position:relative;top:38px;left:147px;font-size:13px;"><?=$user['User']['certclinic'];?></p>
<p style="padding:0px;position:relative;top:5px;left:540px;font-size:16px;font-size:16px;"><?=$user['User']['certphone'];?></p>
<p style="padding:0px;position:relative;left:222px;top:2px;font-size:16px;"><?=$user['User']['certdoctor'];?></p>
<p style="position:relative;left:235px;top:10px;">Your Name</p>
<p style="padding:0px;position:relative;left:309px;top:35px;font-size:16px;"><?=$user['User']['certdate'];?></p>


<p style="padding:0px;position:relative;left:209px;top:35px;font-size:10px;width:600px;"><?=$user['User']['certdisc'];?></p>

</div>


