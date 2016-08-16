<{include file="user/header.tpl"}>
<body style="background:white;margin:20px;">
<div class="top">	
	<div class="uhead">
		<h3>站内信</h3>
	</div>
		
	<div class="ucontent">
		<div class="uzcolor"><b><a href="<{$url}>/index">收件箱</a></b><{if $smarty.session.sendmessage eq 1}> | <a href="<{$url}>/write">写消息</a><{/if}></div> 
		<br>
		<form action="<{$url}>/del" method="post">
			<table width="500">
				<tr>
					<th width="20"><input type="checkbox"></th>
					<th width="20"><img src="<{$res}>/images/mess2.gif" /></th>
					<th width="100">发件人</th>
					<th>主题</th>
					<th width="100">时间</th>
				</tr>

				<{section loop=$message name="ms"}>
					<tr style="<{if $message[ms].stutas eq 1}>font-weight:bold;<{else}>font-weight:100;<{/if}>">
						
						<td><input type="checkbox" name="id[]" value="<{$message[ms].id}>"></td>
						<td><a href="<{$url}>/view/id/<{$message[ms].id}>"><img src="<{$res}>/images/<{if $message[ms].stutas eq 1}>mess3.gif<{else}>mess1.gif<{/if}>" /></a></td>
						<td><a href="<{$url}>/view/id/<{$message[ms].id}>"><{$message[ms].username}></a></td>
						<td><a href="<{$url}>/view/id/<{$message[ms].id}>"><{$message[ms].title}></a></td>
						<td><{$message[ms].ptime|date_format:"%m-%d %H:%M"}></td>
					</tr>
				<{sectionelse}>
					<tr><td colspan="5">收信箱为空</td></tr>
				<{/section}>
					<tr>
						<td colspan="5" align="left">
							<label for="sel"><input id="sel" onclick="allsel(this.checked)" type="checkbox">全选</label>
							<input class="button" type="submit" name="del" value="删除">
						</td>
					</tr>
					<tr>
						<td colspan="5" style="text-align:right"><{$fpage}></td>
					</tr>
			</table>
			<script>
				function allsel(val){
				
					var checks=document.getElementsByName("id[]");
				
					for(var i=0; i<checks.length; i++){
						checks[i].checked=val
					} 
				}
			</script>
		</form>				
	</div>
</div>
</body>
<{include file="user/footer.tpl"}>
				
