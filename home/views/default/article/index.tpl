<{ include file="public/header.tpl" }>
	<div id="main">
		<div class="article">
		<div class="dt">
			<div>
				当前位置:	
				<{ section name=loc loop=$locs }>
					<a href="<{$app}>/list/index/pid/<{ $locs[loc].id }>" title="<{ $locs[loc].description }>"><{ $locs[loc].title|truncate:18 }></a> &gt;
				<{ /section }>
					<{ $article.title|truncate:27 }>
				</div>	

				<{nocache}><span class="more"><span class="tj" onclick="setts('<{$app}>/dynamic/recommend', 4,'<{$article.title}>', this,'推荐')"><{if $recommend}>已推荐<{else}>推荐<{/if}></span>(<span id="ts4" class="redh"></span>)  <span class="sc" onclick="setts('<{$app}>/dynamic/collection', 3, '<{$article.title}>', this, '收藏')"><{if $collection}>已收藏<{else}>收藏<{/if}></span>(<span id="ts3" class="redh"></span>)</span><{/nocache}>

			</div>
				<script>
					function getts(url, otype){
					
						var obj=document.getElementById("ts"+otype);
						Ajax().post(url, {cid:<{$article.id}>,otype:otype},function(data){
							obj.innerHTML=data;
					
						});
					}
					getts('<{$app}>/dynamic/gts', 4);
					getts("<{$app}>/dynamic/gts", 3);					

					function setts(url, otype, title,obj,font){
						<{nocache}>
							var dl='<{$smarty.session.login}>';
						<{/nocache}>

						if(dl=="1") {
							if(obj.innerHTML==font) {
								Ajax().post(url, {cid:<{$article.id}>,title:title,otype:otype}, function(data){
									if(data=='ok'){
										obj.innerHTML='已'+font;
										getts('<{$app}>/dynamic/gts', otype);
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
				<h1><{ $article.title|truncate:100 }></h1>
				
				<div class="nav"> </div>
				<div>【 作者：<span class="fontcolor"><a href="<{$app}>/user/index/uid/<{$article.uid}>"><{ $article.author }></a></span>  &nbsp;&nbsp;&nbsp;&nbsp;来源： <span class="fontcolor"><{ $article.comeFrom }></span>&nbsp;&nbsp;&nbsp;&nbsp;点击数: <span class="fontcolor"><{ $article.views }></span>      &nbsp;&nbsp;&nbsp;&nbsp;更新时间： <span class="fontcolor"><{ $article.posttime|date_format:"%Y-%m-%d" }></span>   】</div>
				<div class="nav"> </div>
				<{if $smarty.session.id eq $article.uid}>
					<div><a href="<{$app}>/dynamic/mod/id/<{$article.id}>">编辑</a></div>
					<div class="nav"> </div>
				<{/if}>
			</div>
			<div class="nav"> </div>
			<div id="summary"><b>&nbsp;&nbsp;摘要:</b>&nbsp;&nbsp;<{ $article.summary }></div>
			<div class="nav"> </div>
			<div id="ccont">
				<{ $article.content }>
			</div>
			<div class="nav"> </div>
			<div class="dbar">
				<ul>
					<li>
						<span class="prve">上一篇：</span> 
						<{ if $prevArticle eq false }>
							这是第一篇，上一篇没有文章
						<{ else }>
							<a href="<{$url}>/index/aid/<{ $prevArticle.id }>"><{ $prevArticle.title|truncate:100 }></a>
						<{ /if }>

					</li> 
					<li>
						<span class="next">下一篇：</span>
						<{ if $nextArticle eq false }>
							这是最后一篇，下一篇没有文章
						<{ else }>
							<a href="<{$url}>/index/aid/<{ $nextArticle.id }>"><{ $nextArticle.title|truncate:100 }></a>
						<{ /if }>							
					</li>
				</ul>
			</div>
		</div>
		</div>
		<{if $article.allow eq "1" }>
		<div class="nav"></div>
		
		<div id="comments" class="article">
			<img src="<{$res}>/images/clock.gif" height="64" border="0" >评论加载中............
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
					var url='<{$url}>/comment/aid/<{$article.id}>';
				else
					var url='<{$url}>/comment/aid/<{$article.id}>/page/'+page;
				cache[url]=false;
				setPage(url);
			}
			getComment('');
		</script>
		<{/if}>
		<{nocache}>
		<{if $smarty.session.login eq 1 && $smarty.session.sendcomment eq "1" && $allow eq "1" }>
		<div class="nav"></div>
		<div class="article" style="border-top:1px solid #BBB">	
		
			<div class="dd">
			
			
					<form name="frm" method="post">
					<span id="ts">请自觉遵守互联网相关的政策法规，严禁发布色情、暴力、反动的言论.</span>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;评价:
					<input type="radio" name="cmt" checked value="0"><img src="<{$res}>/images/cmt-neu.gif" border=0>中
					<input type="radio" name="cmt"  value="1"><img src="<{$res}>/images/cmt-good.gif" border=0>好评			
					<input type="radio" name="cmt"  value="-1"><img src="<{$res}>/images/cmt-bad.gif" border=0>差评
					
					<textarea name="comment"></textarea>
					<{ $ck }>
					<div class="subo"> 
						<input id="but" type="button" class="button" onclick="send()" style="height:20px" value="发表评论">

			&nbsp;&nbsp;网友评论仅供网友表达个人看法，并不表明本站同意其观点或证实其描述。		
					</div>	
					</form>
			
			</div>	
		
		</div>
		<{/if}>	
		<{/nocache}>
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
		<{nocache}>				
		var uid='<{$smarty.session.id}>';
		<{/nocache}>
		//如果为addc说明是添加操作	
		if(act=="addc"){
			//获取文章ID	
			var aid='<{$article.id}>';
			//形成需要添加数据的json
			var dobj={content:comment,cmt:cmt,aid:aid,uid:uid,cid:cid,title:'<{$article.title}>'};
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
			Ajax().post('<{$app}>/dynamic/'+act, dobj, function(data){
			
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
		Ajax().post('<{$app}>/dynamic/delc', {id:id}, function(data){
			
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
					<{ section name=article loop=$conns }>
						<li><a href="<{$url}>/index/aid/<{ $conns[article].id }>"><{ $conns[article].title|truncate:25 }></a></li>
					<{ sectionelse }>
						<li>本类暂无相关文章</li>
					<{ /section }>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
		<div class="sidebox">
       			<div class="dt"><strong>推荐文章</strong></div>
        		 <div class="dd dot">
           			<ul>
					<{ section name="rec" loop=$recommends }>
						<li><a href="<{$url}>/index/aid/<{ $recommends[rec].id }>"><{ $recommends[rec].title|truncate:25 }></a> <span style="font-size:10px">(<span class="redh"><{$recommends[rec].recommend}></span>人推荐)</span></li>
					<{ sectionelse }>
						<li>本类暂无推荐文章</li>
					<{ /section }>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
		<div class="sidebox">
       			<div class="dt"><strong>热门文章</strong></div>
        		 <div class="dd dot">
          			<ul>
					<{ section name="h" loop=$hots }>
						<li><a href="<{$url}>/index/aid/<{ $hots[h].id }>"><{ $hots[h].title|truncate:18 }></a>&nbsp;&nbsp;<span style="font-size:10px">(浏览<span class="redh"><{$hots[h].views}></span>次)</span></li>
					<{ sectionelse }>
						<li>目前还没有任何热门文章</li>
					<{ /section }>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
	</div>
	
<{ include file="public/footer.tpl" }>


