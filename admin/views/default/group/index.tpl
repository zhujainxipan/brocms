<{include file="public/header.tpl"}>
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>用户组管理>编辑用户组</div>
			</div>	
		    <{ include file="public/title.tpl" }>	  
			<div class="msg-box">
				<ul class="viewmess">
				
				
					<li class="dark-row">
						<span class="list_width width_font">用户名</span>
						<span class="list_width width_font" style="width:400px">用户组描述</span>
						<span class="list_width width_font">操&nbsp;&nbsp;作</span>
					</li>
				        <{ section name=doc loop=$groups }>
						<li class="<{if $smarty.section.doc.index is even}>light-row<{else}>dark-row<{/if}>" style="padding-top:10px; padding-bottom:10px">
							
							<span style="font-weight:bold" class="list_width"><a href="<{$app}>/user/index/gid/<{$groups[doc].id}>"><{ $groups[doc].groupname }></a></span>
							
							<span class="list_width" style="width:400px"><{ $groups[doc].description|truncate:"50" }></span>
						
							<span class="list_width" style="width:160px;">
						
							【<a href="<{$url}>/mod/id/<{ $groups[doc].id }>">修改</a>】
							<{ if $groups[doc].id ne 1 }>
							【<a onclick="return confirm('确定要删除用户组<{ $groups[doc].username }>吗？')" href="<{$url}>/del/id/<{ $groups[doc].id }>">删除</a>】
							<{ /if }>
							</span>
						</li>
					<{ /section }>
				</ul>	
			</div>
                   
		</div>
<{include file="public/footer.tpl"}>	


