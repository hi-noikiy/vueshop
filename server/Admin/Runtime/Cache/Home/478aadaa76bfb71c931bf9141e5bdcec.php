<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><title>左侧菜单</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/admin/css/admin.css" rel="stylesheet" type="text/css" />
<link href="/Public/admin/css/left.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/admin/js/jquery.js" ></script>
</head>
<body>

<div id="tabbar-div">
<p><span title="折叠全部" class="tab-front" id="menu-tab" > <img id="toggleImg" src="/Public/admin/images/menu_minus.gif" width="9" height="9" border="0" />
&nbsp;&nbsp;&nbsp;功能菜单</span>
</p></div>

    <div id="main-div">
        <div id="menu-list">
            <ul>
              <li class="explode" name="menu">
                <div class="menu" title="menu">图片管理</div>
                <ul>
                	<li class="menu-item"><a href="/hadmin.php/Home/AdGroup" target="mainframe">添加图片分组</a></li>
                      <li class="menu-item"><a href="/hadmin.php/Home/AdManage/manage" target="mainframe">添加图片</a></li>
                </ul>
              </li>
            </ul>
        </div>
    </div>
</div>

<script language="JavaScript">
<!--
jQuery("#menu-tab").click(function(){
	if( jQuery("#toggleImg").attr("src") == "/Public/admin/images/menu_minus.gif" ){
		jQuery(this).attr("title","展开全部");
		jQuery("#toggleImg").attr("src","/Public/admin/images/menu_plus.gif").attr("title","展开全部");
		jQuery("li[name='menu']").attr("class","collapse").children("ul").slideUp("fast");
	}else{
		jQuery(this).attr("title","折叠全部");
		jQuery("#toggleImg").attr("src","/Public/admin/images/menu_minus.gif").attr("title","折叠全部");
		jQuery("li[name='menu']").attr("class","explode").children("ul").slideDown("fast");
	}
});
jQuery(".menu").click(function(){
	if( jQuery(this).parent().attr("class") == "explode" ){
		jQuery(this).parent().attr("class","collapse").children("ul").slideUp("fast");
	}else{
		jQuery(this).parent().attr("class","explode").children("ul").slideDown("fast");
	}
});
$(".explode").find("a").click(function(){
	$(".explode").find("a").removeClass("blogfont");
	$(this).addClass("blogfont");
});
//-->
</script>
</body>
</html>