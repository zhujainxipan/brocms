<{include file="user/header.tpl"}>
<body style="background:white;margin:20px;">
<div  class="top">	
	<div class="uhead">
		<h3>账号设置</h3>
	</div>
		
	<div class="ucontent">
		<div class="uzcolor"><b><a href="<{$url}>/set">账户资料</a></b> | <a href="<{$url}>/pset">密码设置</a> | <a href="<{$url}>/tset">头像设置</a></div> 

		<form action="<{$url}>/set" method="post">
			<div>
				<input type="hidden" name="id" value="<{$user.id}>">
				<b>用户邮箱：</b><br>
				<input type="text" name="email" disabled style="height:30px" size="40" value="<{$user.email}>">
			</div>
			
			<div>
				<b>用户名称：</b><br> 
				<input type="text" name="name" disabled style="height:30px" value="<{$user.username}>">
			</div>

			<div>
				<b>个人简介：</b><br>
				<textarea cols="30" rows="3" name="info" style="height:60px"><{$user.info}></textarea><br>
				<span style="font-size:12px">请输入个人简介，简介内容不超过40字。</span>
			</div>

			<div style="height:32px;margin-top:10px">
				<input class="button" name="sub" style="width:80px;height:30px;font-size:16px;font-weight:bold" type="submit" value="提交">
				<input class="button" style="width:80px;height:30px;font-size:16px;font-weight:bold" type="reset" value="撤消">
			</div>
			<{if $flush}>
				<script>
					window.top.frames["menu"].location.reload(true);
				</script>
			<{/if}>
		</form>				
	</div>
</div>
</body>
<{include file="user/footer.tpl"}>
				
