<{include file="public/header.tpl"}>
		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理->文章管理->管理文章</div>
			</div>	
			<{ include file="public/title.tpl" }>
		    <form  method="post" action="<{$url}>/fpro/page/<{$page}><{if $smarty.get.pid}>/pid/<{$smarty.get.pid}><{/if}><{if $smarty.get.search}>/search/<{$smarty.get.search}><{/if}><{if $smarty.get.audit}>/audit/<{$smarty.get.audit}><{/if}>">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请按分类选择文档&nbsp;&nbsp; <{ $select }>	
					&nbsp;&nbsp; <input id="sea" type="text" value="<{$search}>"> <input type="button" onclick="search()" class="button" value="从分类中搜索">
					<script>
						var sel=document.getElementById("sel");
						
						sel.onchange=function(){
							var pid=this.options[this.selectedIndex].value;
							window.location="<{$url}>/index/pid/"+pid;
						}

						function search(){
							var pid=sel.options[sel.selectedIndex].value;
							var sval=document.getElementById("sea").value;	
							window.location="<{$url}>/index/pid/"+pid+"/search/"+sval;

						}
					</script>
					</li>
					
					<li class="dark-row">
						<span class="list_width width_font" style="width:190px">标题</span>
						<span class="list_width width_font">作&nbsp;&nbsp;者</span>
						<span class="list_width width_font" style="width:80px">添加时间</span>
						<span class="list_width width_font" style="width:40px;">评论</span>
						
						<span class="list_width width_font" style="width:40px;">审核</span>
					
						<span class="list_width width_font">操&nbsp;&nbsp;作</span>
					</li>
				        <{ section name=doc loop=$arts }>
						<li class="<{if $smarty.section.doc.index is even}>light-row<{else}>dark-row<{/if}>" style="padding-top:2px; padding-bottom:2px">
							<span class="list_width" style="width:190px"><input type="checkbox" name="id[]" value="<{ $arts[doc].id }>"><a href="<{$root}>/index.php/article/index/aid/<{$arts[doc].id}>" target="_blank"><{ $arts[doc].title|truncate:50 }></a></span>
							<span class="list_width"><{ $arts[doc].author }></span>
							<span class="list_width" style="width:80px"><{ $arts[doc].posttime|date_format:"%Y-%m-%d" }></span>
							<span class="list_width" style="width:40px;text-align:center">

								<{if $arts[doc].allow eq 1 }>
									<span onclick="set(this,'allow',<{$arts[doc].id}> )" style="color:#FE488B;cursor:pointer;">√</span>
								<{else}>
									<span onclick="set(this,'allow',<{$arts[doc].id}>)" style="color:#0000F6;cursor:pointer;">×</span>
								<{/if}>

							</span>
						
							<span class="list_width" style="width:40px;text-align:center">

								<{if $arts[doc].audit eq 1 }>
									<span onclick="set(this,'audit',<{$arts[doc].id}>)" style="color:#FE488B;cursor:pointer;">√</span>
								<{else}>
									<span onclick="set(this,'audit',<{$arts[doc].id}>)" style="color:#0000F6;cursor:pointer;">×</span>
								<{/if}>

							</span>
						
							<span class="list_width" style="width:160px;">
						
							【<a href="<{$url}>/mod/id/<{ $arts[doc].id }>">修改</a>】
							【<a onclick="return confirm('确定要删除文章<{ $arts[doc].title }>吗？')" href="<{$url}>/del/id/<{ $arts[doc].id }>/page/<{$page}><{if $smarty.get.pid}>/pid/<{$smarty.get.pid}><{/if}><{if $smarty.get.search}>/search/<{$smarty.get.search}><{/if}><{if $smarty.get.audit}>/audit/<{$smarty.get.audit}><{/if}>">删除</a>】
							</span>
						</li>
					<{ sectionelse }>
						<li class="light-row">
							本页没有文章
						</li>
					<{ /section }>
					<script>
	function set(obj, stat, id){
		var ajax=Ajax();
		
		if(obj.innerHTML=="√"){
			ajax.get("<{$url}>/status/s/"+stat+"/id/"+id+"/val/0", function(data){
				if(data=="1"){
					ieff(obj, "×");
					obj.style.color="#0000F6";
				}
			
			});
				
		}else{
			ajax.get("<{$url}>/status/s/"+stat+"/id/"+id+"/val/1", function(data){
				if(data=="1"){
					ieff(obj, "√");
					obj.style.color="#FE488B";
				}
				
			});

		}
				
	}
							</script>
					<li class="dark-row">
						<div class="col_width" style="margin-left:15px;width:100%"> 
							<a href="javascript:select()">全选</a>/<a href="javascript:fanselect()">反选</a>/<a href="javascript:noselect()">全不选</a>&nbsp;&nbsp;选中项: 
							<input  name="allows" type="image" title="充许评论"  src="<{$res}>/images/pl1.gif">&nbsp;&nbsp;
							<input  name="nallows" type="image" title="不能评论"  src="<{$res}>/images/pl2.gif">&nbsp;&nbsp;
						
							<input  name="audits" type="image" title="审核"  src="<{$res}>/images/audit.gif">&nbsp;&nbsp;
							<input  name="locks" type="image" title="锁定"  src="<{$res}>/images/lock.gif">&nbsp;&nbsp;
						
							<input  name="dels" type="image" title="删除" onClick="return confirm('你确定要删除选中的文章项吗?')"  src="<{$res}>/images/delete.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

							<a style='<{if $smarty.get.audit eq "on"}>background:#888;color:white<{/if}>' href="<{$url}>/index/audit/on">审核过的</a>&nbsp;|
							<a style='<{if $smarty.get.audit eq "off"}>background:#888;color:white<{/if}>' href="<{$url}>/index/audit/off">末审核的</a>
							
						 </div> 
						<div class="right" style="width:100%;margin-top:10px;">
							<{$fpage}>
						</div>
					</li>
				</ul>	
			</div>
                    </form>
		</div>
<{include file="public/footer.tpl"}>	


