<html>
	<head>
		<title><{ $appname|truncate:200 }></title>
		<meta name="Author" content="高洛峰" />
		<meta name="Keywords" content="<{$keywords}>" />
		<meta name="description" content="<{$description}>" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/global.css">
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/layout.css">
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/print.css">
		<script src="<{$public}>/js/ajax3.0.js"></script>
		<script src="<{$res}>/js/common.js"></script>
		<script src="<{$res}>/js/win.js"></script>
		
	</head>
	<body>
		<div id="content">
			<div id="header">
				<div id="top">
					<div id="top_left">
						<{nocache}>
						<{ if $smarty.session.login eq 1 }>
          						&nbsp;欢迎回来 <b><a href="<{$app}>/user/index/uid/<{$smarty.session.id}>"><{ $smarty.session.username }></a></b>&nbsp;｜&nbsp;<a href="<{$app}>/login/logout">退出</a>&nbsp;｜&nbsp;<span class="<{if $mtotal gt 0}>mail2<{else}>mail1<{/if}>"><a href="<{$app}>/user/index/uid/<{$smarty.session.id}>/message/1">站内信[<span style="color:#A00"><{$mtotal}></span>]</a></span>
						<{ else }>
						<form action="<{$app}>/login" method="post">
							&nbsp;
							用户名:<input class="inputheight" name="username" type="text" size="10">&nbsp;
							密码:<input class="inputheight" name="userpwd" type="password" size="10">
							<input type="submit" class="button"  name="loginsubmit" value="登录">&nbsp;
							<a href="<{$app}>/login/register"><span style="color:red">注册</span></a>
						</form>
						<{ /if }>
						<{/nocache}>
					</div>

					<div id="top_right">
						<form action="<{$app}>/search/index" method="post">
							<input type="radio" <{ if $serType eq "title" or $serType eq null }> checked <{ /if }> name="serType" value="title">标题
							<input type="radio" <{ if $serType eq "content"}> checked <{ /if }> name="serType" value="content">内容
							<input type="radio" <{ if $serType eq "keyword"}> checked <{ /if }> name="serType" value="keyword">关键字
							<input type="text"  name="search" size="15" value="<{ $search }>" maxlength="255">
							<input type="submit"  class="button"  value="搜索">&nbsp;
						</form>
					</div>
				</div>
				
				<div id="logo">
					<a href="<{$app}>"><img border="0" width="200" height="80" alt="xscms_logo" src="<{$public}>/images/logo.gif"></a>
				</div>
				<div id="right_box">
					<div id="banner">
						<!-- 可以在这里加入banner -->	
   						<a href="http://bbs.lampbrother.net"><img width="500" height="70" alt="banner" src="<{$res}>/images/banner.gif" border=0></a>
					</div>

					<div id="tool">
						
						<ul>
							<li><a href="">用户定义</a></li>
							<li><a href="">用户定义</a></li>
							<li><a href="">用户定义</a></li>
							<li><a href="">用户定义</a></li>
						</ul>
					</div>
				</div>
				<div class="nav"> </div>
			</div>	
			<div id="menu">
				<ul>
					<li><a href="<{$app}>">网站首页</a></li><li class="menudiv"> </li>
				
					<{ section name=li loop=$menu }>
						<li><a href="<{$app}>/list/index/pid/<{ $menu[li].id }>"><{ $menu[li].title }></a></li><li class="menudiv"> </li>
					<{ /section }>
					<li><a href="http://bbs.lampbrother.net" target="_blank">论坛交流</a></li>
				</ul>			
			</div>
			<div class="nav"> </div>
			<div id="container">
			

