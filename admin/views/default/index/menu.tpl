<{include file="public/header.tpl"}>
		<div id="menu">
			<div class="option">
				<div class="menutitle">【管理选项】</div>
				<div class="content">
					<ul>
						<li class="opt">
							<a href="<{$url}>/main" onclick="switchmenu('optionmenu','menulist',0)" target="main">
							<img onmouseover="cimg(this)" onmouseout="cimg(this)" border="0" src="<{$res}>/images/system_d.gif"><br>
							 系统管理</a></a>
						</li>
						<li class="opt">
							<a href="<{$url}>/main" onclick="switchmenu('optionmenu','menulist',1)" target="main">
							<img onmouseover="cimg(this)" onmouseout="cimg(this)" border="0" src="<{$res}>/images/article_d.gif"><br>
							内容管理</a>
						</li>
						<li class="opt">	
							 <a href="<{$url}>/main" onclick="switchmenu('optionmenu','menulist',2)" target="main">
							 <img onmouseover="cimg(this)" onmouseout="cimg(this)" border="0" src="<{$res}>/images/user_d.gif"><br>
							 用户管理</a>
						</li>
					</ul>
				 </div>
			</div>
			<div class="nav"> </div>
			<div class="option">
				<div id="optionmenu" class="menutitle">【系统管理】</div>
				<div id="menulist" class="content"> 
				    	<div style="display:block">
						<{if $smarty.session.webadmin}>					
						<h4 onclick="domenu(this, 'list1')" class="tit">--常规管理--</h4>
						<ul id="list1">
							<li><a class="list" href="<{$app}>/base/sysinfo" target="main">系统信息</a></li>
							<li><a class="list" href="<{$app}>/base/baseset" target="main">基本设置</a></li>
							<li><a class="list" href="<{$app}>/base/upcache" target="main">更新缓存</a></li>
							
						</ul>
						<h4 onclick="domenu(this, 'list2')" class="tit">--公告管理--</h4>
						<ul id="list2">
							<li><a class="list" href="<{$app}>/notice/add" target="main">添加公告</a></li>
							<li><a class="list" href="<{$app}>/notice" target="main">管理公告</a></li>
						</ul>

						<h4 onclick="domenu(this, 'list3')" class="tit">--友情链接管理--</h4>
						<ul id="list3">
							<li><a class="list" href="<{$app}>/flink/add" target="main">添加友情链接</a></li>
							<li><a class="list" href="<{$app}>/flink" target="main">管理友情链接</a></li>
						</ul>
						<{else}>
							<h4>没有网站编辑权限</h4>
						<{/if}>
				
					</div>

					<div>
						<{if $smarty.session.webadmin}>
						<h4 onclick="domenu(this, 'list21')" class="tit">--相册管理--</h4>
						<ul id="list21">
							<li><a class="list" href="<{$app}>/album/add" target="main">添加相册</a></li>
							<li><a class="list" href="<{$app}>/album" target="main">编辑相册</a></li>
						
						</ul>

						<h4 onclick="domenu(this, 'list22')" class="tit">--图片管理--</h4>
						<ul id="list22">
							<li><a class="list" href="<{$app}>/image/add" target="main">添加图片</a></li>
							<li><a class="list" href="<{$app}>/image" target="main">管理图片</a></li>
						</ul>
						<h4 onclick="domenu(this, 'list23')" class="tit">--栏目管理--</h4>
						<ul id="list23">
							<li><a class="list" href="<{$app}>/column/add" target="main">添加栏目</a></li>
							<li><a class="list" href="<{$app}>/column" target="main">管理栏目</a></li>
						</ul>
						<{else}>
							<h4>没有网站编辑权限</h4>
						<{/if}>
						<{if $smarty.session.articleadmin}>
						<h4 onclick="domenu(this, 'list24')" class="tit">--文章管理--</h4>
						<ul id="list24">
							<li><a class="list"  href="<{$app}>/article/add" target="main">添加文章</a></li>
							<li><a class="list"  href="<{$app}>/article" target="main">管理文章</a></li>
							
						</ul>
	
						<h4 onclick="domenu(this, 'list25')" class="tit">--幻灯片管理--</h4>
						<ul id="list25">
						
							<li><a class="list" href="<{$app}>/play" target="main">管理幻灯</a></li>
						</ul>
						<{else}>
							<h4>没有文章管理权限</h4>
						<{/if}>
					</div>

					<div>
					<{if $smarty.session.useradmin}>
						<h4 onclick="domenu(this, 'list31')" class="tit">--用户组管理--</h4>
						<ul id="list31">
							<li><a class="list" href="<{$app}>/group/add" target="main">添加用户组</a></li>
							<li><a class="list" href="<{$app}>/group" target="main">编辑用户组</a></li>
						</ul>
						<h4 onclick="domenu(this, 'list32')" class="tit">--用户管理--</h4>
						<ul id="list32">
							<li><a class="list" href="<{$app}>/user/add" target="main">添加用户</a></li>
							<li><a class="list" href="<{$app}>/user" target="main">编辑用户</a></li>
						</ul>
					<{else}>
						<h4>没有用户管理权限</h4>
					<{/if}>
					</div>
					
					
				</div>
			</div>
		</div>
<{include file="public/footer.tpl"}>


