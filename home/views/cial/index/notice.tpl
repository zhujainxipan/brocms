<{ include file="public/header.tpl" }>

	<div class="article">
		<div class="dt"><div>系统公告</div></div>		
        	
		<div class="dd">
			<div id="title">
				<div class="nav"> </div>
				<h1><{ $notice.title|truncate:100 }></h1>
				<div class="nav"> </div>
			</div>
		
			<div class="nav"> </div>
			<div id="ccont">
				<{ $notice.content }>
			</div>
			<div class="nav"> </div>
		<div>	
	</div>
	</div>
	<div class="nav"> </div>
<{ include file="public/footer.tpl" }>


