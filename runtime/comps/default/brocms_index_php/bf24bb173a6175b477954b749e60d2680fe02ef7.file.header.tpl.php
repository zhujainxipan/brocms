<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:29:15
         compiled from "./home/views/default/public/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100613076657b27a7bc00493-31163456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf24bb173a6175b477954b749e60d2680fe02ef7' => 
    array (
      0 => './home/views/default/public/header.tpl',
      1 => 1321780560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100613076657b27a7bc00493-31163456',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'appname' => 0,
    'keywords' => 0,
    'description' => 0,
    'res' => 0,
    'public' => 0,
    'app' => 0,
    'mtotal' => 1,
    'serType' => 0,
    'search' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27a7bcb3c57_24500149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27a7bcb3c57_24500149')) {function content_57b27a7bcb3c57_24500149($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/annuoaichengzhang/developspace/phpdev/brocms/brophp/libs/plugins/modifier.truncate.php';
?><html>
	<head>
		<title><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['appname']->value,200);?>
</title>
		<meta name="Author" content="高洛峰" />
		<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/global.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/layout.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/print.css">
		<script src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/ajax3.0.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/common.js"></script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/win.js"></script>
		
	</head>
	<body>
		<div id="content">
			<div id="header">
				<div id="top">
					<div id="top_left">
						
						<?php if ($_SESSION['login']==1){?>
          						&nbsp;欢迎回来 <b><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_SESSION['id'];?>
"><?php echo $_SESSION['username'];?>
</a></b>&nbsp;｜&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login/logout">退出</a>&nbsp;｜&nbsp;<span class="<?php if ($_smarty_tpl->tpl_vars['mtotal']->value>0){?>mail2<?php }else{ ?>mail1<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_SESSION['id'];?>
/message/1">站内信[<span style="color:#A00"><?php echo $_smarty_tpl->tpl_vars['mtotal']->value;?>
</span>]</a></span>
						<?php }else{ ?>
						<form action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login" method="post">
							&nbsp;
							用户名:<input class="inputheight" name="username" type="text" size="10">&nbsp;
							密码:<input class="inputheight" name="userpwd" type="password" size="10">
							<input type="submit" class="button"  name="loginsubmit" value="登录">&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login/register"><span style="color:red">注册</span></a>
						</form>
						<?php }?>
						
					</div>

					<div id="top_right">
						<form action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/search/index" method="post">
							<input type="radio" <?php if ($_smarty_tpl->tpl_vars['serType']->value=="title"||$_smarty_tpl->tpl_vars['serType']->value==null){?> checked <?php }?> name="serType" value="title">标题
							<input type="radio" <?php if ($_smarty_tpl->tpl_vars['serType']->value=="content"){?> checked <?php }?> name="serType" value="content">内容
							<input type="radio" <?php if ($_smarty_tpl->tpl_vars['serType']->value=="keyword"){?> checked <?php }?> name="serType" value="keyword">关键字
							<input type="text"  name="search" size="15" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" maxlength="255">
							<input type="submit"  class="button"  value="搜索">&nbsp;
						</form>
					</div>
				</div>
				
				<div id="logo">
					<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
"><img border="0" width="200" height="80" alt="xscms_logo" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/logo.gif"></a>
				</div>
				<div id="right_box">
					<div id="banner">
						<!-- 可以在这里加入banner -->	
   						<a href="http://bbs.lampbrother.net"><img width="500" height="70" alt="banner" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/banner.gif" border=0></a>
					</div>

					<div id="tool">
						
						<ul>
							<li><a href="">用户定义</a></li>
							<li><a href="">用户定义</a></li>
							<li><a href="">用户定义</a></li>
							<li><a href="">用户定义</a></li>
						</ul>
					</div>
				</div>
				<div class="nav"> </div>
			</div>	
			<div id="menu">
				<ul>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
">网站首页</a></li><li class="menudiv"> </li>
				
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['li'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['li']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['name'] = 'li';
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total']);
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/list/index/pid/<?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['title'];?>
</a></li><li class="menudiv"> </li>
					<?php endfor; endif; ?>
					<li><a href="http://bbs.lampbrother.net" target="_blank">论坛交流</a></li>
				</ul>			
			</div>
			<div class="nav"> </div>
			<div id="container">
			

<?php }} ?>