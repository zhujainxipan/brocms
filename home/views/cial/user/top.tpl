<{include file="user/header.tpl"}>	
	<div id="top">
			<div class="left">
				<a target="_top" href="<{$app}>/user/index/uid/<{$smarty.session.id}>"><img  border="0" border="0" src="<{$res}>/images/logo.gif"></a><{if $smarty.session.isLogin}>&nbsp;&nbsp;&nbsp;&nbsp;<a target="_top" href="<{$root}>/admin.php/index/index">进入管理平台</a><{/if}>
			</div>

		
			<div class="right_tool">
					<ul>
						<li><a href="<{$app}>/index/index" target="_top"><img border=0 src="<{$res}>/images/exit4.gif"></a></li>
						<li><a href="<{$app}>/login/logout" onclick="return confirm('你确定要退出系统吗？')" target="_top"><img border=0 src="<{$res}>/images/exit3.gif"></a></li>
					</ul>
			</div>
			<div class="right_user">
				<b>欢迎您-</b><a target="_top" href="<{$app}>/user/index/uid/<{$smarty.session.id}>"><{$smarty.session.username}></a> &nbsp;&nbsp;
			</div>
		</div>
<{include file="user/footer.tpl"}>
