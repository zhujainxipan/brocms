<{include file="public/header.tpl"}>
	<div id="main">
		<div class="head-dark-box">
			<div class="tit">系统管理>常规设置>系统信息</div>
		</div>	
		<{ include file="public/title.tpl" }>
		<div class="msg-box">
			<ul class="viewmess">
				<{ foreach name=info key=key item=item from=$sysinfo }>
					<{ if $smarty.foreach.info.iteration is even }>
						<li class="dark-row">
					<{ else }>
						<li class="light-row">
					<{ /if }> 
						<span class="col_width"><{ $key }></span><{ $item }>
					</li>
				<{ /foreach }>
			</ul>		
		</div>
	</div>
<{include file="public/footer.tpl"}>	


