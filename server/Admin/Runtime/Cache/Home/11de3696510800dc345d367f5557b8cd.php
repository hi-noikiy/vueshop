<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>城市管理</title>
<link href="/Public/admin/css/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/admin/js/jquery.js" ></script>
<script type="text/javascript">
function CheckAll(form)
{
  for (var i=0;i<form.elements.length;i++)
    {
    var e = form.elements[i];
    if (e.Name != "chkAll"&&e.disabled!=true)
       e.checked = form.chkAll.checked;
    }
}
function check(){
	if (document.form1.title.value.match(/^\s*$/)){
		alert ("请输入评价项目名称");
		document.form1.title.focus();
		return false;
	}
}
</script>
</head>

<body>
<div id="spacemenu"></div>
<div class="alterdiv"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="38%" align="center" valign="top">
    	<div id="leftdiv">
        	<div id="titlediv">添加评价项目</div>
            <div id="formdiv">
            <form name="form1" id="form1" method="post" action="/hadmin.php/Home/Reviewsmanage/add" onsubmit="return check()">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="green" style="margin-top:40px;">
  <tr>
  <td width="33%" height="40" align="right">名称：</td>
  <td width="67%"><input name="title" id="title" class="htinputcss" value="" type="text"></td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="提交" class="addbtn" />&nbsp;&nbsp;
      <input type="reset" name="button2" id="button2" value="重置" class="resbtn" /></td>
  </tr>
</table>
</form>
            </div>
        </div>
    </td>
    <td width="62%" valign="top">
    	<div id="ldiv_search"></div>
        <div id="lnk_listdiv">
        <form name="form2" id="form2" method="post" action="/hadmin.php/Home/Reviewsmanage/del">
        	<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#e2e2e2" class="backfont">
  <tr bgcolor="#f7f7f7">
    <td width="10%" height="28" align="center"><input type="checkbox" onclick="CheckAll(this.form)" name="chkAll" value="checkbox" /></td>
    <td align="center">标题名称</td>
    <td width="10%" align="center">排序</td>
    <td width="11%" align="center">管理</td>
  </tr>
<?php if(is_array($datalist)): $i = 0; $__LIST__ = $datalist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr bgcolor="#FFFFFF" onmouseover="this.style.backgroundColor='#f7f7f7'" onmouseout="this.style.background='#FFFFFF'">
    <td height="52" align="center"><input type="checkbox" name="del[]" value="<?php echo ($vo["id"]); ?>" /></td>
    <td align="center"><?php echo ($vo['title']); ?></td>
    <td align="center"><input name="num[]" type="text" id="num[]" class="htinputcss" style="width:50px;" size="5" value="<?php echo ($vo["num"]); ?>" />
  <input name="numid[]" type="hidden" id="numid[]"  value="<?php echo ($vo["id"]); ?>" /></td>
    <td align="center"><a href="/hadmin.php/Home/Reviewsmanage/edit?id=<?php echo ($vo["id"]); ?>&page=<?php echo ($page); ?>" class="edit">修改</a></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  <tr bgcolor="#FFFFFF">
    <td height="52" colspan="4" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="delbtn" id="delbtn" class="delbtn" value="删除" onclick="return confirm('确认要删除吗？')" />&nbsp;&nbsp;
      <input type="button" name="button4" id="button4" class="orderbtn" value="修改排序" onClick="this.form.action='/hadmin.php/Home/Reviewsmanage/order';this.form.submit()" onFocus="this.blur()" /></td>
    </tr>
</table>
</form>
        </div>
        <div id="pagediv">
        	<?php echo ($getpage); ?>
        </div>
    </td>
  </tr>
</table>
</body>
</html>