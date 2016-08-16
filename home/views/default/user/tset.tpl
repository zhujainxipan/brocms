<{include file="user/header.tpl"}>
<body style="background:white;margin:20px;">
<div class="top">	
	<div class="uhead">
		<h3>账号设置</h3>
	</div>
		
	<div class="ucontent">
		<div class="uzcolor"><a href="<{$url}>/set">账户资料</a> | <a href="<{$url}>/pset">密码设置</a> | <b><a href="<{$url}>/tset">头像设置</a></b></div> 
		<{if $error}>
			<div class="redh"><{$error}></div>
		<{/if}>
		<form action="<{$url}>/tset" method="post" enctype="multipart/form-data">	
		<div class="uimg" style="margin-top:10px">
			<img width="80" alt="<{$smarty.session.username}>" height="80" src="<{$public}>/<{if $user.upic}>uploads/user/<{$user.upic}><{else}>images/<{$user.sex}>.gif<{/if}>" />
		</div>
		<div class="uset" style="width:350px;margin-top:10px;">
			<div>
			
				<input type="hidden" name="srcimg" value="<{$user.upic}>">
				<input type="file" name="upic" ><br>
				<p style="font-size:12px;line-height:20px;width:300px">
				请选择您计算机中的图片文件，文件需小于<span class="redh">500k</span><br>
				你可以上传<span class="redh">JPG</span>、<span class="redh">JPEG</span>、<span class="redh">GIF</span>或<span class="redh">PNG</span>文件。<br>
				</p>
				
			</div>
			
		

			<{if $flush}>
				<script>
					window.top.frames["menu"].location.reload(true);
				</script>
			<{/if}>
		
		</div>	
		<div style="width:450px;float:left;clear:left;margin-left:5px;height:32px">
				<input class="button" name="sub" style="width:80px;height:30px;font-size:16px;font-weight:bold" type="submit" value="上传">
			
		</div>
		</form>						
	</div>
</div>
</body>
<{include file="user/footer.tpl"}>
				
