<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title>
<link href="/vueshopserver/Public/admin/css/font.css" rel="stylesheet" type="text/css" />
<link href="/vueshopserver/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/vueshopserver/Public/admin/js/check.js"></script>
<script type="text/javascript" src="/vueshopserver/Public/admin/js/common.js"></script>
</head>

<body>
<div class="background"><img src="/vueshopserver/Public/admin/images/in_bg.jpg" width="100%" height="100%" alt="" /></div>
<div class="header">
    <div class="in_top">
        <div id="logo"><div class="logofont">电商系统</div></div>
        <div id="in_menu" class="linkwhite white"></div>
    </div>
</div>
<div class="main">
	<div class="logindiv">
    <form name="loginform" action="/vueshopserver/hadmin.php/Home/Index/index/action/login" method="post" onsubmit="return check()">
    	<div class="ldivtop">
        	<div class="ldivtopfont white26"><strong>电商系统后台管理系统</strong></div>
        </div>
        <div class="ldivcen">
        	<div class="ldivcen2">
            
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:20px;">
<tr>
<td height="62">
  <div class="in_inputdiv"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="12%" height="41" align="center"><img src="/vueshopserver/Public/admin/images/user_icon.jpg" /></td>
<td width="88%" valign="middle"><input type="text" name="username" id="username" class="in_input gray14" value="账号" onFocus="this.value=''" onblur='if (value ==""){value="账号"}' /></td>
</tr>
</table>
  </div></td>
</tr>
<tr>
<td height="62"><div class="in_inputdiv"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="12%" height="41" align="center"><img src="/vueshopserver/Public/admin/images/pwd_icon.jpg" /></td>
<td width="88%" valign="middle"><input type="password" name="password" id="password" class="in_input gray14" value="******" onFocus="this.value=''" onblur='if (value ==""){value="******"}' /></td>
</tr>
</table>
  </div></td>
</tr>
<tr>
<td height="38" class="gray14">验证码：<input type="text" name="vdcode" id="vdcode" />&nbsp;&nbsp;<img src="/vueshopserver/hadmin.php/Home/Index/chkcode" alt="看不清楚，换一张" style="cursor: pointer;vertical-align:middle;" onClick="javascript: newgdcode(this,'/vueshopserver/hadmin.php/Home/Index/chkcode');" /></td>
</tr>
</table>
<div class="in_line"></div>
            </div>
        </div>
        <div class="ldivf">
        	<div class="ldivf2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td height="47" align="center" valign="top"><input type="image" name="imageField" id="imageField" src="/vueshopserver/Public/admin/images/loginbotton.png" /></td>
</tr>
</table></div>
        </div>
        </form>
    </div>
</div>
<div class="in_footer">
	<div class="in_foot">
    	<div class="in_footfont white linkwhite">Copyright © 2017 电商系统 .All Rights Reserved  </div>
    </div>
</div>
</body>
</html>