<{include file="user/header.tpl"}>
<body style="background:white;margin:20px;">
<div class="top">	
	<div class="uhead">
		<h3> <{$tit}> </h3>
	</div>
		
	<div class="ucontent" style="padding-top:15px">
		<{section loop=$follows name='ls'}>
		<div class="edz">
			<div class="uhead">
				<a target="_top" href="<{$app}>/user/index/uid/<{$follows[ls].id}>"><img width="50"  height="50" src="<{$public}><{if $follows[ls].upic}>/uploads/user/<{$follows[ls].upic}><{else}>/images/<{$follows[ls].sex}>.gif<{/if}>" /></a>			
			</div>
			<div class="info">
				<div class="uname">
					<a target="_top" href="<{$app}>/user/index/uid/<{$follows[ls].id}>"><{$follows[ls].username}></a>
				</div>	

				<div class="uname">
					<span class="redh"><{$follows[ls].ednum}></span>粉丝 | <span class="redh"><{$follows[ls].ingnum}></span>关注
				</div>
			</div>
		</div>	
		<{sectionelse}>
			暂无
		<{/section}>
		<div style="width:100%;float:left;text-align:right">
			<{$fpage}>
		</div>
	</div>
</div>
</body>
<{include file="user/footer.tpl"}>
				
