<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!--web newsletter template-->
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Email Template - Classic</title>
<style type="text/css">
a:hover { text-decoration: underline !important; }
</style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f7f2e4;" bgcolor="#f7f2e4" leftmargin="0">
<!--100% body table-->
<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f7f2e4">
  <tr>
    <td>
	<!--top links-->
   <!--header-->
   <table style="background:url(http://www.sendarella.com/newsletters/images/header-bg.jpg); background-repeat: no-repeat; background-position: center; background-color: #fffdf9;" width="684" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td valign="top" width="173">
		<!--ribbon-->
		<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td height="120" width="45"></td>
		<td background="http://www.sendarella.com/img/BlueRibbon.png" valign="top" height="120" width="80">
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
				<img src="http://www.sendarella.com/img/vitality.png" width="500">
				</td>
			</tr>
		</table>
		<!--date-->
		<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td valign="top" align="center" bgcolor="#312c26" background="http://www.sendarella.com/img/GreyBar.png" width="357" height="42">
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
	
<?

$count = 0;
 foreach ($email['Article'] as $article) {

        if (($article['cover'] != 0) && ($count == 0)) {
        $count = 1;
	       
        
 ?>
 
<? if ($user['User']['id'] == 1) {?> 
%%CLINICINFO%%
<? } 

else if (($user['User']['logo'] == 1) && ($user['User']['pic'] == 1)) { ?> 
<div style="width:311px;float:right;">
<img src="http://www.sendarella.com/img/public/<?=$user['User']['id'];?>/logo.jpg" alt="image dsc" style="max-height:300px;border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="300" />
<h3><?=$user['User']['clinicname'];?></h3>
<p><?=$user['User']['clinicaddress'];?><br>

Phone: <?=$user['User']['clinicphone'];?><br></p>

</div>
<div style="float:left;">
<img src="http://www.sendarella.com/img/public/<?=$user['User']['id'];?>/profile.jpg" alt="image dsc" style="max-height:300px;border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="200" />
<br>
<b><?=$user['User']['clinicdocname'];?></b>
</div>

<? } 

else if ($user['User']['logo'] == 1) { ?> 

<div style="width:100%;float:right;">
<img src="http://www.sendarella.com/img/public/<?=$user['User']['id'];?>/logo.jpg" alt="image dsc" style="max-height:300px;border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="600" />
<h3><?=$user['User']['clinicname'];?></h3>
<p><?=$user['User']['clinicaddress'];?><br>

Phone: <?=$user['User']['clinicphone'];?><br></p>
</div>

<? } else if ($user['User']['pic'] == 1) { ?>

<div style="width:100%;float:right;">
<img src="http://www.sendarella.com/img/public/<?=$user['User']['id'];?>/profile.jpg" alt="image dsc" style="border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="250" /><br>
<b><?=$user['User']['clinicdocname'];?></b><br><br>
<h3><?=$user['User']['clinicname'];?></h3>
<p><?=$user['User']['clinicaddress'];?><br>

Phone: <?=$user['User']['clinicphone'];?><br></p>

</div>
<? } ?>



</td>
</tr>

<tr><td><br>
<center>  <table border="0" cellspacing="0" cellpadding="0">
        <tr>
                <td valign="top" align="center" bgcolor="#312c26" background="http://www.sendarella.com/newsletters/images/blue.png" width="357" height="42">
                <table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td height="5"></td></tr></table>
        <p style="font-size: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #ffffff; margin-top: 0px; margin-bottom: 0px;"><a href="http://www.sendarella.com/refer/<?=$user['User']['id'];?>/" style="color: #FFFFFF; text-decoration: none;">REFER A FRIEND</a>

</p>
                </td>
        </tr>
        </table>
</center>

</td></tr>

<tr><td>
<!--line break-->
  <table cellspacing="0" border="0" cellpadding="0" width="100%">
  <tr>
    <td height="72"><img src="http://www.sendarella.com/newsletters/images/line-break-2.jpg" width="622" height="72">
    </td>
  </tr>
</table><!--/line break-->

</td></tr>

<tr>
    <td valign="top" align="center">

    <h1 style="font-size: 36px; font-weight: normal; color: #333333; font-family: Georgia, 'Times New Roman', Times, serif; margin-top: 0px; margin-bottom: 20px;"><? echo $article['headline']; ?></h1>
<p style="font-size: 16px; line-height: 22px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 0px;text-align:left;"><? echo substr(strip_tags($article['content']), 0, 355); ?></p>
<br>
<div align="right">
<table border="0" cellspacing="0" cellpadding="0">
        <tr>
                <td valign="top" align="center" bgcolor="#312c26" background="http://www.sendarella.com/newsletters/images/date-bg2.png" width="357" height="42">
                <table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td height="5"></td></tr></table>
        <p style="font-size: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #ffffff; margin-top: 0px; margin-bottom: 0px;"><a href="http://www.sendarella.com/article/<?=$user['User']['id'];?>/<?=$article['id'];?>" style="color: #FFFFFF; text-decoration: none;">READ ARTICLE</a>

</p>
                </td>
        </tr>
        </table>
</div>   
 </td>
  </tr>
</table><!--/section 1-->
<? }} ?>

