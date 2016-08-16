<{include file="public/header.tpl"}>
		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理->图片管理->图片列表</div>
			</div>	
			<{ include file="public/title.tpl" }>
		    <form  method="post" action="<{$url}>/del/pid/<{$pid}>" onsubmit="return confirm('你确定要删除选中的所有图片吗?')">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请从相册中选择需要编辑的图片&nbsp;&nbsp; <{ $select }>				
					</li>
					<script>
						var sel=document.getElementById("sel");
						
						sel.onchange=function(){
							var pid=this.options[this.selectedIndex].value;
							window.location="<{$url}>/index/pid/"+pid;
						}

						
						function show(filename){
							window.open(filename, '_blank', "top=0,left=0,width=400px,height=400px,location=yes,scrollbars=yes");
						}
						
					</script>
				</ul>
					 <div style="float:left;margin:5px 0 20px 0; width:98%;">
					 <{section loop=$images name="ls"}>
					
						<div class="piclist">
							<img width="100" height="100" onclick="show('<{if $images[ls].water eq 1}><{$public}>/uploads/wa_<{$images[ls].name}><{else}><{$public}>/uploads/<{$images[ls].name}><{/if}>')"  src="<{$public}>/uploads/<{$images[ls].name}>">
							<input style="position:relative;top:-22px;overflow:hidden" type="checkbox" name="id[]" value="<{$images[ls].id}>">
						</div>
					 <{sectionelse}>
						<div style="width:100%;padding-left:30px;line-height:80px;">该分类中没有图片.</div>
					 <{/section}>
					</div>
					</div>
				<ul class="viewmess">
					<li class="dark-row" style="width:100%;float:left;">
						<span class="col_width" style="margin-left:15px;float:left"> 
							<a href="javascript:select()">全选</a>/<a href="javascript:fanselect()">反选</a>/<a href="javascript:noselect()">全不选</a>&nbsp;&nbsp;选中项: 
							<input  name="delb" type="image" title="删除"  src="<{$res}>/images/delete.gif">&nbsp;&nbsp;
						 </span> 
						<span class="right" style="float:right;">
							<{$fpage}>
						</span>
					</li>
				</ul>	
			</div>
                    </form>
		</div>
<{include file="public/footer.tpl"}>	


