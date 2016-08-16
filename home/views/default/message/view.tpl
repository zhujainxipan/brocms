<{include file="user/header.tpl"}>
<body style="background:white;margin:20px;">
<div class="top">	
	<div class="uhead">
		<h3>站内信</h3>
	</div>
		
	<div class="ucontent">
		<div style="float:left;" class="uzcolor"><b><a href="<{$url}>/index">收件箱</a></b><{if $smarty.session.sendmessage eq 1}> | <a href="<{$url}>/write">写消息</a><{/if}></div>
		
		
		<div style="float:left; width:100%;height:40px;line-height:40px">
			标题：&nbsp;<b><{$message.title}></b>
		</div>

		<div style="float:left;width:100%;height:40px;float:left;margin-bottom:20px;">
			<div style="height:40px;width:40px;margin-right:20px;float:left;"><img src="<{if $user.upic}><{$public}>/uploads/user/<{$user.upic}><{else}><{$public}>/images/<{$user.sex}>.gif<{/if}>" width="40" height="40"></div>
			<div style="height:40px;float:left;">
				<a target="_top" href="<{$app}>/user/index/uid/<{$user.id}>"><{$user.username}></a><br>				发表于：<{$message.ptime|date_format:"%Y-%m-%d %H:%M:%S"}>
			</div>
		</div>
		
		<div style="float:left;width:90%;margin-bottom:20px;">
			<{$message.content}>
		</div>
		<form>
		<div style="clear:left;float:left;width:400px;">
			<{if $smarty.session.sendmessage eq 1}>
			<a style="background:#888;color:white;" href="<{$url}>/write/id/<{$message.id}>">&nbsp;回 复&nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<{/if}>
			<a style="background:#888;color:white;" href="<{$url}>/del/id/<{$message.id}>">&nbsp;删 除&nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a style="background:#888;color:white;" href="javascript:history.back()">&nbsp;返 回&nbsp;</a>
		</div>
		</form>
	</div>
</div>
</body>
<{include file="user/footer.tpl"}>
				

