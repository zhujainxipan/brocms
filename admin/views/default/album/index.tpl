<{include file="public/header.tpl"}>	
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">内容管理>图片管理>编辑相册</div>
			</div>	
		    <{ include file="public/title.tpl" }>
		    <form  method="post" action="main.php?action=album">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width2 width_font">相册名称</span>
						<span class="width_font">操&nbsp;&nbsp;作</span>
					</li>
					<{ $list }>
				</ul>	
			</div>
                    </form>
		</div>
<{include file="public/footer.tpl"}>	


