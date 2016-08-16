<{include file="public/header.tpl"}>
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>用户管理>添加用户</div>
			</div>	
		    <{ include file="public/title.tpl" }>
		    <form  method="post" action="<{$url}>/insert">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width">用户组</span>
						<{$select}> <label for="jz"><input id="jz" type="checkbox" name="jz" <{if $post.jz eq 1}>checked<{/if}> value="1"> 记住选项</label>
					</li>
					<li class="light-row">
						<span class="col_width">用户名&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input name="username" type="text"  value="<{ $post.username }>" class="text-box">
						可以使用中文，但禁止除[@][.]以外的特殊符号
					</li>
					<li class="dark-row">
						<span class="col_width">登录密码<span class="red_font">*</span></span>
						<input name="userpwd" type="password"  value="<{if $post.srcpwd eq null}>brophp<{else}><{$post.srcpwd}><{/if}>" class="text-box"> 
						初使密码为brophp
					</li>
					<li class="light-row">
						<span class="col_width">确认密码<span class="red_font">*</span></span>
						<input name="repwd" type="password"  value="<{if $post.srcpwd eq null}>brophp<{else}><{$post.srcpwd}><{/if}>"  size="20" class="text-box">
					</li>
					<li class="dark-row">
						<span class="col_width">电子邮件<span class="red_font">*</span></span>
						<input name="email" type="text"  value="<{ $post.email }>" class="text-box">
						请正确添写你的电子邮件地址
					</li>	

					<li class="light-row">
						<span class="col_width">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别</span>
						<input type="radio" name="sex" <{if $post.sex eq "1" or $post.sex eq null}> checked <{/if}> value="1"> 男 &nbsp;
        					<input type="radio" name="sex" <{if $post.sex eq "2"}> checked <{/if}> value="2"> 女 &nbsp;
         					<input type="radio" name="sex" <{if $post.sex eq "0"}> checked <{/if}> value="0"> 保密 
					</li>
					<li class="dark-row">
						<span class="col_width">是否禁用</span>
						<input type="checkbox" name="disable" <{if $post.disable eq 1}>checked<{/if}> value="1"> 禁用该用户 &nbsp;
        					
					</li>
				
					<li class="light-row">
						<span class="col_width"> &nbsp; </span>
						<input type="submit" class="button"  value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<{include file="public/footer.tpl"}>	


