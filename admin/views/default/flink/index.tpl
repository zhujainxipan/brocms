<{include file="public/header.tpl"}>
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>友情链接管理>管理友情连接</div>
			</div>	
		    <{ include file="public/title.tpl" }>
		    <form  method="post" action="<{$url}>/order" >
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="list_width width_font">网站名称</span>
					
						<span class="list_width width_font" style="width:90px">网站LOGO</span>
						<span class="list_width width_font" style="width:80px">联系人</span>
						<span class="list_width width_font">添加时间</span>
						<span class="list_width width_font">操&nbsp;&nbsp;作</span>
					</li>
				        <{ section name=doc loop=$links }>	
							<li class="<{if $smarty.section.doc.index is even}>light-row<{else}>dark-row<{/if}>" style="<{if $links[doc].audit eq 0}>background:#FAECBA;<{/if}>padding-top:2px; padding-bottom:2px">
					
							<span class="list_width"><input type="text" name="ord[]" style="width:20px" maxlength="3" value="<{ $links[doc].ord }>">&nbsp;<a href="<{$links[doc].url}>" target="_blank"><{ $links[doc].webname }></a></span>
						
							<input type="hidden" name="ids[]" value="<{ $links[doc].id }>">
							<span id="logo" class="list_width" style="width:90px"><img height="30" src="<{$public}>/uploads/logos/<{ $links[doc].logo}>"></span>
							<span class="list_width" style="width:80px"><{ $links[doc].rname}></span>
							<span class="list_width"><{ $links[doc].dtime|date_format:"%Y-%m-%d" }></span>
				
							<span class="list_width" style="width:160px;">
						
							【<a href="<{$url}>/mod/id/<{ $links[doc].id }>">修改</a>】
							【<a onclick="return confirm('确定要删除友情链接<{ $links[doc].webname }>吗？')" href="<{$url}>/del/id/<{ $links[doc].id }>">删除</a>】
							</span>
						</li>
					<{ sectionelse }>
						<li class="light-row">
							暂无友情链接！
						</li>
					<{ /section }>
				
					<li class="dark-row">
						<span class="col_width" style="margin-left:20px;width:300px"> 
							<input class="button" name="order" type="submit" value="改变显示顺序">	
							&nbsp;&nbsp;&nbsp;&nbsp;
							<a  style='<{if $smarty.get.display eq "off"}>background:#888;color:white<{/if}>'  href="<{$url}>/index/display/off">不显示</a>&nbsp;|
							<a  style='<{if $smarty.get.display eq "on"}>background:#888;color:white<{/if}>' href="<{$url}>/index/display/on">显示</a>
						 </span> 
					
					</li>
				</ul>	
			</div>
                    </form>
		</div>
<{include file="public/footer.tpl"}>

