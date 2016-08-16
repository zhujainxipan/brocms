<{include file="public/header.tpl"}>	
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">内容管理>栏目管理>修改栏目</div>
			</div>	
		    <{ include file="public/title.tpl" }>
		    <form  method="post" action="<{$url}>/update">
			<div class="msg-box">
				<ul class="viewmess">
					<input type="hidden" name="id" value="<{$post.id}>">
					<li class="light-row">
						<span class="col_width">上级栏目</span>
							<{ $select }>
						</li>
					<li class="dark-row">
						<span class="col_width">栏目标题<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="title" size="20" value="<{ $post.title }>">
					</li>
					<li class="light-row">
						<span class="col_width" style="margin-top:30px">栏目描述</span>
						<textarea class="text-box" name="description" cols="30" rows="5"><{ $post.description }></textarea>
					</li>
					<li class="dark-row">
					
						<span class="col_width" style="margin-top:45px">栏目图片<span class="red_font">*</span></span>
						<input type="hidden" id="picId" name="picid" value="<{$post.picid}>">
						<input type="hidden"  name="picname" value="<{$post.picname}>">
		
						<img  style="cursor:pointer;"  onclick="showWin('<{$app}>/image/open')"  src="<{$public}>/uploads/<{$post.picname}>" alt="图片预览" width=100 height="100" id="pic">		
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button"  class="button"  onclick="showWin('<{$app}>/image/open')" value="替换...">	
				
					</li>
					<li class="light-row">
						<span class="col_width">是否审核</span>
						<input type="radio"  name="audit" <{if $post.audit eq 1}>checked<{/if}>  value="1"> 需要
						<input type="radio"  name="audit" <{if $post.audit eq 0}>checked<{/if}> value="0"> 没必要
					</li>	
					<li class="dark-row">
						<span class="col_width"> &nbsp; </span>
						<input type="submit" class="button" value="修 改">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">&nbsp;&nbsp;
						<input type="button" onclick="if(confirm('确定要删除吗?')) window.location='<{$url}>/del/id/<{$post.id}>'" class="button" value="删 除">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<{include file="public/footer.tpl"}>	


