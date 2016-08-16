<{include file="public/header.tpl"}>
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>公告管理>管理公告</div>
			</div>	
		    <{ include file="public/title.tpl" }>
		    <form  method="post" action="<{$url}>/order" >
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="list_width width_font" style="width:250px;">公告标题</span>
					
						<span class="list_width width_font" style="width:100px;">起始时间</span>
						<span class="list_width width_font" style="width:100px;">结束时间</span>
					
						<span class="list_width width_font">操&nbsp;&nbsp;作</span>
					</li>
				        <{ section name=doc loop=$notices }>	
							<li class="<{if $smarty.section.doc.index is even}>light-row<{else}>dark-row<{/if}>" style="<{if $notices[doc].display eq 0}>background:#FAECBA;<{/if}>padding-top:2px; padding-bottom:2px">
					
							<span class="list_width" style="width:250px"><input type="text" name="ord[]" style="width:20px" maxlength="3" value="<{ $notices[doc].ord }>">&nbsp;<a style="color:#<{$notices[doc].color}>" target="_blank" href="<{$root}>/index.php/index/notice/id/<{$notices[doc].id}>"><{ $notices[doc].title }></a></span>
						
							<input type="hidden" name="ids[]" value="<{ $notices[doc].id }>">
							<span class="list_width" style="width:100px;<{if $notices[doc].starttime ge $smarty.now}>color:blue;<{/if}>"><{ $notices[doc].starttime|date_format:"%Y-%m-%d"}></span>
							<span class="list_width <{if $notices[doc].endtime le $smarty.now and $notices[doc].endtime ne '0'}>red_font<{/if}>" style="width:100px;"><{if $notices[doc].endtime eq 0}>长期显示<{else}><{ $notices[doc].endtime|date_format:"%Y-%m-%d"}><{/if}></span>
				
							<span class="list_width" style="width:120px;">
						
							【<a href="<{$url}>/mod/id/<{ $notices[doc].id }>">修改</a>】
							【<a onclick="return confirm('确定要删除公告<{ $notices[doc].title }>吗？')" href="<{$url}>/del/id/<{ $notices[doc].id }>">删除</a>】
							</span>
						</li>
					<{ sectionelse }>
						<li class="light-row">
							暂无公告！
						</li>
					<{ /section }>
				
					<li class="dark-row">
						<span class="col_width" style="margin-left:20px;width:540px"> 
							<input class="button" name="order" type="submit" value="改变显示顺序">							  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a style='<{if $smarty.get.action eq "1"}>background:#888;color:white<{/if}>' href="<{$url}>/index/action/1">显示</a>&nbsp;|
							<a style='<{if $smarty.get.action eq "2"}>background:#888;color:white<{/if}>' href="<{$url}>/index/action/2">不显示</a>&nbsp;|
							<a style='<{if $smarty.get.action eq "3"}>background:#888;color:white<{/if}>' href="<{$url}>/index/action/3">无期限的</a>&nbsp;|
							<a style='<{if $smarty.get.action eq "4"}>background:#888;color:white<{/if}>' href="<{$url}>/index/action/4">过期的</a>&nbsp;|
							<a style='<{if $smarty.get.action eq "5"}>background:#888;color:white<{/if}>' href="<{$url}>/index/action/5">没到期的</a>&nbsp;|
							<a style='<{if $smarty.get.action eq ""}>background:#888;color:white<{/if}>' href="<{$url}>/index">全部显示</a>&nbsp;&nbsp;
						 </span> 
					
					</li>
				</ul>	
			</div>
                    </form>
		</div>
<{include file="public/footer.tpl"}>

