<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:38:20
         compiled from "./home/views/default/dynamic/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149794179057b27c9cbca124-97234459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406fdaf45a74eec318bc58f04d6cc1b720fba5bd' => 
    array (
      0 => './home/views/default/dynamic/index.tpl',
      1 => 1319358064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149794179057b27c9cbca124-97234459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tit' => 0,
    'dynamic' => 0,
    'url' => 0,
    'app' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27c9cd161d8_06929940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27c9cd161d8_06929940')) {function content_57b27c9cd161d8_06929940($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/annuoaichengzhang/developspace/phpdev/brocms/brophp/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include '/Users/annuoaichengzhang/developspace/phpdev/brocms/brophp/libs/plugins/modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body style="background:white;margin:20px;">
<div class="top">	
	<div class="uhead">
		<h3>
			<?php if ($_smarty_tpl->tpl_vars['tit']->value){?>
				我的<?php echo $_smarty_tpl->tpl_vars['tit']->value;?>

			<?php }else{ ?>
				动&nbsp;&nbsp;态
			<?php }?>
		</h3>
	</div>

	<div class="ucontent">
		<br>
		<br>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dynamic']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<div style="width:100%;padding:10px 0;border-bottom:1px dotted #aaa;<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['ls']['index'])){?>background:#FAFAFA;<?php }?>">
			<div style="width:100%;color:#ccc">
				<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['ptime'],"%Y-%m-%d %H:%M:%S");?>
 -

				<?php if ($_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['uid']==$_SESSION['id']&&$_smarty_tpl->tpl_vars['tit']->value){?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/did/<?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['id'];?>
/otype/<?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['otype'];?>
/cid/<?php if ($_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['otype']==2){?><?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['pid'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['cid'];?>
<?php }?>" onclick="return confirm('我确定要取消<?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['title'];?>
 吗?')">取消<?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</a>
				<?php }?>
			</div>
			<div style="width:100%;color:#333">
				
				<?php if ($_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['otype']==1){?>
					<span class="d1">发布了新文章：</span> 
					<a  style="color:#0074CC" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['title'];?>
</a>
				<?php }elseif($_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['otype']==2){?>
					<span class="d2">发表了评论：</span>
					<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['content'],"&quot;",'"'),"&#039;","'");?>

					<br>文章标题：<a  style="color:#0074CC" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['title'];?>
</a>
				<?php }elseif($_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['otype']==3){?>
					<span class="d3">收藏文章：</span>
					<a target="_blank"  style="color:#0074CC" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['title'];?>
</a> 

				<?php }elseif($_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['otype']==4){?>
					<span class="d4">推荐文章：</span>
					<a target="_blank"  style="color:#0074CC" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['title'];?>
</a>
				<?php }elseif($_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['otype']==5){?>
					<span class="d5">关注：</span>
					<a target="_blank"  style="color:#0074CC"  href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['dynamic']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['title'];?>
</a>
				<?php }?>


			</div>
				
		</div>	
		<?php endfor; else: ?>
			暂无动态
		<?php endif; ?>
		
		<div style="width:100%;margin:20px;text-align:right"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</div>
	</div>
</div>
<?php if ($_GET['flush']){?>
	<script>
		window.top.frames.menu.location.reload();
	</script>
<?php }?>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				
<?php }} ?>