<script>
	var url='<{$url}>';
</script>
<{include file="public/header.tpl"}>	
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">内容管理>栏目管理>编辑栏目</div>
			</div>	
		    <{ include file="public/title.tpl" }>
		    <form  method="post" action="<{$url}>/order">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width2 width_font">栏目名称</span>
						<span class="width_font">操&nbsp;&nbsp;作</span>
					</li>
					<{ $list }>
					<li class="light-row">
						<span class="col_width">
							<input type="submit" name="order" class="button" value="重新排序">
						</span>
					</li>
				</ul>	
			</div>
                    </form>
		</div>
<{include file="public/footer.tpl"}>	


