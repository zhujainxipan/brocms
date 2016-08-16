<!DOCTYPE html PUBLIC
          "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<{include file="public/header.tpl"}>
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>公告管理>添加公告</div>
			</div>	
		    <{ include file="public/title.tpl" }>
		    <form  method="post" action="<{$url}>/insert">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">公告标题<span class="red_font">*</span></span>
						 <input type="text" class="text-box" name="title" maxlength="80" size="30" value="<{ $post.title }>">&nbsp;<{$color}>可以为标题选择颜色
					</li>
					<li class="dark-row">
						<span class="col_width">起始日期<span class="red_font">*</span></span>
						<{$starttime}> &nbsp;请选择开始时间！
					
					</li>
					<li class="light-row">
						<span class="col_width">截止日期<span class="red_font">*</span></span>
						<{$endtime}> &nbsp;请选择下线时间,<input type="button" onclick="document.getElementById('endtime').value=''" class="button" value="清空">(设置留空则为长期显示)
					</li>

						
					<li class="dark-row">
						<span class="col_width" style="float:left;padding-top:30px;height:190px">公告内容<span class="red_font">*</span></span>
						<span style="float:left;height:150px;width:530px"><textarea class="text-box" name="content" cols="150" rows="5"><{ $post.content }></textarea>
						<{$ck}>
						</span>
					</li>
				
					<li class="light-row">
						<span class="col_width">是否显示</span>
						
						<input type="radio" name="display"  <{if $post.display eq "1" or $post.display eq null}> checked <{/if}> value="1"> 显示
						<input type="radio" name="display" <{if $post.display eq "0" }> checked <{/if}> value="0"> 不显示
					</li>
					<li class="dark-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button" value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<{include file="public/footer.tpl"}>	


