<{include file="user/header.tpl"}>
<body style="background:#EAEAEA">
<div id="umenu" class="top">	
	<div class="uimg">
		<img width="70" alt="<{$user.username}>" height="70" src="<{if $user.upic}><{$public}>/uploads/user/<{$user.upic}><{else}><{$public}>/images/<{$user.sex}>.gif<{/if}>" />
	</div>
	<div class="uset">
		<div>
			<b><{$user.username}></b>&nbsp;&nbsp;&nbsp;&nbsp;
			<{if $smarty.session.id ne $user.id}>
				<{if $ygz}>
					<span class="follow" onclick="delfollow('<{$url}>/delfollow')">取消关注</span>
				<{else}>
					<span class="follow" onclick="setfollow('<{$url}>/follow')">添加关注</span>
				<{/if}>

			<{/if}>

				<script>
					function delfollow(url){
						Ajax().post(url, {uid:'<{$user.id}>'}, function(data){
							if(data=='ok') {
								window.location.reload();
							}
						});
					
					
					}
					function setfollow(url){
						Ajax().post(url, {uid:'<{$user.id}>',username:'<{$user.username}>'}, function(data){
							if(data=='ok') {
								window.location.reload();
							}
						});
					
					
					}
				</script>
		
		</div>
		<{if $smarty.session.id eq $smarty.get.uid}>
			<div>[ <a href="<{$url}>/set" target="main">账户设置</a> ] [ <a target="main" href="<{$app}>/message/index">站内信</a> ] </div>
		<{else}>
			<div>[ <a target="main" href="<{$app}>/message/write/revicename/<{$user.username}>">发消息</a> ] </div>
		<{/if}>
		<div>
		</div>
		<div class="">级别： <span class="redh"><{$smarty.session.groupname}></span></div>
	
	</div>
	<div class="umess fg">
		<div style="border-right:2px solid #CCC">
			<span  class="redh"><{$followednum}></span><br>
			<span><a target="main" href="<{$url}>/allfollowed/uid/<{$user.id}>">粉丝</a></span>
		</div>
		<div style="border-right:2px solid #CCC">
			<span  class="redh"><{$followingnum}></span><br>
			<span><a target="main" href="<{$url}>/allfollowing/uid/<{$user.id}>">关注</a></span>
		</div>
		<div>
			<span class="redh"><{$user.views}></span><br>
			<span>访客</span>
		</div>
	</div>
	<div class="umess" style="text-indent:0.8cm;padding:10px;">
		<{$user.info}>
	</div>
	
	<div>
		<{if $smarty.session.sendarticle eq "1" && $smarty.session.id eq $smarty.get.uid}>
		<span style="font-size:16px;font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;<a target="main" href="<{$app}>/dynamic/add">发表文章</a></span>
		<{/if}>
	<br><hr align="center" width="90%"></div>
	
	<div class="umess" style="padding-left:15px;">
		<ul class="mydt">	
			<li><a target="main" href="<{$app}>/dynamic/index/uid/<{$user.id}>/otype/1">我的文章</a>(<span class="redh"><b><{$articlenum}></b></span>)</li>
			<li><a target="main" href="<{$app}>/dynamic/index/uid/<{$user.id}>/otype/3">我的收藏</a>(<span class="redh"><b><{$collectionnum}></b></span>)</li>
			<li><a target="main" href="<{$app}>/dynamic/index/uid/<{$user.id}>/otype/2">我的评论</a>(<span class="redh"><b><{$commentnum}></b></span>)</li>
			<li><a target="main" href="<{$app}>/dynamic/index/uid/<{$user.id}>/otype/4">我的推荐</a>(<span class="redh"><b><{$recommendnum}></b></span>)</li>
			
		</ul>
	</div>

	<div class="gf">
		<div><span style="font-size:16px;font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;<a target="main" href="<{$url}>/allfollowed/uid/<{$user.id}>">粉 丝</a></span><br><hr align="center" width="90%"></div>
		<div style="padding-left:10px;">
			<{section loop=$followeds name='ed'}>
			<div style="width:40px;margin:5px;"><a target="_top" href="<{$url}>/index/uid/<{$followeds[ed].id}>"><img src="<{$public}><{if $followeds[ed].upic}>/uploads/user/<{$followeds[ed].upic}><{else}>/images/<{$followeds[ed].sex}>.gif<{/if}>" width="40" height="40"></a></div>
			<{/section}>
		
		
		</div>


	</div>
	<div class="gf">
		<div><span style="font-size:16px;font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;<a target="main" href="<{$url}>/allfollowing/uid/<{$user.id}>">关 注</a></span><br><hr align="center" width="90%"></div>
		<div style="padding-left:10px;">
			<{section loop=$followings name='ing'}>
			<div style="width:40px;margin:5px;"><a target="_top" href="<{$url}>/index/uid/<{$followings[ing].id}>"><img src="<{$public}><{if $followings[ing].upic}>/uploads/user/<{$followings[ing].upic}><{else}>/images/<{$followings[ing].sex}>.gif<{/if}>" width="40" height="40"></a></div>
			<{/section}>
		
		</div>

	</div>

</div>
</body>
<{include file="user/footer.tpl"}>
				
