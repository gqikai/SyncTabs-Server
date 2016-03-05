<?php /* Smarty version Smarty-3.1.6, created on 2016-03-05 16:54:41
         compiled from "../Tpl/User/regist.html" */ ?>
<?php /*%%SmartyHeaderCode:153438556356da9ed171bd53-91347991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75bc917b8698a8cb21794cd117ab0813d45ef9c2' => 
    array (
      0 => '../Tpl/User/regist.html',
      1 => 1444734619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153438556356da9ed171bd53-91347991',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56da9ed17a5d3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56da9ed17a5d3')) {function content_56da9ed17a5d3($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="registDiv">
<form method="post" action="<?php echo @INDEX_URL;?>
User/regist">
<fieldset>
<legend>注册</legend>
<table width=100%<?php ?>>
	<tbody>
		<tr>
			<td>姓 名：</td>
			<td><input type="text" name="user_name" value="zhangSan"></td>
		</tr>
		<tr>
			<td>密 码：</td>
			<td><input type="password" name="user_pass" value="111111" /></td>
		</tr>
		<tr>
			<td>确认密码：</td>
			<td><input type="password" name="user_pass2" value="111111" /></td>
		</tr>
		<tr>
			<td>验证码：</td>
			<td><input type="text" name="captcha" value="111111" /></td>
			<td><img src="<?php echo @__URL__;?>
/captcha" alt="captcha" title="title" /></td>
		</tr>
		<tr>
			<td>邮箱：</td>
			<td><input type="text" name="email" value="zhangSan@126.com" /></td>
		</tr>
		<tr>
			<td><input type="submit" name="regist"/></td>
		</tr>
	</tbody>
</table>
</fieldset>
</form>
</div>

</body>
</html>
<?php }} ?>