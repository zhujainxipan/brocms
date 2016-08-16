<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:37:37
         compiled from "./admin/views/default/article/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142649176657b27c719b0420-19874950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd3edc76aaa878340ac1cca4f791530cac9777c7' => 
    array (
      0 => './admin/views/default/article/index.tpl',
      1 => 1319102360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142649176657b27c719b0420-19874950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'page' => 0,
    'select' => 0,
    'search' => 0,
    'arts' => 0,
    'root' => 0,
    'res' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27c71b21923_98602206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27c71b21923_98602206')) {function content_57b27c71b21923_98602206($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/annuoaichengzhang/developspace/phpdev/brocms/brophp/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/annuoaichengzhang/developspace/phpdev/brocms/brophp/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理->文章管理->管理文章</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/fpro/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php if ($_GET['pid']){?>/pid/<?php echo $_GET['pid'];?>
<?php }?><?php if ($_GET['search']){?>/search/<?php echo $_GET['search'];?>
<?php }?><?php if ($_GET['audit']){?>/audit/<?php echo $_GET['audit'];?>
<?php }?>">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请按分类选择文档&nbsp;&nbsp; <?php echo $_smarty_tpl->tpl_vars['select']->value;?>
	
					&nbsp;&nbsp; <input id="sea" type="text" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"> <input type="button" onclick="search()" class="button" value="从分类中搜索">
					<script>
						var sel=document.getElementById("sel");
						
						sel.onchange=function(){
							var pid=this.options[this.selectedIndex].value;
							window.location="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/pid/"+pid;
						}

						function search(){
							var pid=sel.options[sel.selectedIndex].value;
							var sval=document.getElementById("sea").value;	
							window.location="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/pid/"+pid+"/search/"+sval;

						}
					</script>
					</li>
					
					<li class="dark-row">
						<span class="list_width width_font" style="width:190px">标题</span>
						<span class="list_width width_font">作&nbsp;&nbsp;者</span>
						<span class="list_width width_font" style="width:80px">添加时间</span>
						<span class="list_width width_font" style="width:40px;">评论</span>
						
						<span class="list_width width_font" style="width:40px;">审核</span>
					
						<span class="list_width width_font">操&nbsp;&nbsp;作</span>
					</li>
				        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['name'] = 'doc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['arts']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total']);
?>
						<li class="<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['doc']['index'])){?>light-row<?php }else{ ?>dark-row<?php }?>" style="padding-top:2px; padding-bottom:2px">
							<span class="list_width" style="width:190px"><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/index.php/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'],50);?>
</a></span>
							<span class="list_width"><?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['author'];?>
</span>
							<span class="list_width" style="width:80px"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['posttime'],"%Y-%m-%d");?>
</span>
							<span class="list_width" style="width:40px;text-align:center">

								<?php if ($_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['allow']==1){?>
									<span onclick="set(this,'allow',<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
 )" style="color:#FE488B;cursor:pointer;">√</span>
								<?php }else{ ?>
									<span onclick="set(this,'allow',<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
)" style="color:#0000F6;cursor:pointer;">×</span>
								<?php }?>

							</span>
						
							<span class="list_width" style="width:40px;text-align:center">

								<?php if ($_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['audit']==1){?>
									<span onclick="set(this,'audit',<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
)" style="color:#FE488B;cursor:pointer;">√</span>
								<?php }else{ ?>
									<span onclick="set(this,'audit',<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
)" style="color:#0000F6;cursor:pointer;">×</span>
								<?php }?>

							</span>
						
							<span class="list_width" style="width:160px;">
						
							【<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/mod/id/<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">修改</a>】
							【<a onclick="return confirm('确定要删除文章<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
吗？')" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['arts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php if ($_GET['pid']){?>/pid/<?php echo $_GET['pid'];?>
<?php }?><?php if ($_GET['search']){?>/search/<?php echo $_GET['search'];?>
<?php }?><?php if ($_GET['audit']){?>/audit/<?php echo $_GET['audit'];?>
<?php }?>">删除</a>】
							</span>
						</li>
					<?php endfor; else: ?>
						<li class="light-row">
							本页没有文章
						</li>
					<?php endif; ?>
					<script>
	function set(obj, stat, id){
		var ajax=Ajax();
		
		if(obj.innerHTML=="√"){
			ajax.get("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/status/s/"+stat+"/id/"+id+"/val/0", function(data){
				if(data=="1"){
					ieff(obj, "×");
					obj.style.color="#0000F6";
				}
			
			});
				
		}else{
			ajax.get("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/status/s/"+stat+"/id/"+id+"/val/1", function(data){
				if(data=="1"){
					ieff(obj, "√");
					obj.style.color="#FE488B";
				}
				
			});

		}
				
	}
							</script>
					<li class="dark-row">
						<div class="col_width" style="margin-left:15px;width:100%"> 
							<a href="javascript:select()">全选</a>/<a href="javascript:fanselect()">反选</a>/<a href="javascript:noselect()">全不选</a>&nbsp;&nbsp;选中项: 
							<input  name="allows" type="image" title="充许评论"  src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/pl1.gif">&nbsp;&nbsp;
							<input  name="nallows" type="image" title="不能评论"  src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/pl2.gif">&nbsp;&nbsp;
						
							<input  name="audits" type="image" title="审核"  src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/audit.gif">&nbsp;&nbsp;
							<input  name="locks" type="image" title="锁定"  src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/lock.gif">&nbsp;&nbsp;
						
							<input  name="dels" type="image" title="删除" onClick="return confirm('你确定要删除选中的文章项吗?')"  src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/delete.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							<a style='<?php if ($_GET['audit']=="on"){?>background:#888;color:white<?php }?>' href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/audit/on">审核过的</a>&nbsp;|
							<a style='<?php if ($_GET['audit']=="off"){?>background:#888;color:white<?php }?>' href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/audit/off">末审核的</a>
							
						 </div> 
						<div class="right" style="width:100%;margin-top:10px;">
							<?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>

						</div>
					</li>
				</ul>	
			</div>
                    </form>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>