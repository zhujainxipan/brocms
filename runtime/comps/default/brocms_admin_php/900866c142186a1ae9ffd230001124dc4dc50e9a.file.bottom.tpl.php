<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:30:47
         compiled from "./admin/views/default/index/bottom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202141642457b27ad746ad46-13956376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '900866c142186a1ae9ffd230001124dc4dc50e9a' => 
    array (
      0 => './admin/views/default/index/bottom.tpl',
      1 => 1319531776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202141642457b27ad746ad46-13956376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'articles' => 0,
    'plays' => 0,
    'columns' => 0,
    'images' => 0,
    'flinks' => 0,
    'notices' => 0,
    'users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27ad7504110_60785445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27ad7504110_60785445')) {function content_57b27ad7504110_60785445($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
		<div id="bottom">
			<ul>
				<li class="left">版本：2.0beta&nbsp;&nbsp;作者：高洛峰</li>
					<li class="right"> 
						本系统现有： &nbsp; 

						<?php if ($_SESSION['articleadmin']){?>
							<a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article">文章【<span class="red_font"><?php echo $_smarty_tpl->tpl_vars['articles']->value;?>
</span>】篇</a>&nbsp; &nbsp; 
							<a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/play">幻灯片【<span class="red_font"><?php echo $_smarty_tpl->tpl_vars['plays']->value;?>
</span>】个</a>
						<?php }?>
						<?php if ($_SESSION['webadmin']){?>
							<a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/column">栏目【<span class="red_font"><?php echo $_smarty_tpl->tpl_vars['columns']->value;?>
</span>】个</a>&nbsp; &nbsp; 
							<a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/image">图片【<span class="red_font"><?php echo $_smarty_tpl->tpl_vars['images']->value;?>
</span>】张</a>&nbsp; &nbsp;
						
							<a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/flink">友情链接【<span class="red_font"><?php echo $_smarty_tpl->tpl_vars['flinks']->value;?>
</span>】个</a>
							<a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/notice">公告【<span class="red_font"><?php echo $_smarty_tpl->tpl_vars['notices']->value;?>
</span>】个</a>
						<?php }?>
						<?php if ($_SESSION['useradmin']){?>
							<a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user">用户【<span class="red_font"><?php echo $_smarty_tpl->tpl_vars['users']->value;?>
</span>】个 </a>&nbsp; &nbsp; 
						<?php }?>
					</li>	
			</ul>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>