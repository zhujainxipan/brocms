<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 10:38:26
         compiled from "./home/views/default/article/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131341483757b27ca25e99e7-49844088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7119c40b30431be5d06143b23ca32ac71bcc7d0f' => 
    array (
      0 => './home/views/default/article/index.tpl',
      1 => 1332048786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131341483757b27ca25e99e7-49844088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'locs' => 0,
    'app' => 0,
    'article' => 0,
    'recommend' => 1,
    'collection' => 1,
    'prevArticle' => 0,
    'url' => 0,
    'nextArticle' => 0,
    'res' => 1,
    'allow' => 1,
    'ck' => 1,
    'conns' => 0,
    'recommends' => 0,
    'hots' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57b27ca2828943_09234538',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b27ca2828943_09234538')) {function content_57b27ca2828943_09234538($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/annuoaichengzhang/developspace/phpdev/brocms/brophp/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/annuoaichengzhang/developspace/phpdev/brocms/brophp/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		<div class="article">
		<div class="dt">
			<div>
				当前位置:	
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
					<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/list/index/pid/<?php echo $_smarty_tpl->tpl_vars['locs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loc']['index']]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['locs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loc']['index']]['description'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['locs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loc']['index']]['title'],18);?>
</a> &gt;
				<?php endfor; endif; ?>
					<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['title'],27);?>

				</div>	

				<span class="more"><span class="tj" onclick="setts('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/dynamic/recommend', 4,'<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
', this,'推荐')"><?php if ($_smarty_tpl->tpl_vars['recommend']->value){?>已推荐<?php }else{ ?>推荐<?php }?></span>(<span id="ts4" class="redh"></span>)  <span class="sc" onclick="setts('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/dynamic/collection', 3, '<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
', this, '收藏')"><?php if ($_smarty_tpl->tpl_vars['collection']->value){?>已收藏<?php }else{ ?>收藏<?php }?></span>(<span id="ts3" class="redh"></span>)</span>

			</div>
				<script>
					function getts(url, otype){
					
						var obj=document.getElementById("ts"+otype);
						Ajax().post(url, {cid:<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
,otype:otype},function(data){
							obj.innerHTML=data;
					
						});
					}
					getts('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/dynamic/gts', 4);
					getts("<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/dynamic/gts", 3);					

					function setts(url, otype, title,obj,font){
						
							var dl='<?php echo $_SESSION['login'];?>
';
						

						if(dl=="1") {
							if(obj.innerHTML==font) {
								Ajax().post(url, {cid:<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
,title:title,otype:otype}, function(data){
									if(data=='ok'){
										obj.innerHTML='已'+font;
										getts('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/dynamic/gts', otype);
									}
								});
							}
						}else{
							alert('你还没有登录，请先登录！');
						}
					
					}
				</script>
        	<div class="dd">
			<div id="title">
				<div class="nav"> </div>
				<h1><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['title'],100);?>
</h1>
				
				<div class="nav"> </div>
				<div>【 作者：<span class="fontcolor"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_smarty_tpl->tpl_vars['article']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
</a></span>  &nbsp;&nbsp;&nbsp;&nbsp;来源： <span class="fontcolor"><?php echo $_smarty_tpl->tpl_vars['article']->value['comeFrom'];?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;点击数: <span class="fontcolor"><?php echo $_smarty_tpl->tpl_vars['article']->value['views'];?>
</span>      &nbsp;&nbsp;&nbsp;&nbsp;更新时间： <span class="fontcolor"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['posttime'],"%Y-%m-%d");?>
</span>   】</div>
				<div class="nav"> </div>
				<?php if ($_SESSION['id']==$_smarty_tpl->tpl_vars['article']->value['uid']){?>
					<div><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/dynamic/mod/id/<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">编辑</a></div>
					<div class="nav"> </div>
				<?php }?>
			</div>
			<div class="nav"> </div>
			<div id="summary"><b>&nbsp;&nbsp;摘要:</b>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>
