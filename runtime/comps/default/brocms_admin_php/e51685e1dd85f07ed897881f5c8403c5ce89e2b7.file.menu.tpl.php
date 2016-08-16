<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:30:47
         compiled from "./admin/views/default/index/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108971507857b27ad71c5530-41549492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e51685e1dd85f07ed897881f5c8403c5ce89e2b7' => 
    array (
      0 => './admin/views/default/index/menu.tpl',
      1 => 1320387450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108971507857b27ad71c5530-41549492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'res' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27ad72be410_29432625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27ad72be410_29432625')) {function content_57b27ad72be410_29432625($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="menu">
			<div class="option">
				<div class="menutitle">【管理选项】</div>
				<div class="content">
					<ul>
						<li class="opt">
							<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/main" onclick="switchmenu('optionmenu','menulist',0)" target="main">
							<img onmouseover="cimg(this)" onmouseout="cimg(this)" border="0" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/system_d.gif"><br>
							 系统管理</a></a>
						</li>
						<li class="opt">
							<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/main" onclick="switchmenu('optionmenu','menulist',1)" target="main">
							<img onmouseover="cimg(this)" onmouseout="cimg(this)" border="0" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/article_d.gif"><br>
							内容管理</a>
						</li>
						<li class="opt">	
							 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/main" onclick="switchmenu('optionmenu','menulist',2)" target="main">
							 <img onmouseover="cimg(this)" onmouseout="cimg(this)" border="0" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/user_d.gif"><br>
							 用户管理</a>
						</li>
					</ul>
				 </div>
			</div>
			<div class="nav"> </div>
			<div class="option">
				<div id="optionmenu" class="menutitle">【系统管理】</div>
				<div id="menulist" class="content"> 
				    	<div style="display:block">
						<?php if ($_SESSION['webadmin']){?>					
						<h4 onclick="domenu(this, 'list1')" class="tit">--常规管理--</h4>
						<ul id="list1">
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/base/sysinfo" target="main">系统信息</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/base/baseset" target="main">基本设置</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/base/upcache" target="main">更新缓存</a></li>
							
						</ul>
						<h4 onclick="domenu(this, 'list2')" class="tit">--公告管理--</h4>
						<ul id="list2">
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/notice/add" target="main">添加公告</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/notice" target="main">管理公告</a></li>
						</ul>

						<h4 onclick="domenu(this, 'list3')" class="tit">--友情链接管理--</h4>
						<ul id="list3">
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/flink/add" target="main">添加友情链接</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/flink" target="main">管理友情链接</a></li>
						</ul>
						<?php }else{ ?>
							<h4>没有网站编辑权限</h4>
						<?php }?>
				
					</div>

					<div>
						<?php if ($_SESSION['webadmin']){?>
						<h4 onclick="domenu(this, 'list21')" class="tit">--相册管理--</h4>
						<ul id="list21">
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/album/add" target="main">添加相册</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/album" target="main">编辑相册</a></li>
						
						</ul>

						<h4 onclick="domenu(this, 'list22')" class="tit">--图片管理--</h4>
						<ul id="list22">
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/image/add" target="main">添加图片</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/image" target="main">管理图片</a></li>
						</ul>
						<h4 onclick="domenu(this, 'list23')" class="tit">--栏目管理--</h4>
						<ul id="list23">
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/column/add" target="main">添加栏目</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/column" target="main">管理栏目</a></li>
						</ul>
						<?php }else{ ?>
							<h4>没有网站编辑权限</h4>
						<?php }?>
						<?php if ($_SESSION['articleadmin']){?>
						<h4 onclick="domenu(this, 'list24')" class="tit">--文章管理--</h4>
						<ul id="list24">
							<li><a class="list"  href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/add" target="main">添加文章</a></li>
							<li><a class="list"  href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article" target="main">管理文章</a></li>
							
						</ul>
	
						<h4 onclick="domenu(this, 'list25')" class="tit">--幻灯片管理--</h4>
						<ul id="list25">
						
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/play" target="main">管理幻灯</a></li>
						</ul>
						<?php }else{ ?>
							<h4>没有文章管理权限</h4>
						<?php }?>
					</div>

					<div>
					<?php if ($_SESSION['useradmin']){?>
						<h4 onclick="domenu(this, 'list31')" class="tit">--用户组管理--</h4>
						<ul id="list31">
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/group/add" target="main">添加用户组</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/group" target="main">编辑用户组</a></li>
						</ul>
						<h4 onclick="domenu(this, 'list32')" class="tit">--用户管理--</h4>
						<ul id="list32">
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/add" target="main">添加用户</a></li>
							<li><a class="list" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user" target="main">编辑用户</a></li>
						</ul>
					<?php }else{ ?>
						<h4>没有用户管理权限</h4>
					<?php }?>
					</div>
					
					
				</div>
			</div>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>