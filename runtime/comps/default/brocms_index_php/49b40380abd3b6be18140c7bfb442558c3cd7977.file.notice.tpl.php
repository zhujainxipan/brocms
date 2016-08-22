<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 14:21:08
         compiled from "./home/views/default/index/notice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20769055657b2b0d46a8a71-16416794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49b40380abd3b6be18140c7bfb442558c3cd7977' => 
    array (
      0 => './home/views/default/index/notice.tpl',
      1 => 1319344262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20769055657b2b0d46a8a71-16416794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b2b0d47206d1_70824038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b2b0d47206d1_70824038')) {function content_57b2b0d47206d1_70824038($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/annuoaichengzhang/developspace/phpdev/brocms/brophp/libs/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<div class="article">
		<div class="dt"><div>系统公告</div></div>		
        	
		<div class="dd">
			<div id="title">
				<div class="nav"> </div>
				<h1><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['notice']->value['title'],100);?>
</h1>
				<div class="nav"> </div>
			</div>
		
			<div class="nav"> </div>
			<div id="ccont">
				<?php echo $_smarty_tpl->tpl_vars['notice']->value['content'];?>

			</div>
			<div class="nav"> </div>
		<div>	
	</div>
	</div>
	<div class="nav"> </div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>