<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Email Template - Classic</title>
<style type="text/css">
.c1 {height:100px; background-image: url(http://www.sendarella.com/newsletters/images/header-bg.jpg); background-repeat: no-repeat; background-position: center; background-color: #fffdf9;text-align: center;}
.c2 {float:right; width:40px; height: 60px; background-image: url(http://www.sendarella.com/img/BlueRibbon.jpg);background-repeat: no-repeat;}
</style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px;" leftmargin="0">



<div class="c1">
<div style="background-color:red;" class="c2">ISSUE<br>1</div>

<h1 style="padding-top: 20px; color: #333; margin-top: 0px; margin-bottom: 0px; font-weight: normal; font-size: 36px; font-family: Georgia, 'Times New Roman', Times, serif">
Healthology<br>
</h1>

</div>


<? foreach ($email['Article'] as $article) {
        if ($article['cover'] != 0) {
 ?>
<span id="article-text">
    <h1 style="font-size: 36px; font-weight: normal; color: #333333; font-family: Georgia, 'Times New Roman', Times, serif; margin-top: 0px; margin-bottom: 20px;"><? echo $article['headline']; ?></h1>
<p style="font-size: 16px; line-height: 22px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 0px;text-align:left;"><? echo strip_tags($article['content'], "<p>"); ?></p>
<br></span>
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
<span id="article-text">
    <h1 style="font-size: 24px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333333; margin-top: 0px; margin-bottom: 12px;"><? echo $article['headline']; ?></h1>
    <p style="font-size: 16px; line-height: 22px; font-family: Georgia, 'Times New Roman', Times, serif; color: #333; margin: 0px;"><? echo strip_tags($article['content'], "<p>"); ?></p>
</span>    
</td>
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

</body>
</html>

