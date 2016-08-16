<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:29:15
         compiled from "./home/views/default/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115284217257b27a7b979978-22250082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05f4bb54bbcefdec46ae4480c118c34040901f7b' => 
    array (
      0 => './home/views/default/index/index.tpl',
      1 => 1318823912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115284217257b27a7b979978-22250082',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ncount' => 0,
    'notice' => 0,
    'url' => 0,
    'play' => 0,
    'app' => 0,
    'public' => 0,
    'res' => 0,
    'cols' => 0,
    'recommends' => 0,
    'news' => 0,
    'hots' => 0,
    'links' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27a7bbe8f67_78823186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27a7bbe8f67_78823186')) {function content_57b27a7bbe8f67_78823186($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/annuoaichengzhang/developspace/phpdev/brocms/brophp/libs/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['ncount']->value>0){?>
<div id="noti"><marquee scrollamount=<?php echo $_smarty_tpl->tpl_vars['ncount']->value;?>
  width="100%" onMouseOver=stop() onMouseOut=start()>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["nls"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['notice']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['name'] = "nls";
$_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["nls"]['total']);
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/notice/id/<?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nls']['index']]['id'];?>
" target="_blank" style="color:#<?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nls']['index']]['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nls']['index']]['title'];?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<?php endfor; endif; ?>
</marquee></div>
<div class="nav"></div>
<?php }?>
	<div id="main">
<div class="leftbox">
	<div class="view-hover">
	
		<div id="pwSlidePlayer" class="pwSlide cc" onmouseover="pwSlidePlayer('pause');" onmouseout="pwSlidePlayer('goon');">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pic'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['name'] = 'pic';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['play']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['max'] = (int)6;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pic']['total']);
?>
			
			<div id="Switch_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pic']['index'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['pic']['first']!=true){?>style="display:none;"<?php }?>>
                       		 <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['play']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pic']['index']]['aid'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['play']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pic']['index']]['picname'];?>
" />
					<h3><?php echo $_smarty_tpl->tpl_vars['play']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pic']['index']]['title'];?>
</h3>
				 </a>
                	</div>
		<?php endfor; else: ?>
			<div id="Switch_0" >
                       		 <a href="http://bbs.lampbrother.net" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/xsphp_f.png" />
					<h3>《细说PHP》PHP学习必备！</h3>
				 </a>
                	</div>
		<?php endif; ?>
			<div class="pwSlide-bg"></div>
			<ul id="SwitchNav"></ul>
		</div>
		<div class="c"></div>
		<script src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/player.js"></script>
		<script>pwSlidePlayer('play',1);</script>

		</div>
	</div>

		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['col'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['col']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['name'] = 'col';
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cols']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['col']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['col']['total']);
?>
			<div class="<?php if (!($_smarty_tpl->getVariable('smarty')->value['section']['col']['index'] % 2)){?>rightbox<?php }else{ ?>leftbox<?php }?>">
				
       				<div class="dt"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/list/index/pid/<?php echo $_smarty_tpl->tpl_vars['cols']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['cols']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['title'],25);?>
</a></strong><span class="more"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/list/index/pid/<?php echo $_smarty_tpl->tpl_vars['cols']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['id'];?>
">更多...</a></span></div>
        			<div class="dd">
					<div class="left">
						<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/list/index/pid/<?php echo $_smarty_tpl->tpl_vars['cols']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['cols']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['imgname'];?>
" border="0" width="80" height="80"></a>
						<?php if ($_smarty_tpl->tpl_vars['cols']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['subcol']!=null){?>
							<ul>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sub'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sub']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['name'] = 'sub';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cols']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['subcol']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['max'] = (int)4;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sub']['total']);
?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/list/index/pid/<?php echo $_smarty_tpl->tpl_vars['cols']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['subcol'][$_smarty_tpl->getVariable('smarty')->value['section']['sub']['index']]['id'];?>
">&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['cols']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['subcol'][$_smarty_tpl->getVariable('smarty')->value['section']['sub']['index']]['title'];?>
</a></li>
								<?php endfor; endif; ?>
							</ul>
						<?php }?>
					</div>
					<div class="right dot">
						<ul>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['article'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['article']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['name'] = 'article';
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cols']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['art']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = (int)10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total']);
?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['cols']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['art'][$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['cols']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['art'][$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['title'],25);?>
</a></li>
							<?php endfor; else: ?>
								<li>该栏目中没有任何文章</li>
							<?php endif; ?>
						</ul>
					</div>
					
       				</div>
			
       		 	</div>
			<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['section']['col']['rownum'])){?>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['col']['last']==false){?>
					<div class="nav"> </div>
				<?php }?>
			<?php }?>
		<?php endfor; endif; ?>
	</div>

	<div id="sidebar">
		<div class="sidebox">
       			<div class="dt"><strong>强烈推荐</strong></div>
        		<div class="dd dot">
          			<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rec'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rec']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['name'] = 'rec';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recommends']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['max'] = (int)10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rec']['total']);
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['recommends']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rec']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['recommends']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rec']['index']]['title'],25);?>
</a> <span style="font-size:10px">(<span class="redh"><?php echo $_smarty_tpl->tpl_vars['recommends']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rec']['index']]['recommend'];?>
</span>人推荐)</span></li>
					<?php endfor; else: ?>
						<li>目前没有任何推荐文章</li>
					<?php endif; ?>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
		<div class="sidebox">
       			<div class="dt"><strong>最近更新</strong></div>
        		 <div class="dd dot">
            			<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['new'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['new']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['name'] = 'new';
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['news']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['max'] = (int)10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['new']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['new']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['new']['total']);
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['new']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['new']['index']]['title'],25);?>
</a></li>
					<?php endfor; else: ?>
						<li>目前没有任何文章更新</li>
					<?php endif; ?>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
		<div class="sidebox">
       			<div class="dt"><strong>本月热点</strong></div>
        		 <div class="dd dot">
          			<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['hot'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['name'] = 'hot';
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['hots']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['max'] = (int)10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['total']);
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['hots']->value[$_smarty_tpl->getVariable('smarty')->value['section']['hot']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['hots']->value[$_smarty_tpl->getVariable('smarty')->value['section']['hot']['index']]['title'],18);?>
</a>&nbsp;&nbsp;<span style="font-size:10px">(浏览<span class="redh"><?php echo $_smarty_tpl->tpl_vars['hots']->value[$_smarty_tpl->getVariable('smarty')->value['section']['hot']['index']]['views'];?>
</span>次)</span></li>
					<?php endfor; else: ?>
						<li>目前没有任何热门文章</li>
					<?php endif; ?>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
	</div>

	<div class="nav"> </div>
	<div id="link">
       		<div class="dt"><strong><span>友情链接</span></strong></div>
        	<div class="dd">
               		<ul>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['name'] = 'ls';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['links']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['url'];?>
" target="_blank">
						<?php if ($_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['list']){?>
							<img height="40" alt="<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['webname'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/logos/<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['logo'];?>
" border="0" >
						<?php }else{ ?>
							<?php echo $_smarty_tpl->tpl_vars['links']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['webname'];?>

						<?php }?>

					</a></li>
				<?php endfor; endif; ?>
          		</ul>
		</div>
      	 </div>
	<div class="nav"> </div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>