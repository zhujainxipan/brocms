<{include file="user/header.tpl"}>
<body style="background:white;margin:20px;">
<div class="top">	
	<div class="uhead">
		<h3>添加文章</h3>
	</div>
		
	<div class="ucontent">
		<br>
			<form name="article" method="post" action="<{$url}>/insert">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width">文章类别</span>
						  <{ $select }>	
					</li>
					<li class="light-row">
						<span class="col_width">文章标题&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="title" size="30" maxlength="40">
					</li>

					<li class="dark-row">
						<span class="col_width" style="margin-top:25px">文章摘要</span>
						<textarea class="text-box" name="summary" cols="40" rows="4"></textarea>&nbsp;&nbsp;小于100个汉字.
					</li>
				

					<li class="light-row">
						<span class="col_width">文章来源</span>
						<input type="text" class="text-box" name="comefrom" size="25" maxlength="25">
					</li>
					<li class="dark-row">
						<span class="col_width">关键字&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="keyword" size="25"  maxlength="20">&nbsp;&nbsp;用于文章搜索,多个请用逗号","隔开.
					</li>

				
					<li class="light-row" style="margin:0px; padding:0px">
						<textarea cols="80" rows="10" name="content"></textarea>
						<{$ck}>
					</li>
				
	
					<li class="dark-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" style="height:30px" class="button"  value="添 加">&nbsp;&nbsp;
						<input type="reset"  style="height:30px" class="button" value="重 置">
					</li>
				</ul>	
                    </form>			
	</div>
</div>
</body>
<{include file="user/footer.tpl"}>
				
