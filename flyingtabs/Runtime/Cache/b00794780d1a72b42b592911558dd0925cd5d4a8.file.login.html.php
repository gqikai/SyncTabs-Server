<?php /* Smarty version Smarty-3.1.6, created on 2016-03-01 19:45:17
         compiled from "../Tpl/User/login.html" */ ?>
<?php /*%%SmartyHeaderCode:100542475456d580cd59acf2-88719620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b00794780d1a72b42b592911558dd0925cd5d4a8' => 
    array (
      0 => '../Tpl/User/login.html',
      1 => 1445852580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100542475456d580cd59acf2-88719620',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d580cd5f60e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d580cd5f60e')) {function content_56d580cd5f60e($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="loginDiv">
<form method="post" action="<?php echo @INDEX_URL;?>
User/login">
<fieldset>
<legend>登陆</legend>
<table width=100%<?php ?>>
	<tbody>
		<tr>
			<td>姓 名：</td>
			<td><input type="text" id="loginUsername" name="user_name"
				value="zhangSan"></td>
		</tr>
		<tr>
			<td>密 码：</td>
			<td><input id="loginPassword" type="password" name="user_pass"
				value="111111" /></td>
		</tr>
		<tr>
			<td><input type="submit" name="login"/></td>
		</tr>
	</tbody>
</table>
</fieldset>
</form>
</div>

</body>
</html>
<?php }} ?>