<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:30:47
         compiled from "./admin/views/default/index/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128596009557b27ad73128c0-68012726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2604bfde2c87af9d30fe57e44916c36c934e4c13' => 
    array (
      0 => './admin/views/default/index/main.tpl',
      1 => 1311666506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128596009557b27ad73128c0-68012726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27ad73ae149_18379056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27ad73ae149_18379056')) {function content_57b27ad73ae149_18379056($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
			<div class="head-dark-box">
				<div class="tit">后台管理首页</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="msg-box">
				<div class="mar">
				<p>
					<a  href="http://bbs.lampbrother.net" target="_blank"><span class="red_font">《细说PHP》</span></a>信息发布系统是一套中小型企业网站建设、信息发布、资料存储管理的系统平台.<br>
				&nbsp;它操作简单,易于维护,更采用了WEB开发领先技术,目前版本为2.0Beta版. <br>
				&nbsp;仅供《细说PHP》读者及LAMP兄弟连学员学习交流使用.<br>
				</p>
				<ul><b>系统特点</b>: 
					<li class="mess">使用流行脚本语言PHP编写，搭配性能稳定的MySQL数据库. </li>
					<li class="mess">系统可以跨平台，运行在Windows、Linux等操作系统中. </li>
					<li class="mess">使用最新的ck编辑器，发布文件排版像使用WORD一样简单. </li>
					<li class="mess">使用DIV+CSS技术布局,遵循WEB标准,兼容各种浏览器. </li>
					<li class="mess">采用Smarty模板引擎,页面高速缓存技术. </li>
					<li class="mess">采用完全的MVC模式,并使用自定义框架. </li>
					<li class="mess">采用完全的PHP5面向对象设计. </li>	
					<li class="mess">支持无限级的分类与子分类. </li>	
					<li class="mess">系统采用超经量级PHP框架<a  href="http://www.brophp.com" target="_blank"><span class="red_font">BroPHP</span></a>实现. </li>	
				</ul>	
				</div>	
			</div>
		</div>


<div id="xsphp">
	<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/xsphp.png">
	<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/xsphp.png">
	<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/xsphp.png">
	<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/xsphp.png">
	<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/xsphp.png">
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>