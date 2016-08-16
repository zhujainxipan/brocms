<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:30:07
         compiled from "./admin/views/default/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45692983157b27aafce69c4-31051085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0404bf8dee3e5050f1d32712dd416bb17022ce73' => 
    array (
      0 => './admin/views/default/login/index.tpl',
      1 => 1311414204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45692983157b27aafce69c4-31051085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27aafd37b35_69613979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27aafd37b35_69613979')) {function content_57b27aafd37b35_69613979($_smarty_tpl) {?><html>
	<head>
		<title>《细说PHP》CMS信息发布系统</title>
		<meta http-equiv="Windows-Target" content="_top" />
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="Author" content="高洛峰" />
		<meta name="Keywords" content="php,lampbrother" />
		<meta http-equiv="Windows-Target" content="_top" />
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/style.css" />
	</head>

<body class="center" onload="document.getElementById('login-form').username.focus()">
<div id="login-box">
<div id="main">
	<div class="head-dark-box">
		&nbsp;<b>《细说PHP》CMS管理平台登录</b>
	</div>

	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/prologin" id="login-form">
		<ul>	
			<li style="height:25px" class="dark-row" >
				<span class="list_width">用户名</span>
				<input type="text" class="text-box" size="15" name="username">
			</li>
			<li style="height:25px" class="light-row">
				<span class="list_width">密&nbsp;&nbsp;&nbsp;码</span>
				<input type="password" class="text-box" size="15" name="userpwd">
			</li>
			<li style="height:25px" class="dark-row">
				<span class="list_width">验证码</span>
				<input type="text" onkeyup="if (this.value != this.value.toUpperCase()) this.value=this.value.toUpperCase();"  class="text-box" size="6" name="code" />
				<img style="cursor:pointer;" alt="看不清，换一张" onclick="this.src='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/code/'+Math.random()" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/code" />
			</li>
			<li style="height:25px" class="light-row">
				<input type="hidden" name="action" value="login"> 
				<span class="list_width">&nbsp;</span>
				<input type="submit" class="button" value="登录系统" />
			</li>
		</ul>
	</form>
</div>
</div>
</body>
</html>

<?php }} ?>