<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:38:20
         compiled from "./home/views/default/user/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123250342657b27c9c3fd438-77102241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b434fad4e45e82c352119a0c53c2d3031d99068' => 
    array (
      0 => './home/views/default/user/index.tpl',
      1 => 1318130970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123250342657b27c9c3fd438-77102241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27c9c46c495_49483845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27c9c46c495_49483845')) {function content_57b27c9c46c495_49483845($_smarty_tpl) {?><html>
	<head>
		<title>用户中心</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="Author" content="高洛峰，细说PHP" />
	</head>

	<frameset rows="61,*" cols="*" framespacing="0" frameborder="no" border="0">
 		<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/top" name="top" scrolling="no" noresize="noresize" />
		<frameset cols="280, *">
  			<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu/uid/<?php echo $_GET['uid'];?>
" name="menu" noresize="noresize" scrolling="no" />
			
			<?php if ($_GET['message']==1){?>					
				<frame src="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/index/uid/<?php echo $_GET['uid'];?>
" name="main" noresize="noresize" scrolling="yes"/>
			<?php }else{ ?>
				<frame src="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/dynamic/index/uid/<?php echo $_GET['uid'];?>
" name="main" noresize="noresize" scrolling="yes"/>
			<?php }?>
  		
		</frameset>
	</frameset>
</html>


<?php }} ?>