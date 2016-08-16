<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:40:09
         compiled from "./home/views/default/list/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19302782057b27d09f01a68-20155288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b387984a3add8df4d902c3c6bb9e8c64bced3ef0' => 
    array (
      0 => './home/views/default/list/index.tpl',
      1 => 1321184618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19302782057b27d09f01a68-20155288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'columnmenu' => 0,
    'url' => 0,
    'public' => 0,
    'locs' => 0,
    'column' => 0,
    'articles' => 0,
    'app' => 0,
    'fpage' => 0,
    'recommends' => 0,
    'hots' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27d0a0ee103_06437968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27d0a0ee103_06437968')) {function content_57b27d0a0ee103_06437968($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/annuoaichengzhang/developspace/phpdev/brocms/brophp/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/annuoaichengzhang/developspace/phpdev/brocms/brophp/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
	
		<div class="column_left">
			<?php if ($_smarty_tpl->tpl_vars['columnmenu']->value!=false){?>
       			<div class="dt"><strong><span>栏目导航</strong></div>
        		<div class="dd">
				<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['col'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['col']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['name'] = 'col';
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['columnmenu']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<li class="par"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/pid/<?php echo $_smarty_tpl->tpl_vars['columnmenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['columnmenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['description'];?>
" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['columnmenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['title'];?>
</a></li>
					<?php endfor; else: ?>
						<li>该栏目下没有子栏目</li>
					<?php endif; ?>
				</ul>	
       			</div>

			<div class="nav"> </div>
			<?php }?>
			<a href="http://bbs.lampbrother.net" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/xsphp_f.png" border="0" width="200" /></a>	
		</div>
		
		<div class="column_right">
       			<div class="dt">
				<div>当前位置
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loc'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['name'] = 'loc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['locs']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loc']['total']);
?>
					&gt; <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/pid/<?php echo $_smarty_tpl->tpl_vars['locs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loc']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['locs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loc']['index']]['description'];?>
"><?php echo $_smarty_tpl->tpl_vars['locs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loc']['index']]['title'];?>
</a> 
				<?php endfor; endif; ?>		
					
				</div>
			</div>
        		<div class="dd">
				
				<div class="column_top">
				
					<img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['column']->value['picname'];?>
" border="0" width="80" height="80">
				
					<span>
						<?php echo $_smarty_tpl->tpl_vars['column']->value['description'];?>

					</span>
					<div class="nav"> </div>
				</div>
			
				<div class="tit">
					<span class="col1">&nbsp;&nbsp;&nbsp;&nbsp;文章标题</span> 
					<span class="col2">作者</span>
					<span class="col2">发布时间</span></li>
				</div>
				<ul class="dot">

					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['col'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['col']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['name'] = 'col';
$_smarty_tpl->tpl_vars['smarty']->value['section']['col']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['articles']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<li>
							<span class="col1"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['title'],25);?>
</a></span>							     		     			  <span class="col2"><a style="background:url();padding:0px;" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_smarty_tpl->tpl_vars['articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['uid'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['author'],9);?>
</a></span>
							<span class="col2"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['articles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['col']['index']]['posttime'],"%Y-%m-%d");?>
</span>

						</li>
					<?php endfor; else: ?>
						<li>该栏目下没有文章</li>
					<?php endif; ?>
				
				</ul>	
				<div class="page">
					<?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
	
				</div>
       			</div>
		</div>
	</div>

	<div id="sidebar">
		<div class="sidebox">
       			<div class="dt"><strong>本类推荐</strong></div>
        		<div class="dd dot">
          			<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["rec"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['name'] = "rec";
$_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recommends']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["rec"]['total']);
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['recommends']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rec']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['recommends']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rec']['index']]['title'],25);?>
</a> <span style="font-size:10px">(<span class="redh"><?php echo $_smarty_tpl->tpl_vars['recommends']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rec']['index']]['recommend'];?>
</span>人推荐)</span></li>
					<?php endfor; else: ?>
						<li>本类暂无推荐文章</li>
					<?php endif; ?>
          			</ul>
			</div>
       		 </div>

		<div class="nav"> </div>
		<div class="sidebox">
       			<div class="dt"><strong>本类热门</strong></div>
        		 <div class="dd dot">
          			<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['h'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['h']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['h']['name'] = 'h';
$_smarty_tpl->tpl_vars['smarty']->value['section']['h']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['hots']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['h']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['h']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['h']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['h']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['h']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['h']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['h']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['h']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['h']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['h']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['h']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['h']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['h']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['h']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['h']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['h']['total']);
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['hots']->value[$_smarty_tpl->getVariable('smarty')->value['section']['h']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['hots']->value[$_smarty_tpl->getVariable('smarty')->value['section']['h']['index']]['title'],18);?>
</a>&nbsp;&nbsp;<span style="font-size:10px">(浏览<span class="redh"><?php echo $_smarty_tpl->tpl_vars['hots']->value[$_smarty_tpl->getVariable('smarty')->value['section']['h']['index']]['views'];?>
</span>次)</span></li>
					<?php endfor; else: ?>
						<li>本类暂无热门文章</li>
					<?php endif; ?>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
	</div>

	<div class="nav"> </div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>