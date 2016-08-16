<{include file="user/header.tpl"}>
<body style="background:white;margin:20px;">
<div class="top">	
	<div class="uhead">
		<h3>账号设置</h3>
	</div>
		
	<div class="ucontent">
		<div class="uzcolor"><a href="<{$url}>/set">账户资料</a> | <b><a href="<{$url}>/pset">密码设置</a></b> | <a href="<{$url}>/tset">头像设置</a></div> 
		<{if $confirm eq "yes"}>	
			<div style="color:green;">密码修改成功！</div>
		<{elseif $confirm eq "no"}>
			<div style="color:red;">密码修改失败！</div>
		<{elseif $confirm eq "error"}>
			<div style="color:red;">原密码输出错误！</div>
		<{elseif $confirm eq "confirm"}>
			<div style="color:red;">两次密码输入不一至！</div>
		<{/if}>
		<form action="<{$url}>/pset" method="post">
			<div>
			
				<b>当前密码：</b><br>
				<input type="password" name="cuserpwd"  style="height:30px" size="40" value="">
			</div>
			
			<div>
				<b>新密码：</b><br> 
				<input type="password" name="userpwd" style="height:30px" size="40" value="">
			</div>

			<div>
				<b>确认新密码：</b><br>
				<input type="password" name="repwd"  style="height:30px" size="40" value="">
			</div>

			<div style="height:32px;margin-top:10px">
				<input class="button" name="sub" style="width:80px;height:30px;font-size:16px;font-weight:bold" type="submit" value="提交">
				<input class="button" style="width:80px;height:30px;font-size:16px;font-weight:bold" type="reset" value="撤消">
			</div>

		</form>						
	</div>
</div>
</body>
<{include file="user/footer.tpl"}>
				
