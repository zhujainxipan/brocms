<{include file="public/header.tpl"}>
		<div id="main">
		    	<div class="head-dark-box">
				<div class="tit">系统管理>常规设置>基本设置</div>
			</div>	
			<{ include file="public/title.tpl" }>
		    <form  method="post" action="<{$url}>/set" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">前台显示风格</span>
							<select class="text-box" name="appStyle">
								<{ foreach from=$varList.selectStyle key=key item=value}>
									<option <{ if $varList.appStyle eq $key }> selected <{ /if }> value="<{ $key }>"><{ $value }></option>
								<{ /foreach }>
							</select>
						</li>
					<li class="dark-row">
						<span class="col_width">文章每页显示数目</span>
						<input type="text" class="text-box" name="articlePageSize" size="10" value="<{$varList.articlePageSize}>"> 条/页			
					</li>
					<li class="light-row">
						<span class="col_width">图片每页显示数目</span>
						<input type="text" class="text-box" name="picturePageSize" size="10" value="<{$varList.picturePageSize}>"> 条/页				
					</li>
				
					<li class="dark-row">
						<span class="col_width">水印图片</span>
						<span id="newwater">
					        	<img id="wtu" src="<{$public}>/uploads/<{$varList.water}>" alt="水印图片">
						</span>	
						<input type="button"  style="margin-left:30px" class="button" value="更 换" onclick="changeup(this)">
					</li>
					<li class="light-row">
						<span class="col_width">水印位置</span>
						<select name="position">
						 	<option value="0" <{ if $varList.position eq 0 }> selected <{ /if }>>随机位置</option> 
							<option value="1" <{ if $varList.position eq 1 }> selected <{ /if }>>顶端居左</option> 
							<option value="2" <{ if $varList.position eq 2 }> selected <{ /if }>>顶端居中</option> 
							<option value="3" <{ if $varList.position eq 3 }> selected <{ /if }>>顶端居右</option> 
							<option value="4" <{ if $varList.position eq 4 }> selected <{ /if }>>中部居左</option> 
							<option value="5" <{ if $varList.position eq 5 }> selected <{ /if }>>中部居中</option> 
							<option value="6" <{ if $varList.position eq 6 }> selected <{ /if }>>中部居右</option> 
							<option value="7" <{ if $varList.position eq 7 }> selected <{ /if }>>底端居左</option> 
							<option value="8" <{ if $varList.position eq 8 }> selected <{ /if }>>底端居中</option> 
							<option value="9" <{ if $varList.position eq 9 }> selected <{ /if }>>底端居右</option>  
						</select>&nbsp;&nbsp;&nbsp;&nbsp;可以有10种设置状态
					</li>
					<li class="dark-row">
						<span class="col_width">缩略图尺寸</span>
						宽 <input type="text" class="text-box" name="width" size="5" value="<{$varList.width}>"> px&nbsp;&nbsp;
						高 <input type="text" class="text-box" name="height" size="5" value="<{$varList.height}>"> px
					</li>
					<li class="light-row">
						<span class="col_width">图片上传后的最大尺寸</span>
						宽 <input type="text" class="text-box" name="maxWidth" size="5" value="<{$varList.maxWidth}>"> px&nbsp;&nbsp;
						高 <input type="text" class="text-box" name="maxHeight" size="5" value="<{$varList.maxHeight}>"> px
					</li>
					<li class="dark-row">
						<span class="col_width">缓存设置</span>
						<input type="radio" name="cstart" <{if $varList.cstart eq '1'}>checked<{/if}> value="1"> 开启 &nbsp;&nbsp;
						<input type="radio" name="cstart" <{if $varList.cstart eq '0' or $varList.cstart eq null}>checked<{/if}> value="0"> 关闭
					
					</li>
					<li class="light-row">
						<span class="col_width">缓存时间</span>
						<input type="text" class="text-box" name="ctime" size="5" value="<{$varList.ctime}>"> 秒
					
					</li>
					<li class="dark-row">
						<span class="col_width">网站标题</span>
						<input type="text" class="text-box" name="appname" size="30" value="<{$varList.appname}>"> 显示在首页的标题栏
					
					</li>
					<li class="light-row">
						<span class="col_width">关键字</span>
						<input type="text" class="text-box" name="keyword" size="50" value="<{$varList.keyword}>"> 多的seo关键字使用","分隔
					
					</li>
					<li class="dark-row">
						<span class="col_width">网站描述</span>
						<textarea type="text" class="text-box" name="description" cols="40" rows="5"><{$varList.description}></textarea> 
					
					</li>
					<li class="light-row">
						<span class="col_width">&nbsp;</span>
						<input type="submit" class="button" name="mod" value="修 改">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>


<{include file="public/footer.tpl"}>	


