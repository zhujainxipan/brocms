	<div class="comm">
		<div class="dt"><div><b>评论列表</b></div></div>	
		
		<div class="dd">
			<{ section name=con loop=$comment }>
			<div class="commtitle">
				<div class="pleft">
					<a href="<{$app}>/user/index/uid/<{$comment[con].uid}>"><img width="40" height="40" src="<{$public}>/<{if $comment[con].upic}>uploads/user/<{$comment[con].upic}><{else}>images/<{$comment[con].sex}>.gif<{/if}>" />&nbsp;<b><{ $comment[con].username }></b></a>
					<{ if $comment[con].cmt eq 0 }>
						<img alt="中立" src="<{$res}>/images/cmt-neu.gif">  
					<{ elseif $comment[con].cmt eq 1 }>
						<img alt="好评" src="<{$res}>/images/cmt-good.gif">
					<{ elseif $comment[con].cmt eq -1 }>
						<img alt="差评" src="<{$res}>/images/cmt-bad.gif">
					<{ /if }>
				
					于 <{ $comment[con].ptime|date_format:"%Y-%m-%d %H:%M" }> 说到
				</div>
				<div class="pright"> 
				<{if $smarty.session.login eq 1 && $smarty.session.sendcomment eq "1"}>
				<a href="javascript:quote('<{ $comment[con].id }>', '<{ $comment[con].username }>','<{ $comment[con].ptime|date_format:'%Y-%m-%d %H:%M' }>')">回复</a>
				<{/if}>
				&nbsp;<{if ($smarty.session.sendcomment eq "1" && $comment[con].uid eq $smarty.session.id) or $smarty.session.articleadmin eq 1}>

				<span style="cursor:pointer;" onclick="editc('<{$comment[con].id}>',this.parentNode.parentNode.nextSibling.innerHTML,'<{$comment[con].cmt}>','<{ $comment[con].ptime|date_format:'%Y-%m-%d %H:%M' }>',<{$page}>)">编辑</span>
				<span style="cursor:pointer;" onclick="if(confirm('确定要删除这条评论吗？')) delc('<{$comment[con].id}>',<{$page}>)">删除</span>

				<{/if}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				</div>


			</div><div class="commtent">
				<{ $comment[con].content|replace:"&quot;":'"'|replace:"&#039;":"'"}>
			</div>
			<{ sectionelse }>
				暂无评论！
			<{ /section }>
			<div class="page">
				<{$fpage}>	
			</div>
		</div>
	</div>
