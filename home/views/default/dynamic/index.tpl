<{include file="user/header.tpl"}>
<body style="background:white;margin:20px;">
<div class="top">	
	<div class="uhead">
		<h3>
			<{if $tit}>
				我的<{$tit}>
			<{else}>
				动&nbsp;&nbsp;态
			<{/if}>
		</h3>
	</div>

	<div class="ucontent">
		<br>
		<br>
		<{section loop=$dynamic name='ls'}>
		<div style="width:100%;padding:10px 0;border-bottom:1px dotted #aaa;<{if $smarty.section.ls.index is even}>background:#FAFAFA;<{/if}>">
			<div style="width:100%;color:#ccc">
				<{$dynamic[ls].ptime|date_format:"%Y-%m-%d %H:%M:%S"}> -

				<{if $dynamic[ls].uid eq $smarty.session.id and $tit}>
					<a href="<{$url}>/del/did/<{$dynamic[ls].id}>/otype/<{$dynamic[ls].otype}>/cid/<{if $dynamic[ls].otype eq 2}><{$dynamic[ls].pid}><{else}><{$dynamic[ls].cid}><{/if}>" onclick="return confirm('我确定要取消<{$tit}> <{$dynamic[ls].title}> 吗?')">取消<{$tit}></a>
				<{/if}>
			</div>
			<div style="width:100%;color:#333">
				
				<{if $dynamic[ls].otype eq 1}>
					<span class="d1">发布了新文章：</span> 
					<a  style="color:#0074CC" target="_blank" href="<{$app}>/article/index/aid/<{$dynamic[ls].cid}>"><{$dynamic[ls].title}></a>
				<{elseif $dynamic[ls].otype eq 2}>
					<span class="d2">发表了评论：</span>
					<{$dynamic[ls].content|replace:"&quot;":'"'|replace:"&#039;":"'"}>
					<br>文章标题：<a  style="color:#0074CC" target="_blank" href="<{$app}>/article/index/aid/<{$dynamic[ls].cid}>"><{$dynamic[ls].title}></a>
				<{elseif $dynamic[ls].otype eq 3}>
					<span class="d3">收藏文章：</span>
					<a target="_blank"  style="color:#0074CC" href="<{$app}>/article/index/aid/<{$dynamic[ls].cid}>"><{$dynamic[ls].title}></a> 

				<{elseif $dynamic[ls].otype eq 4}>
					<span class="d4">推荐文章：</span>
					<a target="_blank"  style="color:#0074CC" href="<{$app}>/article/index/aid/<{$dynamic[ls].cid}>"><{$dynamic[ls].title}></a>
				<{elseif $dynamic[ls].otype eq 5}>
					<span class="d5">关注：</span>
					<a target="_blank"  style="color:#0074CC"  href="<{$app}>/user/index/uid/<{$dynamic[ls].cid}>"><{$dynamic[ls].title}></a>
				<{/if}>


			</div>
				
		</div>	
		<{sectionelse}>
			暂无动态
		<{/section}>
		
		<div style="width:100%;margin:20px;text-align:right"><{$fpage}></div>
	</div>
</div>
<{if $smarty.get.flush}>
	<script>
		window.top.frames.menu.location.reload();
	</script>
<{/if}>
</body>
<{include file="user/footer.tpl"}>
				
