<!DOCTYPE html PUBLIC
          "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<{include file="public/header.tpl"}>
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>幻灯管理>添加幻灯</div>
			</div>	
		    <{ include file="public/title.tpl" }>
		    <form  method="post" action="<{$url}>/insert">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">文章地址<span class="red_font">*</span></span>
						article/aid/<{$article.id}>
						<input type="hidden" name="aid" value="<{$article.id}>">
					</li>
					<li class="dark-row">
						<span class="col_width">幻灯标题<span class="red_font">*</span></span>
						 <input type="text" class="text-box" name="title" maxlength="80" size="40" value="<{ $article.title }>">
					</li>
					<li class="light-row">
					
						<span class="col_width" style="margin-top:45px">幻灯图片<span class="red_font">*</span></span>
						<input type="hidden" id="picId" name="picid" value="">
						<img  style="cursor:pointer;"  onclick="showWin('<{$app}>/image/open')"  src="<{$public}>/images/no_image.gif" alt="图片预览" width=100 height="100" id="pic">		
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button"  class="button"  onclick="showWin('<{$app}>/image/open')" value="浏览...">	
				
					</li>
					<li class="dark-row">
						<span class="col_width">开始日期<span class="red_font">*</span></span>
						<{$starttime}> &nbsp;
					
					</li>
					<li class="light-row">
						<span class="col_width">失效日期<span class="red_font">*</span></span>
						<{$endtime}> &nbsp;<input type="button" onclick="document.getElementById('endtime').value=''" class="button" value="清空">(设置留空则为长期显示)
					</li>

				
					<li class="dark-row">
						<span class="col_width">是否显示</span>
						
						<input type="radio" name="display"  <{if $post.display eq "1" or $post.display eq null}> checked <{/if}> value="1"> 显示
						<input type="radio" name="display" <{if $post.display eq "0" }> checked <{/if}> value="0"> 不显示
					</li>
					<li class="light-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button" value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<{include file="public/footer.tpl"}>	


