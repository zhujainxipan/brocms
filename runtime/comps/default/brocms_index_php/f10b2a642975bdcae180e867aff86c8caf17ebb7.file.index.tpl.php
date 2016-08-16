<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:41:31
         compiled from "./home/views/default/message/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159596736757b27d5ba5b369-18093434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f10b2a642975bdcae180e867aff86c8caf17ebb7' => 
    array (
      0 => './home/views/default/message/index.tpl',
      1 => 1319353694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159596736757b27d5ba5b369-18093434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'res' => 0,
    'message' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27d5bb53148_38758676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27d5bb53148_38758676')) {function content_57b27d5bb53148_38758676($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/annuoaichengzhang/developspace/phpdev/brocms/brophp/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body style="background:white;margin:20px;">
<div class="top">	
	<div class="uhead">
		<h3>站内信</h3>
	</div>
		
	<div class="ucontent">
		<div class="uzcolor"><b><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index">收件箱</a></b><?php if ($_SESSION['sendmessage']==1){?> | <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/write">写消息</a><?php }?></div> 
		<br>
		<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del" method="post">
			<table width="500">
				<tr>
					<th width="20"><input type="checkbox"></th>
					<th width="20"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/mess2.gif" /></th>
					<th width="100">发件人</th>
					<th>主题</th>
					<th width="100">时间</th>
				</tr>

				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["ms"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['message']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['name'] = "ms";
$_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["ms"]['total']);
?>
					<tr style="<?php if ($_smarty_tpl->tpl_vars['message']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ms']['index']]['stutas']==1){?>font-weight:bold;<?php }else{ ?>font-weight:100;<?php }?>">
						
						<td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['message']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ms']['index']]['id'];?>
"></td>
						<td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/view/id/<?php echo $_smarty_tpl->tpl_vars['message']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ms']['index']]['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/<?php if ($_smarty_tpl->tpl_vars['message']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ms']['index']]['stutas']==1){?>mess3.gif<?php }else{ ?>mess1.gif<?php }?>" /></a></td>
						<td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/view/id/<?php echo $_smarty_tpl->tpl_vars['message']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ms']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ms']['index']]['username'];?>
</a></td>
						<td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/view/id/<?php echo $_smarty_tpl->tpl_vars['message']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ms']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ms']['index']]['title'];?>
</a></td>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['message']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ms']['index']]['ptime'],"%m-%d %H:%M");?>
</td>
					</tr>
				<?php endfor; else: ?>
					<tr><td colspan="5">收信箱为空</td></tr>
				<?php endif; ?>
					<tr>
						<td colspan="5" align="left">
							<label for="sel"><input id="sel" onclick="allsel(this.checked)" type="checkbox">全选</label>
							<input class="button" type="submit" name="del" value="删除">
						</td>
					</tr>
					<tr>
						<td colspan="5" style="text-align:right"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</td>
					</tr>
			</table>
			<script>
				function allsel(val){
				
					var checks=document.getElementsByName("id[]");
				
					for(var i=0; i<checks.length; i++){
						checks[i].checked=val
					} 
				}
			</script>
		</form>				
	</div>
</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				
<?php }} ?>