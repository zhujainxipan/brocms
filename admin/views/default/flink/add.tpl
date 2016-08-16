<{include file="public/header.tpl"}>
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>友情链接管理>添加友情连接</div>
			</div>	
		    <{ include file="public/title.tpl" }>
		    <form  method="post" action="<{$url}>/insert">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">网站名称<span class="red_font">*</span></span>
						 <input type="text" class="text-box" name="webname" maxlength="30" size="20" value="<{ $post.webname }>">
					</li>
					<li class="dark-row">
						<span class="col_width">地&nbsp;&nbsp;址<span class="red_font">*</span></span>
							<input type="text" class="text-box" name="url" maxlength="60" size="40" value="<{ $post.url }>"> &nbsp; 例如：http://www.lampbrother.net
					
					</li>
					<li class="light-row">
						<span class="col_width">LOGO<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="logo" maxlength="100" size="40" value="<{ $post.logo }>"> &nbsp; 网站LOGO图片的真实地址,会自动下载到本地。
					</li>

						
					<li class="dark-row">
						<span class="col_width" style="margin-top:30px">网站描述</span>
						<textarea class="text-box" name="msg" cols="50" rows="5"><{ $post.msg }></textarea>
					</li>
					<li class="light-row">
						<span class="col_width">联系人<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="rname" maxlength="30" size="10" value="<{ $post.rname }>">
					</li>
					<li class="dark-row">
						<span class="col_width">站长Email<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="email" maxlength="60" size="30" value="<{ $post.email }>">
					</li>

					<li class="light-row">
						<span class="col_width">显示方式</span>
						
						<input type="radio" name="list" <{if $post.list eq "0" or $post.list eq null}> checked <{/if}> value="0"> 网站名称
						<input type="radio" name="list"  <{if $post.list eq "1"}> checked <{/if}> value="1"> LOGO图片
					</li>
					<li class="dark-row">
						<span class="col_width">是否显示</span>
						
						<input type="radio" name="audit" <{if $post.audit eq "0" or $post.audit eq null}> checked <{/if}> value="0"> 不显示
						<input type="radio" name="audit"  <{if $post.audit eq "1"}> checked <{/if}> value="1"> 显示
					</li>
					<li class="light-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button" name="mod" value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<{include file="public/footer.tpl"}>	


