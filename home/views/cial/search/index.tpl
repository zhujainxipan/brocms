<{ include file="public/header.tpl" }>
	<div id="main">
		
		<div id="search">
       			<div class="dt"><strong>文章搜索结果</strong><span class="more">
		
			 按<b>
			 <{if $serType eq "content"}>
				文章内容
			 <{elseif $serType eq "keyword"}>
				文章关键字
			<{else}>
				文章标题
			<{/if}>
			</b>搜索<b> "<{$search}>" </b>
			共搜索到<span class="redcolor"> <{ $total }> </span>篇符合条件的记录</span></div>
        		<div class="dd dot">
				<ul>
					<{ section name=article loop=$searchs }>	
						<li <{ if $smarty.section.article.index is div by 2 }>class="li_bg"<{/if}>>
							<span style="width:270px">
							<a href="<{$app}>/article/index/aid/<{ $searchs[article].id }>"><{ $searchs[article].title|truncate:30 }></a></span>
							<span style="width:150px">作者：
							
							<a style="background-image:none" href="<{$app}>/user/index/uid/<{$searchs[article].uid}>"><{ $searchs[article].author|truncate:12 }></a></span>
							
							<span style="width:150px">发布时间：
							<span class="fontcolor"><{ $searchs[article].posttime|date_format:"%Y-%m-%d" }></span></span>
							<span style="width:100px">人气：
							<span class="fontcolor"><{ $searchs[article].views }></span></span>
							<p style="text-indent:0.8cm;background:#fdfddf">
								<{$searchs[article].summary}>
							</p>
						</li>
					<{ sectionelse }>
						<li>没有符合条件的文章</li>
					<{ /section }>
				</ul>
				<div class="page">
					<{$fpage}>
				</div>
			</div>	
		</div>
	
	</div>

	<div id="sidebar">
		<div class="sidebox">
       			<div class="dt"><strong>强烈推荐</strong></div>
        		<div class="dd dot">
          			<ul>
					<{ section name=article loop=$recommends max=10 }>
						<li><a href="<{$app}>/article/index/aid/<{ $recommends[article].id }>"><{ $recommends[article].title|truncate:25 }></a></li>
					<{ sectionelse }>
						<li>目前没有任何推荐文章</li>
					<{ /section }>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
		<div class="sidebox">
       			<div class="dt"><strong>最近更新</strong></div>
        		 <div class="dd dot">
            			<ul>
					<{ section name=article loop=$news max=10 }>
						<li><a href="<{$app}>/article/index/aid/<{ $news[article].id }>"><{ $news[article].title|truncate:25 }></a></li>
					<{ sectionelse }>
						<li>目前没有任何推荐文章</li>
					<{ /section }>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
		<div class="sidebox">
       			<div class="dt"><strong>本月热点</strong></div>
        		 <div class="dd dot">
          			<ul>
					<{ section name=article loop=$hots max=10 }>
						<li><a href="<{$app}>/article/index/aid/<{ $hots[article].id }>"><{ $hots[article].title|truncate:25 }></a></li>
					<{ sectionelse }>
						<li>目前没有任何推荐文章</li>
					<{ /section }>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
	</div>

	<div class="nav"> </div>
<{ include file="public/footer.tpl" }>