<!--line break-->
  <table cellspacing="0" border="0" cellpadding="0" width="100%">
  <tr>
    <td height="72"><img src="http://www.sendarella.com/newsletters/images/line-break-2.jpg" width="622" height="72">
    </td>
  </tr>
</table><!--/line break-->
 <!--section 3-->
    <table cellspacing="0" border="0" cellpadding="0" width="100%">
  <tr>
    <td>
<?php

$i = 0;
$len = count($email['Article']);

foreach ($email['Article'] as $article) {
	if ($article['cover'] != 1) {
 ?>

<table cellspacing="0" border="0" cellpadding="0" width="100%">
  <tr>
    <td valign="top" width="100%">
    <h1 style="font-size: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333333; margin-top: 0px; margin-bottom: 12px;"><? echo $article['headline']; ?></h1>
    <p style="font-size: 16px; line-height: 22px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 0px;"><? echo substr(strip_tags($article['content']), 0, 355); ?> <a style="color: #bc1f31; text-decoration: none;" href="http://www.sendarella.com/article/<?=$user['User']['id'];?>/<?=$article['id'];?>">Read more &raquo;</a></p>
    </td>
    <td valign="top" width="246"><img src="http://www.sendarella.com/img/public/articles/<?=$article['id'];?>.jpg" align="right" alt="img8" style="border: solid 1px #FFF; box-shadow: 2px 2px 6px #333; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;margin-left:15px; float: right;" width="216" /></td>
  </tr>
</table>
<? if ($i != $len - 1) { ?>
	<!--line break-->
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td valign="bottom" height="50"><img src="http://www.sendarella.com/newsletters/images/line-break.jpg" width="622" height="27"></td>
	</tr>
</table><!--/line break-->
<?php }} $i++; }  ?>
  <table cellspacing="0" border="0" cellpadding="0" width="100%">
  <tr>
    <td height="72"><img src="http://www.sendarella.com/newsletters/images/line-break-2.jpg" width="622" height="72">
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
    <table width="625" border="0" align="center" cellpadding="30" cellspacing="0">
  <tr>
    <td valign="top">
    <p style="font-size: 14px; line-height: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #b0a08b; margin: 0px;">
	You’re receiving this newsletter because you’ve subscribed to our newsletter<br> 
    Not interested anymore? <unsubscribe style="color: #bc1f31; text-decoration: none;" href="#">Unsubscribe instantly.</unsubscribe></p>
    </td>
    <td valign="top"><p style="font-size: 14px; line-height: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #b0a08b; margin: 0px;">
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