</div>
			<div class="nav"> </div>
			<div id="ccont">
				<?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

			</div>
			<div class="nav"> </div>
			<div class="dbar">
				<ul>
					<li>
						<span class="prve">上一篇：</span> 
						<?php if ($_smarty_tpl->tpl_vars['prevArticle']->value==false){?>
							这是第一篇，上一篇没有文章
						<?php }else{ ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/aid/<?php echo $_smarty_tpl->tpl_vars['prevArticle']->value['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['prevArticle']->value['title'],100);?>
</a>
						<?php }?>

					</li> 
					<li>
						<span class="next">下一篇：</span>
						<?php if ($_smarty_tpl->tpl_vars['nextArticle']->value==false){?>
							这是最后一篇，下一篇没有文章
						<?php }else{ ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/aid/<?php echo $_smarty_tpl->tpl_vars['nextArticle']->value['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['nextArticle']->value['title'],100);?>
</a>
						<?php }?>							
					</li>
				</ul>
			</div>
		</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['article']->value['allow']=="1"){?>
		<div class="nav"></div>
		
		<div id="comments" class="article">
			<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/clock.gif" height="64" border="0" >评论加载中............
		</div>
		<script>
		
			var cache=new Array();
			function setPage(url){
				var comments=document.getElementById("comments");
				if(!cache[url]) {
					
					Ajax().get(url, function(data){
						comments.innerHTML=data;
						cache[url]=data;
						
					});
				}else{
					comments.innerHTML=cache[url];
				}	
			}
			function getComment(page){
				if(page=='')
					var url='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/comment/aid/<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
';
				else
					var url='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/comment/aid/<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
/page/'+page;
				cache[url]=false;
				setPage(url);
			}
			getComment('');
		</script>
		<?php }?>
		
		<?php if ($_SESSION['login']==1&&$_SESSION['sendcomment']=="1"&&$_smarty_tpl->tpl_vars['allow']->value=="1"){?>
		<div class="nav"></div>
		<div class="article" style="border-top:1px solid #BBB">	
		
			<div class="dd">
			
			
					<form name="frm" method="post">
					<span id="ts">请自觉遵守互联网相关的政策法规，严禁发布色情、暴力、反动的言论.</span>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;评价:
					<input type="radio" name="cmt" checked value="0"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/cmt-neu.gif" border=0>中
					<input type="radio" name="cmt"  value="1"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/cmt-good.gif" border=0>好评			
					<input type="radio" name="cmt"  value="-1"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/cmt-bad.gif" border=0>差评
					
					<textarea name="comment"></textarea>
					<?php echo $_smarty_tpl->tpl_vars['ck']->value;?>

					<div class="subo"> 
						<input id="but" type="button" class="button" onclick="send()" style="height:20px" value="发表评论">

			&nbsp;&nbsp;网友评论仅供网友表达个人看法，并不表明本站同意其观点或证实其描述。		
					</div>	
					</form>
			
			</div>	
		
		</div>
		<?php }?>	
		
		<div class="nav"></div>

	<script>
	var page='';
	var but=document.getElementById("but");
	//评论的id,在回复和编辑时将数据库的原评论ID取出
	var cid=0;  
	//获取用于提示回复的消息框对象
	var ts=document.getElementById("ts");
	
	//获取评价的选项函数						
	function getCmt(){
		var cmts=document.frm.cmt;
		for(var i=0; i<cmts.length; i++){
			if(cmts[i].checked)
				return cmts[i].value;
		}
	}
	function setCmt(cmt){
		//获取所有评价
		var cmts=document.getElementsByName("cmt");
		//设置原评价					
		for(var i=0; i<cmts.length; i++){
			if(cmt==cmts[i].value)
				cmts[i].checked=true;
			else
				cmts[i].checked=false;
		}
	}
	//设置提交的操作，如果是回复和添加值为addc,如果是编辑则为modc
	var act="addc";
				
	//这个方法用来汇集数据并使用Ajax向服务器发送							
	function send(){
		//获取CK中输入的内容
		var comment=escape(CKEDITOR.instances.comment.getData());
		var cmt=getCmt(); //获取选择的评价	
		//获取评论的用户ID
						
		var uid='<?php echo $_SESSION['id'];?>
';
		
		//如果为addc说明是添加操作	
		if(act=="addc"){
			//获取文章ID	
			var aid='<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
';
			//形成需要添加数据的json
			var dobj={content:comment,cmt:cmt,aid:aid,uid:uid,cid:cid,title:'<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
'};
		//如果不是添加，则为编辑数据				
		}else{
			//形成需要修改的数据
			var dobj={content:comment,id:cid,cmt:cmt};
		}					
		
		//以下是验证数据不能为空，如果是空格或回车是有<p>和&nbsp;的所以要去掉
		var check=comment.replace(/\<p\>/ig, ' ');//去掉<p>标记
		var check=check.replace(/\<\/p\>/ig, ' ');//去掉</p>标记
		check=check.replace(/\&nbsp\;/ig, " ");	  //去掉&nbsp;标记
		
		if(!check.match(/\S/)){
				alert("你还没有输出评论内容！");
				CKEDITOR.instances.comment.setData('');
				CKEDITOR.instances.comment.focus();
		}else{
			//使用Ajax向数据库发送数据
			Ajax().post('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/dynamic/'+act, dobj, function(data){
			
				//如果服务器返回ok则表示服务器处理成功
				if(data=="ok"){
					//重新调用这个页的评论信息 “刷新”
					getComment(page);
					//将提示内容回到原内容
						
					if(act=="addc"){
						ts.innerHTML='<span class="tsmess">添加成功</span>';
					}else{
						ts.innerHTML='<span class="tsmess">编辑成功</span>';
					}

				}else{
					ts.innerHTML='<span class="tsmess">操作失败,请重新编辑</span>';		
				}
							
				setTimeout(function(){
					ts.innerHTML="请自觉遵守互联网相关的政策法规，严禁发布色情、暴力、反动的言论.";
					//重新将评论ID设置为空，下将为默认添加

					but.value="发表评论";
	
				},3000);
				//处理成功就将CK内容设空
				CKEDITOR.instances.comment.setData('');
				CKEDITOR.instances.comment.focus();
				cid=0;
				//重新将提交位置设置为添加操作中
				act='addc';
				page='';
				setCmt(0);
			});
		}
	}
	
	//设置回复的函数，id为反回的评论ID， username为回复的用户名，time为原时间
	function quote(id, username, time){
		//回复评论的ID	
		cid=id;
		//提示用户正在回复
		ts.innerHTML='<span class="tsmess">正在对<b> '+username+'</b> 于 '+time+' 发表的评论进行回复!</span>';
		//清空CK数据
		CKEDITOR.instances.comment.setData('');
	
		//设置CK焦点
		CKEDITOR.instances.comment.focus();

		but.value="回复评论";
								
	}
	
	//设置编辑的函数， id为反回的评论ID，content为编辑的内容， cmt为原评价
	function editc(id,content,cmt,time,p){
		page=p;
		cid=id;
		//提示用户正在编辑
		ts.innerHTML='<span class="tsmess">正在对<b> 自己 </b> 于 '+time+' 发表的评论进行编辑!</span>';

		//将要编辑的数据放回CK中
		CKEDITOR.instances.comment.setData(content);
		CKEDITOR.instances.comment.focus();
		setCmt(cmt)
		//将Ajax的请求位置设置为编辑的操作中
		act="modc";
		but.value="编辑评论";							
	}

	function delc(id, page){
		Ajax().post('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/dynamic/delc', {id:id}, function(data){
			
			//如果服务器返回ok则表示服务器处理成功
			if(data=="ok"){
				//重新调用这个页的评论信息 “刷新”
				getComment(page);
			}
		});
	}

</script>		
	</div>

	<div id="sidebar">
		<div class="sidebox">
       			<div class="dt"><strong>相关文章</strong></div>
        		<div class="dd dot">
          			<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['article'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['article']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['name'] = 'article';
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['conns']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total']);
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/aid/<?php echo $_smarty_tpl->tpl_vars['conns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['conns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['title'],25);?>
</a></li>
					<?php endfor; else: ?>
						<li>本类暂无相关文章</li>
					<?php endif; ?>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
		<div class="sidebox">
       			<div class="dt"><strong>推荐文章</strong></div>
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
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/aid/<?php echo $_smarty_tpl->tpl_vars['recommends']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rec']['index']]['id'];?>
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
       			<div class="dt"><strong>热门文章</strong></div>
        		 <div class="dd dot">
          			<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["h"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["h"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['name'] = "h";
$_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['hots']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["h"]['total']);
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/aid/<?php echo $_smarty_tpl->tpl_vars['hots']->value[$_smarty_tpl->getVariable('smarty')->value['section']['h']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['hots']->value[$_smarty_tpl->getVariable('smarty')->value['section']['h']['index']]['title'],18);?>
</a>&nbsp;&nbsp;<span style="font-size:10px">(浏览<span class="redh"><?php echo $_smarty_tpl->tpl_vars['hots']->value[$_smarty_tpl->getVariable('smarty')->value['section']['h']['index']]['views'];?>
</span>次)</span></li>
					<?php endfor; else: ?>
						<li>目前还没有任何热门文章</li>
					<?php endif; ?>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
	</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>