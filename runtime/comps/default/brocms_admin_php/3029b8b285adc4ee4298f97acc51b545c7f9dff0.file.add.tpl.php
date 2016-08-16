<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:37:13
         compiled from "./admin/views/default/article/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13853266857b27c5948ecd1-32108212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3029b8b285adc4ee4298f97acc51b545c7f9dff0' => 
    array (
      0 => './admin/views/default/article/add.tpl',
      1 => 1318476532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13853266857b27c5948ecd1-32108212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'select' => 0,
    'jz' => 0,
    'post' => 0,
    'ck' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27c5951ad82_53539800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27c5951ad82_53539800')) {function content_57b27c5951ad82_53539800($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理->文章管理->添加文章</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form name="article" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width">文章类别</span>
						  <?php echo $_smarty_tpl->tpl_vars['select']->value;?>
 <label for="jz"><input id="jz" type="checkbox" name="jz" <?php echo $_smarty_tpl->tpl_vars['jz']->value;?>
 value="1"> 记住选项</label>
					</li>
					<li class="light-row">
						<span class="col_width">文章标题&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="title" size="30" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" maxlength="40">
					</li>

					<li class="dark-row">
						<span class="col_width" style="margin-top:25px">文章摘要</span>
						<textarea class="text-box" name="summary" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['post']->value['summary'];?>
</textarea>&nbsp;&nbsp;小于100个汉字.
					</li>
				

					<li class="light-row">
						<span class="col_width">文章来源</span>
						<input type="text" class="text-box" name="comefrom" size="25" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['comefrom'];?>
" maxlength="25">
					</li>
					<li class="dark-row">
						<span class="col_width">关键字&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="keyword" size="25" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['keyword'];?>
" maxlength="20">&nbsp;&nbsp;用于文章搜索,多个请用逗号","隔开.
					</li>
					<li class="light-row">
						<span class="col_width">是否推荐</span>
						<input type="radio"  name="recommend"<?php if ($_smarty_tpl->tpl_vars['post']->value['recommend']==1){?>checked<?php }?>  value="1"> 推荐
						<input type="radio"  name="recommend" <?php if ($_smarty_tpl->tpl_vars['post']->value['recommend']==0){?>checked<?php }?> value="0"> 不推荐
					</li>
					<li class="dark-row">
						<span class="col_width">是否充许评论</span>
						<input type="radio"  name="allow"<?php if ($_smarty_tpl->tpl_vars['post']->value['allow']==1){?>checked<?php }?>  value="1"> 充许
						<input type="radio"  name="allow" <?php if ($_smarty_tpl->tpl_vars['post']->value['allow']==0){?>checked<?php }?> value="0"> 不充许
					</li>
				
					<li class="light-row" style="margin:0px; padding:0px">
						<textarea cols="80" rows="10" name="content"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</textarea>
						<?php echo $_smarty_tpl->tpl_vars['ck']->value;?>

					</li>
				
	
					<li class="dark-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button"  value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>