<{include file="public/header.tpl"}>
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>幻灯片管理>管理幻灯片</div>
			</div>	
		    <{ include file="public/title.tpl" }>
		    <form  method="post" action="<{$url}>/order" >
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="list_width width_font" style="width:250px;">幻灯片标题</span>
					
						<span class="list_width width_font" style="width:100px;">起始时间</span>
						<span class="list_width width_font" style="width:100px;">结束时间</span>
					
						<span class="list_width width_font">操&nbsp;&nbsp;作</span>
					</li>
				        <{ section name=doc loop=$plays }>	
							<li class="<{if $smarty.section.doc.index is even}>light-row<{else}>dark-row<{/if}>" style="<{if $plays[doc].display eq 0}>background:#FAECBA;<{/if}>padding-top:2px; padding-bottom:2px">
					
							<span class="list_width" style="width:250px;"><input type="text" name="ord[]" style="width:20px" maxlength="3" value="<{ $plays[doc].ord }>">&nbsp;<a href="<{$app}>/article/mod/id/<{$plays[doc].aid}>"><{ $plays[doc].title }></a></span>
						
							<input type="hidden" name="ids[]" value="<{ $plays[doc].id }>">
							<span class="list_width" style="width:100px;<{if $plays[doc].starttime ge $smarty.now}>color:blue;<{/if}>"><{ $plays[doc].starttime|date_format:"%Y-%m-%d"}></span>
							<span class="list_width <{if $plays[doc].endtime le $smarty.now and $plays[doc].endtime ne '0'}>red_font<{/if}>" style="width:100px;"><{if $plays[doc].endtime eq 0}>长期显示<{else}><{ $plays[doc].endtime|date_format:"%Y-%m-%d"}><{/if}></span>
				
							<span class="list_width" style="width:120px;">
						
							【<a href="<{$url}>/mod/id/<{ $plays[doc].id }>">修改</a>】
							【<a onclick="return confirm('确定要删除幻灯片<{ $plays[doc].title }>吗？')" href="<{$url}>/del/id/<{ $plays[doc].id }>">删除</a>】
							</span>
						</li>
					<{ sectionelse }>
						<li class="light-row">
							暂无幻灯片
						</li>
					<{ /section }>
				
					<li class="dark-row">
						<span class="col_width" style="margin-left:20px;width:540px"> 
							<input class="button" name="order" type="submit" value="改变显示顺序">
  							 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

