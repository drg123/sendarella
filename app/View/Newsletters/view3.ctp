<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Email Template - Classic</title>
<style type="text/css">
a:hover { text-decoration: underline !important; }
#article-text p { text-align:left;font-size: 16px; line-height: 22px; font-family: Georgia, 'Times
 New Roman', Times, serif; color: #333; margin: 0px; }

</style>
</head>

<body marginheight="" topmargin="0" marginwidth="0" style="margin: 0px;margin-top:-50px;" leftmargin="0">
<!--100% body table-->
<table cellspacing="0" border="0" cellpadding="0" width="100%">
  <tr>
    <td>
	<!--top links-->
   <!--header-->
   <table style="background:url(); background-repeat: no-repeat; background-position: center;" width="684" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td valign="top" width="50">
		
		<!--ribbon<table border="0" cellspacing="0" cellpadding="0">
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
	</table>ribbon-->
		</td>
		<td valign="middle" width="493"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td height="60"></td>
			</tr>
			<tr>
				<td><? if ($user['User']['pic'] == 1) { ?><br>
				<img style="float:left;margin-left:-50px;margin-right:50px;" src="http://www.sendarella.com/img/public/<?=$user['User']['id'];?>/profile.jpg" width="100">
				<p style="margin-left:-150px;float:left;font-size:10px;"><br><br><br><br><br><br><br><?=$user['User']['clinicdocname'];?></p><? } ?>
				
				<img src="http://www.sendarella.com/img/vitality.png" width="500">
				</td>
			</tr>
			<tr>
				<td height="40">
				</td>
			</tr>
		</table>
		<!--date-->
		<table border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td width="107">&nbsp;</td>
		<td valign="top" align="center" bgcolor="#312c26" background="http://www.sendarella.com/newsletters/images/date-bg.jpg" width="357" height="42">
		
        <p style="font-size: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #ffffff; margin-top: 0px; margin-bottom: 0px;">Issue <? echo $email['Newsletter']['issue']; ?>: <? echo $email['Newsletter']['month']; ?> <? echo $email['Newsletter']['year']; ?>

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
    <table id="maintbl" bgcolor="" cellspacing="0" border="0" align="center" cellpadding="30" width="684">
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
<!--    
    <div style="width:100%;float:right;">
<img src="http://backinmotionspringgrove.com/clients/3323/images/Sonia_01.jpg" alt="image dsc" style="border: solid 1px #FFF; box-shadow: 2px 2px 6px #33
3; -webkit-box-shadow: 2px 2px 6px #333; -khtml-box-shadow: 2px 2px 6px #333; -moz-box-shadow: 2px 2px 6px #333;" width="250" /><br>
<b>Dr. Sonia Kwapisinski</b><br><br>
<h3>Back In Motion Physical Therapy & Spine Center</h3>
<p>2900 Us Hwy 12 Suite J<br>
Spring Grove, IL 60081<br>

Phone: 815-675-0699<br>
Fax: 815-675-0689 </p>

</div>
-->	
<? foreach ($email['Article'] as $article) {
        if ($article['cover'] != 0) {
	        
	       $thecontent = strip_tags($article['content'], "<p>");
	       $pos = intval(strlen($thecontent) / 2);
	       while ($thecontent[$pos] != " ") { $pos++; }
	       $column1 = substr($thecontent, 0, $pos);
	       $column2 = substr($thecontent, $pos+1);



        
 ?>
<span id="article-text">
    <h1 style="font-size: 36px; font-weight: normal; color: #333333; font-family: Georgia, 'Times New Roman', Times, serif; margin-top: 0px; margin-bottom: 20px;"><? echo $article['headline']; ?></h1>

<table width="100%" cellpadding="10"><tr valign="top">
<td width="50%"><p style="font-size: 16px; line-height: 22px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 0px;text-align:left;"><? echo $column1; ?></p></td>

<td width="50%"><p style="font-size: 16px; line-height: 22px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 0px;text-align:left;"><? echo $column2; ?></p></td>
</tr></table>
<br></span>
 </td>
  </tr>
</table><!--/section 1-->
<? }} ?>
<!--line break
  <table cellspacing="0" border="0" cellpadding="0" width="100%">
  <tr>
    <td height="72"><img src="http://www.sendarella.com/newsletters/images/line-break-2.jpg" width="622" height="72">
    </td>
  </tr>
</table>/line break-->
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
<span id="article-text">
    <h1 style="font-size: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333333; margin-top: 0px; margin-bottom: 12px;"><? echo $article['headline']; ?></h1>
    <p style="font-size: 16px; line-height: 22px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 0px;"><? echo strip_tags($article['content'], "<p>"); ?></p>
</span>    
</td>

  </tr>
</table>
<? if ($i != $len - 1) { ?>
	<!--line break
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td valign="bottom" height="50"><img src="http://www.sendarella.com/newsletters/images/line-break.jpg" width="622" height="27"></td>
	</tr>
</table>/line break-->
<?php }} $i++; }  ?>
  <!--<table cellspacing="0" border="0" cellpadding="0" width="100%">
  <tr>
    <td height="72"><img src="http://www.sendarella.com/newsletters/images/line-break-2.jpg" width="622" height="72">
    </td>
  </tr>
</table>/line break-->
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
<!--  <tr>
    <td valign="top">
    <p style="font-size: 14px; line-height: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #b0a08b; margin: 0px;">
	You’re receiving this newsletter because you’ve subscribed to our newsletter<br> 
    Not interested anymore? <unsubscribe style="color: #bc1f31; text-decoration: none;" href="#">Unsubscribe instantly.</unsubscribe></p>
    </td>
    <td valign="top"><p style="font-size: 14px; line-height: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #b0a08b; margin: 0px;">Newism
    178 King Street Newcastle 
    NSW, Australtia 2300</p></td>
  </tr>-->
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

