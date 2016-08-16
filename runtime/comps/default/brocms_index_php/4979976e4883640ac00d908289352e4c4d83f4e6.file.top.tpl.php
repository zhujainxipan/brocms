<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:38:20
         compiled from "./home/views/default/user/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48711595957b27c9c7cb021-85761477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4979976e4883640ac00d908289352e4c4d83f4e6' => 
    array (
      0 => './home/views/default/user/top.tpl',
      1 => 1318668178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48711595957b27c9c7cb021-85761477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'res' => 0,
    'root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27c9c883fd5_70777701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27c9c883fd5_70777701')) {function content_57b27c9c883fd5_70777701($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
	<div id="top">
			<div class="left">
				<a target="_top" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_SESSION['id'];?>
"><img  border="0" border="0" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/logo.gif"></a><?php if ($_SESSION['isLogin']){?>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_top" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/admin.php/index/index">进入管理平台</a><?php }?>
			</div>

		
			<div class="right_tool">
					<ul>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/index/index" target="_top"><img border=0 src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/exit4.gif"></a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login/logout" onclick="return confirm('你确定要退出系统吗？')" target="_top"><img border=0 src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/exit3.gif"></a></li>
					</ul>
			</div>
			<div class="right_user">
				<b>欢迎您-</b><a target="_top" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_SESSION['id'];?>
"><?php echo $_SESSION['username'];?>
</a> &nbsp;&nbsp;
			</div>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>