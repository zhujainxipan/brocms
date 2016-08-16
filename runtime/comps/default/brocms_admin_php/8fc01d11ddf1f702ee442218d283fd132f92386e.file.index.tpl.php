<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:30:07
         compiled from "./admin/views/default/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131467919657b27aafa0bfb1-81745533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fc01d11ddf1f702ee442218d283fd132f92386e' => 
    array (
      0 => './admin/views/default/index/index.tpl',
      1 => 1318119724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131467919657b27aafa0bfb1-81745533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27aafa69da9_04623270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27aafa69da9_04623270')) {function content_57b27aafa69da9_04623270($_smarty_tpl) {?><html>
	<head>
		<title>《细说PHP》CMS管理平台</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="Author" content="高洛峰，细说PHP" />
	</head>

	<frameset rows="61,*,24" cols="*" framespacing="0" frameborder="no" border="0">
 		<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/top" name="top" scrolling="no" noresize="noresize" />
		<frameset cols="200, *">
  			<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu" name="menu" noresize="noresize" scrolling="no" />
  			<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/main" name="main" noresize="noresize" scrolling="yes"/>
		</frameset>
  		<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/bottom" name="bottom" scrolling="No" noresize="noresize" />
	</frameset>
</html>


<?php }} ?>