<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 14:20:26
         compiled from "./admin/views/default/notice/mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62235439057b2b0aa9ef555-96109870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f0a684a2b0c8600760e1e126301578cbab80e83' => 
    array (
      0 => './admin/views/default/notice/mod.tpl',
      1 => 1319349984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62235439057b2b0aa9ef555-96109870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'post' => 0,
    'color' => 0,
    'starttime' => 0,
    'endtime' => 0,
    'ck' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b2b0aaa930d1_95525963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b2b0aaa930d1_95525963')) {function content_57b2b0aaa930d1_95525963($_smarty_tpl) {?><!DOCTYPE html PUBLIC
          "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>公告管理>修改公告</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/update">
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">公告标题<span class="red_font">*</span></span>
						 <input type="text" class="text-box" name="title" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
可以为标题选择颜色
					</li>
					<li class="dark-row">
						<span class="col_width">起始日期<span class="red_font">*</span></span>
						<?php echo $_smarty_tpl->tpl_vars['starttime']->value;?>
 &nbsp;请选择开始时间！
					
					</li>
					<li class="light-row">
						<span class="col_width">截止日期<span class="red_font">*</span></span>
						<?php echo $_smarty_tpl->tpl_vars['endtime']->value;?>
 &nbsp;请选择下线时间,<input type="button" onclick="document.getElementById('endtime').value=''" class="button" value="清空">(设置留空则为长期显示)
					</li>

						
					<li class="dark-row">
						<span class="col_width" style="float:left;padding-top:30px;height:190px">公告内容<span class="red_font">*</span></span>
						<span style="float:left;height:150px;;width:530px"><textarea class="text-box" name="content" cols="50" rows="5"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</textarea>
						<?php echo $_smarty_tpl->tpl_vars['ck']->value;?>

						</span>
					</li>
				
					<li class="light-row">
						<span class="col_width">是否显示</span>
						
						<input type="radio" name="display"  <?php if ($_smarty_tpl->tpl_vars['post']->value['display']=="1"||$_smarty_tpl->tpl_vars['post']->value['display']==null){?> checked <?php }?> value="1"> 显示
						<input type="radio" name="display" <?php if ($_smarty_tpl->tpl_vars['post']->value['display']=="0"){?> checked <?php }?> value="0"> 不显示
					</li>
					<li class="dark-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button" value="修 改">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">&nbsp;&nbsp;
						<input type="button" onclick="if(confirm('确定要删除吗?')) window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
'" class="button" value="删 除">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>