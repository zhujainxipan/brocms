<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:37:06
         compiled from "./admin/views/default/image/open.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183122868457b27c5224a869-98285952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e6839b7a15c860d1ef3bc404d11a8d6842c4b65' => 
    array (
      0 => './admin/views/default/image/open.tpl',
      1 => 1311573418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183122868457b27c5224a869-98285952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'select' => 0,
    'images' => 0,
    'public' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27c522b7450_84093553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27c522b7450_84093553')) {function content_57b27c522b7450_84093553($_smarty_tpl) {?><div id="glist">
<div id="main">	
  	<div class="head-dark-box" style="float:left;width:100%">
		<div class="tit" style="width:80%;float:left" >选择图片（提示：单击图片即可插入，单击名称查看图片信息。）</div>
		<div class="clo" onclick="closewin()"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/tipe.gif" ></div>
	</div>	

	<div class="msg-box"  style="float:left;width:100%;">
		
			<div class="light-row" style="float:left;width:564px !important;width:567px;padding:5px 0px 5px 0px">
				&nbsp;&nbsp;请从相册中选择需要编辑的图片&nbsp;&nbsp; <?php echo $_smarty_tpl->tpl_vars['select']->value;?>
 &nbsp;&nbsp; 
			</div>
				
		
			     <div style="width:100%;">
			    	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tu'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tu']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['name'] = 'tu';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['images']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tu']['total']);
?>
				<div  class="piclist">				
					<a href="javascript:setImage(<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tu']['index']]['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tu']['index']]['name'];?>
')"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tu']['index']]['name'];?>
" width="100" height="100"></a>
					
			      	</div>
				 
			   	 <?php endfor; else: ?>
					<div style="float:left;text-align:center;color:red;width:100%;marign:20px;background:#ccc">
						该类中没有需要的图片
					</div>
			   	 <?php endif; ?>
			     </div>
			<div class="dark-row" style="float:left;width:564px !important;width:567px;margin-top:10px;padding-bottom:0 !important;padding-bottom:10px;">
				&nbsp;&nbsp;<span style="float:left"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</span>
			</div>
	
	</div>
</div>
</div>
<?php }} ?>