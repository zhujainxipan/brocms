<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:36:22
         compiled from "./admin/views/default/image/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62215731457b27c266c37c5-18819248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd5a582d3b273a150fd23d4f4bffc7b807d3be33' => 
    array (
      0 => './admin/views/default/image/add.tpl',
      1 => 1317278082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62215731457b27c266c37c5-18819248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'select' => 0,
    'thumb' => 0,
    'water' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27c2671fc57_81033812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27c2671fc57_81033812')) {function content_57b27c2671fc57_81033812($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理->图片管理->添加图片</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


			<script>
				function checkselect(obj){
					if(obj.pid.options[obj.pid.selectedIndex].value==0){
						var outmess=document.getElementById("outmess");
						outmess.innerHTML="还没有选分类";
						outmess.className+=" error-msg";
						return false;
					}
					return true;
				}
			</script>
		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert" onsubmit="return checkselect(this)" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">添加到相册</span><?php echo $_smarty_tpl->tpl_vars['select']->value;?>

					</li>

					
					<li class="dark-row">
						<span class="col_width">&nbsp; </span>
						<input type="checkbox" name="thumb" <?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
 value="1"> 生成缩略图 
						<input type="checkbox" name="water" <?php echo $_smarty_tpl->tpl_vars['water']->value;?>
 value="1"> 加水印 
					</li>
					<li class="light-row">
						<span class="col_width" style="float:left;">上传图片 </span>
						<span id="apic" style="float:left !important;float:none;width:300px;">
						<input type="file" name="pic[]" ><br>
						</span>
					</li>
					<li class="dark-row">
						<span class="col_width">&nbsp; </span>
						&nbsp;<a href="javascript:addpic()">继续添加</a>&nbsp;<b>↓</b>
						<span id="del" style="display:none">&nbsp;&nbsp;<a href="javascript:delpic()">减少一个</a>&nbsp;<b>↑</b></span>
					</li>
					<script>
						var picobj=document.getElementById("apic");
						var del=document.getElementById("del");
						var i=0;
						function addpic(){
							i++;
							if(i==1)
								del.style.display="inline";   										

							var file=document.createElement("input");
							file.type="file";
							file.name="pic[]";
							var br=document.createElement("br");
							picobj.appendChild(file);	
							picobj.appendChild(br);
						
						}
						function delpic(){
							i--;
							if(i==0)
								del.style.display="none";   
							picobj.removeChild(picobj.lastChild);
							picobj.removeChild(picobj.lastChild);
						}
					</script>
				
					<li class="light-row">
						<span class="col_width">&nbsp;</span><input type="submit" class="button"  value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>