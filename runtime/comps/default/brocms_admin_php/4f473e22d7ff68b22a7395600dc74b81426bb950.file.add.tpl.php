<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:36:01
         compiled from "./admin/views/default/album/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49964429857b27c1105e269-49736480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f473e22d7ff68b22a7395600dc74b81426bb950' => 
    array (
      0 => './admin/views/default/album/add.tpl',
      1 => 1318476456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49964429857b27c1105e269-49736480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'select' => 0,
    'jz' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27c110c7746_73149319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27c110c7746_73149319')) {function content_57b27c110c7746_73149319($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">内容管理>图片管理>添加相册</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">上级相册</span>
							<?php echo $_smarty_tpl->tpl_vars['select']->value;?>
	<label for="jz"><input id="jz" type="checkbox" name="jz" <?php echo $_smarty_tpl->tpl_vars['jz']->value;?>
 value="1"> 记住选项</label>
						</li>
					<li class="dark-row">
						<span class="col_width">相册标题<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="title" size="20" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
">
					</li>
					<li class="light-row">
						<span class="col_width" style="margin-top:30px">相册描述<span class="red_font">*</span></span>
						<textarea class="text-box" name="description" cols="30" rows="5"><?php echo $_smarty_tpl->tpl_vars['post']->value['description'];?>
</textarea>
					</li>
				
					<li class="dark-row">
						<span class="col_width"> &nbsp; </span>
						<input type="submit" class="button" value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	



<?php }} ?>