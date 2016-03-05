<?php /* Smarty version Smarty-3.1.6, created on 2016-03-05 20:40:35
         compiled from "../Tpl/Index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:146396226656da94b189cd63-40615540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '777c2ed7fd7d4cfeb4daf47419010663696c9c9c' => 
    array (
      0 => '../Tpl/Index/index.html',
      1 => 1457181630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146396226656da94b189cd63-40615540',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56da94b18efbd',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56da94b18efbd')) {function content_56da94b18efbd($_smarty_tpl) {?><!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<!--<head>-->
	<!--<title>FlyingTabs</title>-->
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<!--</head>-->

<!--<frameset rows="10%,90%">-->
<!--<frame src="<?php echo @INDEX_URL;?>
/Index/head">-->
<!--<frame src="<?php echo @INDEX_URL;?>
/Index/body" name="body">-->
<!--</frameset>-->

<!--</html>-->

<!DOCTYPE html>
<html>
<head>
	<title>SyncTabs</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo @CSS_URL;?>
/bootstrap.css">
	<script src="<?php echo @JS_URL;?>
/jquery-1.11.1.js"></script>
	<script src="<?php echo @JS_URL;?>
/bootstrap.js"></script>
	<link rel="stylesheet" href="<?php echo @CSS_URL;?>
/main.css">
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<a class="navbar-brand" href="#">LOGO</a>
	</div>
	<div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">注册</a></li>
			<li><a href="#">登录</a></li>
		</ul>
	</div>
</nav>


<div class="login panel panel-primary">
	<div class="panel-heading"><em>LOGIN </em>登陆</div>
	<div class="form panel-body">
		<form id="loginForm" action="#">
			<ul>
				<li>
					<span>用户名：</span>
					<input id='login_name' class="text" value='zhangSan' type="text">
					<label>
						<input type="checkbox">
						<strong>记住我</strong>
					</label>
				</li>
				<li>
					<span>密&nbsp;&nbsp;&nbsp;码：</span>
					<input id='login_pass' class="text" type="password" value='111111' >
					<input  id="loginButton" class="btn" type="button" value="登陆">
				</li>
			</ul>
		</form>
	</div>
	<p>
		<a id="toRegist" href="#">新用户注册</a>
		<a href="#">忘记密码</a>
	</p>
</div>


<div class="sync panel panel-default" >
	<div class="panel-heading"><em>SYNC </em>同步标签  welcome,<em id="username"></em>
		<a id='logout' href=''>logout</a>
	</div>
	<ul class="tabList list-group">
		<li>
			<div class="tab_info list-group-item">
				<img src="https://reg.jd.com/favicon.ico">
				<div>
					<a class="title" href="#">狗东</a>
					<p>www.jd.com</p>
				</div>
			</div>
		</li>
	</ul>
	<p>
		<a href="#">查看同步历史记录</a>
	</p>
</div>

</body>
</html><?php }} ?>