<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:38:20
         compiled from "./home/views/default/user/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80952958957b27c9c93e6d5-59736418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12e77a6c9f7d98905a991a099ef7d072106843c3' => 
    array (
      0 => './home/views/default/user/menu.tpl',
      1 => 1319611456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80952958957b27c9c93e6d5-59736418',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'public' => 0,
    'ygz' => 0,
    'url' => 0,
    'app' => 0,
    'followednum' => 0,
    'followingnum' => 0,
    'articlenum' => 0,
    'collectionnum' => 0,
    'commentnum' => 0,
    'recommendnum' => 0,
    'followeds' => 0,
    'followings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27c9cb63437_02634960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27c9cb63437_02634960')) {function content_57b27c9cb63437_02634960($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body style="background:#EAEAEA">
<div id="umenu" class="top">	
	<div class="uimg">
		<img width="70" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" height="70" src="<?php if ($_smarty_tpl->tpl_vars['user']->value['upic']){?><?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/user/<?php echo $_smarty_tpl->tpl_vars['user']->value['upic'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['user']->value['sex'];?>
.gif<?php }?>" />
	</div>
	<div class="uset">
		<div>
			<b><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</b>&nbsp;&nbsp;&nbsp;&nbsp;
			<?php if ($_SESSION['id']!=$_smarty_tpl->tpl_vars['user']->value['id']){?>
				<?php if ($_smarty_tpl->tpl_vars['ygz']->value){?>
					<span class="follow" onclick="delfollow('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/delfollow')">取消关注</span>
				<?php }else{ ?>
					<span class="follow" onclick="setfollow('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/follow')">添加关注</span>
				<?php }?>

			<?php }?>

				<script>
					function delfollow(url){
						Ajax().post(url, {uid:'<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
'}, function(data){
							if(data=='ok') {
								window.location.reload();
							}
						});
					
					
					}
					function setfollow(url){
						Ajax().post(url, {uid:'<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
',username:'<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
'}, function(data){
							if(data=='ok') {
								window.location.reload();
							}
						});
					
					
					}
				</script>
		
		</div>
		<?php if ($_SESSION['id']==$_GET['uid']){?>
			<div>[ <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/set" target="main">账户设置</a> ] [ <a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/index">站内信</a> ] </div>
		<?php }else{ ?>
			<div>[ <a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/write/revicename/<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
">发消息</a> ] </div>
		<?php }?>
		<div>
		</div>
		<div class="">级别： <span class="redh"><?php echo $_SESSION['groupname'];?>
</span></div>
	
	</div>
	<div class="umess fg">
		<div style="border-right:2px solid #CCC">
			<span  class="redh"><?php echo $_smarty_tpl->tpl_vars['followednum']->value;?>
</span><br>
			<span><a target="main" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/allfollowed/uid/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">粉丝</a></span>
		</div>
		<div style="border-right:2px solid #CCC">
			<span  class="redh"><?php echo $_smarty_tpl->tpl_vars['followingnum']->value;?>
</span><br>
			<span><a target="main" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/allfollowing/uid/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">关注</a></span>
		</div>
		<div>
			<span class="redh"><?php echo $_smarty_tpl->tpl_vars['user']->value['views'];?>
</span><br>
			<span>访客</span>
		</div>
	</div>
	<div class="umess" style="text-indent:0.8cm;padding:10px;">
		<?php echo $_smarty_tpl->tpl_vars['user']->value['info'];?>

	</div>
	
	<div>
		<?php if ($_SESSION['sendarticle']=="1"&&$_SESSION['id']==$_GET['uid']){?>
		<span style="font-size:16px;font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;<a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/dynamic/add">发表文章</a></span>
		<?php }?>
	<br><hr align="center" width="90%"></div>
	
	<div class="umess" style="padding-left:15px;">
		<ul class="mydt">	
			<li><a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/dynamic/index/uid/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/otype/1">我的文章</a>(<span class="redh"><b><?php echo $_smarty_tpl->tpl_vars['articlenum']->value;?>
</b></span>)</li>
			<li><a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/dynamic/index/uid/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/otype/3">我的收藏</a>(<span class="redh"><b><?php echo $_smarty_tpl->tpl_vars['collectionnum']->value;?>
</b></span>)</li>
			<li><a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/dynamic/index/uid/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/otype/2">我的评论</a>(<span class="redh"><b><?php echo $_smarty_tpl->tpl_vars['commentnum']->value;?>
</b></span>)</li>
			<li><a target="main" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/dynamic/index/uid/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/otype/4">我的推荐</a>(<span class="redh"><b><?php echo $_smarty_tpl->tpl_vars['recommendnum']->value;?>
</b></span>)</li>
			
		</ul>
	</div>

	<div class="gf">
		<div><span style="font-size:16px;font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;<a target="main" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/allfollowed/uid/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">粉 丝</a></span><br><hr align="center" width="90%"></div>
		<div style="padding-left:10px;">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ed'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ed']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['followeds']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['name'] = 'ed';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ed']['total']);
?>
			<div style="width:40px;margin:5px;"><a target="_top" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/uid/<?php echo $_smarty_tpl->tpl_vars['followeds']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ed']['index']]['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
<?php if ($_smarty_tpl->tpl_vars['followeds']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ed']['index']]['upic']){?>/uploads/user/<?php echo $_smarty_tpl->tpl_vars['followeds']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ed']['index']]['upic'];?>
<?php }else{ ?>/images/<?php echo $_smarty_tpl->tpl_vars['followeds']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ed']['index']]['sex'];?>
.gif<?php }?>" width="40" height="40"></a></div>
			<?php endfor; endif; ?>
		
		
		</div>


	</div>
	<div class="gf">
		<div><span style="font-size:16px;font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;<a target="main" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/allfollowing/uid/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">关 注</a></span><br><hr align="center" width="90%"></div>
		<div style="padding-left:10px;">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ing'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ing']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['followings']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['name'] = 'ing';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ing']['total']);
?>
			<div style="width:40px;margin:5px;"><a target="_top" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/uid/<?php echo $_smarty_tpl->tpl_vars['followings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ing']['index']]['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
<?php if ($_smarty_tpl->tpl_vars['followings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ing']['index']]['upic']){?>/uploads/user/<?php echo $_smarty_tpl->tpl_vars['followings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ing']['index']]['upic'];?>
<?php }else{ ?>/images/<?php echo $_smarty_tpl->tpl_vars['followings']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ing']['index']]['sex'];?>
.gif<?php }?>" width="40" height="40"></a></div>
			<?php endfor; endif; ?>
		
		</div>

	</div>

</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				
<?php }} ?>