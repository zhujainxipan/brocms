<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:32:52
         compiled from "./admin/views/default/base/sysinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48902737757b27b54a77ad5-44132585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f007ae145ec170e6c6a704fccfc4dd4bae8eb6e' => 
    array (
      0 => './admin/views/default/base/sysinfo.tpl',
      1 => 1308903824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48902737757b27b54a77ad5-44132585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sysinfo' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27b54aebc25_41451290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27b54aebc25_41451290')) {function content_57b27b54aebc25_41451290($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="head-dark-box">
			<div class="tit">系统管理>常规设置>系统信息</div>
		</div>	
		<?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="msg-box">
			<ul class="viewmess">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sysinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['info']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['info']['iteration']++;
?>
					<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['info']['iteration'])){?>
						<li class="dark-row">
					<?php }else{ ?>
						<li class="light-row">
					<?php }?> 
						<span class="col_width"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['item']->value;?>

					</li>
				<?php } ?>
			</ul>		
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>