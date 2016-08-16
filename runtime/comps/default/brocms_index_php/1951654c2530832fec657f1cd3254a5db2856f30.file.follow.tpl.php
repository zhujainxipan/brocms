<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:41:37
         compiled from "./home/views/default/user/follow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92561774157b27d61cf6af6-81186443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1951654c2530832fec657f1cd3254a5db2856f30' => 
    array (
      0 => './home/views/default/user/follow.tpl',
      1 => 1319611348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92561774157b27d61cf6af6-81186443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tit' => 0,
    'follows' => 0,
    'app' => 0,
    'public' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27d61d900a4_70791296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27d61d900a4_70791296')) {function content_57b27d61d900a4_70791296($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body style="background:white;margin:20px;">
<div class="top">	
	<div class="uhead">
		<h3> <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
 </h3>
	</div>
		
	<div class="ucontent" style="padding-top:15px">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['follows']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['name'] = 'ls';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total']);
?>
		<div class="edz">
			<div class="uhead">
				<a target="_top" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_smarty_tpl->tpl_vars['follows']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['id'];?>
"><img width="50"  height="50" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
<?php if ($_smarty_tpl->tpl_vars['follows']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['upic']){?>/uploads/user/<?php echo $_smarty_tpl->tpl_vars['follows']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['upic'];?>
<?php }else{ ?>/images/<?php echo $_smarty_tpl->tpl_vars['follows']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['sex'];?>
.gif<?php }?>" /></a>			
			</div>
			<div class="info">
				<div class="uname">
					<a target="_top" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_smarty_tpl->tpl_vars['follows']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['follows']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['username'];?>
</a>
				</div>	

				<div class="uname">
					<span class="redh"><?php echo $_smarty_tpl->tpl_vars['follows']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['ednum'];?>
</span>粉丝 | <span class="redh"><?php echo $_smarty_tpl->tpl_vars['follows']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['ingnum'];?>
</span>关注
				</div>
			</div>
		</div>	
		<?php endfor; else: ?>
			暂无
		<?php endif; ?>
		<div style="width:100%;float:left;text-align:right">
			<?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>

		</div>
	</div>
</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				
<?php }} ?>