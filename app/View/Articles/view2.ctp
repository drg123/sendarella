<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Email Template - Classic</title>
<style type="text/css">
a:hover { text-decoration: underline !important; }
#article-text p {padding-bottom:10px; text-align:left;font-size: 16px; line-height: 22px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 0px; }
</style>
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
		<p style="font-size: 14px; font-family: Georgia, 'Times New Roman', Times, serif; color: #ffffff; margin-top: 0px; margin-bottom: 0px;">ISSUE</p>
		</td>
	</tr>
	<tr>
		<td valign="top" align="center">
		<p style="font-size: 36px; font-family: Georgia, 'Times New Roman', Times, serif; color: #ffffff; margin-top: 0px; margin-bottom: 0px; text-shadow: 1px 1px 1px #333;"><? echo $email['Newsletter']['issue']; ?>
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
			<img src="/img/vitality.png" width="500">
				</td>
			</tr>
		</table>
		<!--date-->
		<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td valign="top" align="center" bgcolor="#312c26" background="/newsletters/images/date-bg.jpg" width="357" height="42">
		<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td height="5"></td></tr></table>
        <p style="font-size: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #ffffff; margin-top: 0px; margin-bottom: 0px;"><? echo $email['Newsletter']['month']; ?> <? echo $email['Newsletter']['year']; ?>

</p>
		</td>
	</tr>
	</table><!--/date-->
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
	
<h1 style="font-size: 36px; font-weight: normal; color: #333333; font-family: Georgia, 'Times New Roman', Times, serif; margin-top: 0px; margin-bottom: 20px;"><? echo $email['Article']['headline']; ?></h1>
<br>
<img src="/img/public/articles/<?=$email['Article']['id'];?>.jpg" alt="image dsc" style="border: solid 1px #FFF; box-shadow:
 2px 2px 6px #333; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box
-shadow: 2px 2px 6px #333; float:right; margin-left:20px; margin-bottom:20px;" width="216" />
<span id="article-text">
  <? echo strip_tags($email['Article']['content'], '<p><a>'); ?>
</span>   
 </td>
  </tr>
</table><!--/section 1-->
<div align="right">
<table border="0" cellspacing="0" cellpadding="0">
        <tr>
                <td valign="top" align="center" bgcolor="#312c26" background="/newsletters/images/date-bg2.png" width="357" height="42">
                <table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td height="5"></td></tr></table>
        <p style="font-size: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #ffffff; margin-top: 0px; margin-bottom: 0px;"><a href="http://www.sendarella.com/newsletter/<?=$user['User']['id'];?>/<?=$email['Newsletter']['id'];?>" style="color: #FFFFFF; text-decoration: none;">BACK TO ARTICLES</a>

</p>
                </td>
        </tr>
        </table>
</div>
<table cellspacing="0" border="0" cellpadding="0" width="100%">
  <tr>
    <td height="72"><img src="/newsletters/images/line-break-2.jpg" width="622" height="72">
    </td>
  </tr>
</table><!--/line break-->
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
    <td valign="top"><p style="font-size: 14px; line-height: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #b0a08b; margin: 0px;">Newism
    <?=$user['User']['address'];?>
    <?=$user['User']['city'];?>, <?=$user['User']['state'];?> <?=$user['User']['zip'];?></p></td>
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

