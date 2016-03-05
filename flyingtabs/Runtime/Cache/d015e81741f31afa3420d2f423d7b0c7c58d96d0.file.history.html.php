<?php /* Smarty version Smarty-3.1.6, created on 2016-03-01 19:45:14
         compiled from "../Tpl/Tab/history.html" */ ?>
<?php /*%%SmartyHeaderCode:172316528456d580ca12c0e6-89976105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd015e81741f31afa3420d2f423d7b0c7c58d96d0' => 
    array (
      0 => '../Tpl/Tab/history.html',
      1 => 1444733894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172316528456d580ca12c0e6-89976105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'k' => 0,
    'v' => 0,
    'v1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d580ca1c2ff',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d580ca1c2ff')) {function content_56d580ca1c2ff($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/XAMPP/xamppfiles/htdocs/think/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>

<form>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<fieldset>
		<legend><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['k']->value,"%Y-%I-%d %H-%M-%S");?>
</legend>
			<table>
				<?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_smarty_tpl->tpl_vars['k1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value){
$_smarty_tpl->tpl_vars['v1']->_loop = true;
 $_smarty_tpl->tpl_vars['k1']->value = $_smarty_tpl->tpl_vars['v1']->key;
?>
				<tr>
					<td>
					<a href="<?php echo $_smarty_tpl->tpl_vars['v1']->value['url'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['v1']->value['title'];?>

					</a>
					</td>
				</tr>
				<?php } ?>
			</table>
	</fieldset>
	<?php } ?>
</form>
		
		
</body>
</html><?php }} ?>