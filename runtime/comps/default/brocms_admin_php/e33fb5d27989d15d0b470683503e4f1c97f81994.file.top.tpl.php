<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:30:47
         compiled from "./admin/views/default/index/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121473458957b27ad70ef266-44240963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e33fb5d27989d15d0b470683503e4f1c97f81994' => 
    array (
      0 => './admin/views/default/index/top.tpl',
      1 => 1319674900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121473458957b27ad70ef266-44240963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'root' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27ad7170a46_25576865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27ad7170a46_25576865')) {function content_57b27ad7170a46_25576865($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
	<div id="top">
			<div class="left">
				<a herf="index.php"><img  border="0" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/logo.gif"></a>
			</div>

		
			<div class="right_tool">
					<ul>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/index.php" target="_top"><img border=0 src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/exit4.gif"></a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login/logout" onclick="return confirm('你确定要退出系统吗？')" target="_top"><img border=0 src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/exit3.gif"></a></li>
					</ul>
			</div>
			<div class="right_user">
				<b>欢迎您-</b><a title="<?php echo $_SESSION['description'];?>
" target="_top" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/index.php/user/index/uid/<?php echo $_SESSION['id'];?>
"><?php echo $_SESSION['username'];?>
</a>&nbsp;【<?php echo $_SESSION['groupname'];?>
】 &nbsp;&nbsp;
			</div>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>