<{include file="user/header.tpl"}>
<body style="background:white;margin:20px;">
<div class="top">	
	<div class="uhead">
		<h3>站内信</h3>
	</div>
		
	<div class="ucontent">
	
		<div class="uzcolor"><a href="<{$url}>/index">收件箱</a> | <b><a href="<{$url}>/write">写消息</a></b></div> 
		
		<{if $mess}>
			<div class="redh"><{$mess}></div>
		<{/if}>
		<form action="<{$url}>/write" method="post">
			<div>
			
				<b>收件人：</b><br>
				<{if $user.id}>
					<a target="_top" href="<{$app}>/user/index/uid/<{$user.id}>"><{$user.username}></a>
						<input type="hidden" name="revicename"   size="20" value="<{$user.username}>">
				<{elseif $smarty.get.revicename}>
					<{$smarty.get.revicename}>
					<input type="hidden" name="revicename"   size="20" value="<{$smarty.get.revicename}>">
				<{else}>
					<input type="text" name="revicename"   size="20" value="">&nbsp;&nbsp;<span style="font-size:12px">通过填写用户名称向指定用户发送站内信</span>
				<{/if}>
			</div>
			
			<div>
				<b>主题：</b><br> 
				<input type="text" name="title"  size="40" value="<{if $message.title}>回复：<{$message.title}><{/if}>">
			</div>

			<div>
				<b>内容：</b><br>
				<textarea cols="40" rows="4" name="content" style="height:60px"><{$user.info}></textarea><br>
				<span style="font-size:12px">请输入个人简介，简介内容不超过40字。</span>
			</div>

			<div style="height:32px;margin-top:10px">
				<input class="button" name="sub" style="width:80px;height:30px;font-size:16px;font-weight:bold" type="submit" value="寄 出">
			
			</div>
		
		</form>				
	</div>
</div>
</body>
<{include file="user/footer.tpl"}>
				
