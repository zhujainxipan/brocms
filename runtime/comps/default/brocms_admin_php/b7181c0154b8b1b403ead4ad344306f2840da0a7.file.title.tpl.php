<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:30:47
         compiled from "./admin/views/default/public/title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92343188457b27ad73bc6e1-19832658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7181c0154b8b1b403ead4ad344306f2840da0a7' => 
    array (
      0 => './admin/views/default/public/title.tpl',
      1 => 1317277912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92343188457b27ad73bc6e1-19832658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mess' => 0,
    'tmess' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27ad73e7e60_49331687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27ad73e7e60_49331687')) {function content_57b27ad73e7e60_49331687($_smarty_tpl) {?><div id="outmess" class="tip-msg <?php if ($_smarty_tpl->tpl_vars['mess']->value=="error"){?>error-msg<?php }?><?php if ($_smarty_tpl->tpl_vars['mess']->value=="ok"){?>sucess-msg<?php }?>">
	<?php echo $_smarty_tpl->tpl_vars['tmess']->value;?>
		
</div>
<?php }} ?>