<html>
	<head>
		<title>用户中心</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="Author" content="高洛峰，细说PHP" />
	</head>

	<frameset rows="61,*" cols="*" framespacing="0" frameborder="no" border="0">
 		<frame src="<{$url}>/top" name="top" scrolling="no" noresize="noresize" />
		<frameset cols="280, *">
  			<frame src="<{$url}>/menu/uid/<{$smarty.get.uid}>" name="menu" noresize="noresize" scrolling="no" />
			
			<{if $smarty.get.message eq 1}>					
				<frame src="<{$app}>/message/index/uid/<{$smarty.get.uid}>" name="main" noresize="noresize" scrolling="yes"/>
			<{else}>
				<frame src="<{$app}>/dynamic/index/uid/<{$smarty.get.uid}>" name="main" noresize="noresize" scrolling="yes"/>
			<{/if}>
  		
		</frameset>
	</frameset>
</html>


