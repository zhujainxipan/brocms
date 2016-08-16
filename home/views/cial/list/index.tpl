<{ include file="public/header.tpl" }>
	<div id="main">
	
		<div class="column_left">
			<{if $columnmenu ne false}>
       			<div class="dt"><strong><span>栏目导航</strong></div>
        		<div class="dd">
				<ul>
					<{ section name=col loop=$columnmenu }>
						<li class="par"><a href="<{$url}>/index/pid/<{ $columnmenu[col].id }>" title="<{ $columnmenu[col].description }>" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<{ $columnmenu[col].title }></a></li>
					<{ sectionelse }>
						<li>该栏目下没有子栏目</li>
					<{ /section }>
				</ul>	
       			</div>

			<div class="nav"> </div>
			<{/if}>
			<a href="http://bbs.lampbrother.net" target="_blank"><img src="<{$public}>/images/xsphp_f.png" border="0" width="200" /></a>	
		</div>
		
		<div class="column_right">
       			<div class="dt">
				<div>当前位置
				<{ section name=loc loop=$locs }>
					&gt; <a href="<{$url}>/index/pid/<{ $locs[loc].id }>" title="<{ $locs[loc].description }>"><{ $locs[loc].title }></a> 
				<{ /section }>		
					
				</div>
			</div>
        		<div class="dd">
				
				<div class="column_top">
				
					<img src="<{$public}>/uploads/<{ $column.picname }>" border="0" width="80" height="80">
				
					<span>
						<{ $column.description }>
					</span>
					<div class="nav"> </div>
				</div>
			
				<div class="tit">
					<span class="col1">&nbsp;&nbsp;&nbsp;&nbsp;文章标题</span> 
					<span class="col2">作者</span>
					<span class="col2">发布时间</span></li>
				</div>
				<ul class="dot">

					<{ section name=col loop=$articles }>
						<li>
							<span class="col1"><a href="<{$app}>/article/index/aid/<{ $articles[col].id }>" title="<{ $articles[col].title }>"><{ $articles[col].title|truncate:25 }></a></span>							     		     			  <span class="col2"><{ $articles[col].author|truncate:9 }></span>
							<span class="col2"><{ $articles[col].posttime|date_format:"%Y-%m-%d" }></span>

						</li>
					<{ sectionelse }>
						<li>该栏目下没有文章</li>
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
       			<div class="dt"><strong>本类推荐</strong></div>
        		<div class="dd dot">
          			<ul>
					<{ section name="rec" loop=$recommends }>
						<li><a href="<{$app}>/article/index/aid/<{ $recommends[rec].id }>"><{ $recommends[rec].title|truncate:25 }></a> <span style="font-size:10px">(<span class="redh"><{$recommends[rec].recommend}></span>人推荐)</span></li>
					<{ sectionelse }>
						<li>本类暂无推荐文章</li>
					<{ /section }>
          			</ul>
			</div>
       		 </div>

		<div class="nav"> </div>
		<div class="sidebox">
       			<div class="dt"><strong>本类热门</strong></div>
        		 <div class="dd dot">
          			<ul>
					<{ section name=h loop=$hots }>
						<li><a href="<{$app}>/article/index/aid/<{ $hots[h].id }>"><{ $hots[h].title|truncate:18 }></a>&nbsp;&nbsp;<span style="font-size:10px">(浏览<span class="redh"><{$hots[h].views}></span>次)</span></li>
					<{ sectionelse }>
						<li>本类暂无热门文章</li>
					<{ /section }>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
	</div>

	<div class="nav"> </div>
<{ include file="public/footer.tpl" }>


