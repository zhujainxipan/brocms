<{include file="public/header.tpl"}>
		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理->图片管理->添加图片</div>
			</div>	
			<{ include file="public/title.tpl" }>

			<script>
				function checkselect(obj){
					if(obj.pid.options[obj.pid.selectedIndex].value==0){
						var outmess=document.getElementById("outmess");
						outmess.innerHTML="还没有选分类";
						outmess.className+=" error-msg";
						return false;
					}
					return true;
				}
			</script>
		    <form  method="post" action="<{$url}>/insert" onsubmit="return checkselect(this)" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">添加到相册</span><{ $select }>
					</li>

					
					<li class="dark-row">
						<span class="col_width">&nbsp; </span>
						<input type="checkbox" name="thumb" <{$thumb}> value="1"> 生成缩略图 
						<input type="checkbox" name="water" <{$water}> value="1"> 加水印 
					</li>
					<li class="light-row">
						<span class="col_width" style="float:left;">上传图片 </span>
						<span id="apic" style="float:left !important;float:none;width:300px;">
						<input type="file" name="pic[]" ><br>
						</span>
					</li>
					<li class="dark-row">
						<span class="col_width">&nbsp; </span>
						&nbsp;<a href="javascript:addpic()">继续添加</a>&nbsp;<b>↓</b>
						<span id="del" style="display:none">&nbsp;&nbsp;<a href="javascript:delpic()">减少一个</a>&nbsp;<b>↑</b></span>
					</li>
					<script>
						var picobj=document.getElementById("apic");
						var del=document.getElementById("del");
						var i=0;
						function addpic(){
							i++;
							if(i==1)
								del.style.display="inline";   										

							var file=document.createElement("input");
							file.type="file";
							file.name="pic[]";
							var br=document.createElement("br");
							picobj.appendChild(file);	
							picobj.appendChild(br);
						
						}
						function delpic(){
							i--;
							if(i==0)
								del.style.display="none";   
							picobj.removeChild(picobj.lastChild);
							picobj.removeChild(picobj.lastChild);
						}
					</script>
				
					<li class="light-row">
						<span class="col_width">&nbsp;</span><input type="submit" class="button"  value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<{include file="public/footer.tpl"}>	


