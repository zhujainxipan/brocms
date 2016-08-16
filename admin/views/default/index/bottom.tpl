<{include file="public/header.tpl"}>	
		<div id="bottom">
			<ul>
				<li class="left">版本：2.0beta&nbsp;&nbsp;作者：高洛峰</li>
					<li class="right"> 
						本系统现有： &nbsp; 

						<{if $smarty.session.articleadmin}>
							<a target="main" href="<{$app}>/article">文章【<span class="red_font"><{$articles}></span>】篇</a>&nbsp; &nbsp; 
							<a target="main" href="<{$app}>/play">幻灯片【<span class="red_font"><{$plays}></span>】个</a>
						<{/if}>
						<{if $smarty.session.webadmin}>
							<a target="main" href="<{$app}>/column">栏目【<span class="red_font"><{$columns}></span>】个</a>&nbsp; &nbsp; 
							<a target="main" href="<{$app}>/image">图片【<span class="red_font"><{$images}></span>】张</a>&nbsp; &nbsp;
						
							<a target="main" href="<{$app}>/flink">友情链接【<span class="red_font"><{$flinks}></span>】个</a>
							<a target="main" href="<{$app}>/notice">公告【<span class="red_font"><{$notices}></span>】个</a>
						<{/if}>
						<{if $smarty.session.useradmin}>
							<a target="main" href="<{$app}>/user">用户【<span class="red_font"><{$users}></span>】个 </a>&nbsp; &nbsp; 
						<{/if}>
					</li>	
			</ul>	
		</div>
<{include file="public/footer.tpl"}>	


