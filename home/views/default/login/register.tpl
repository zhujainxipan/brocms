<html>
	<head>
		<title><{$smarty.const.APP_NAME}>-会员注册</title>
		<meta name="Author" content="高洛峰" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/global.css">
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/layout.css">
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/print.css">
		<script src="<{$public}>/js/ajax3.0.js"></script>
		<script>
			var url='<{$url}>';
		</script>
		<script src="<{$res}>/js/common.js"></script>
		<script src="<{$res}>/js/register.js"></script>
	</head>
	<body>
		<div id="reg">
       			<div class="dt"><strong style="width:90%;">会员注册</strong></div>
			
        			<div class="dd">
					<form name="form2"  action="<{$url}>/insert" method="post" onsubmit="return validate('click')">		
     					 <ul>
       						 <li><span>&nbsp;</span>用户名必须大于3位小于20位，密码必须大于3位</li>
        				
        					<li> </li>
        					<li><span>用户名：</span>
          						<input name="username"  type="text" id="username"> 
							<span class="stats1">请输入用户名</span></li>
       						<li><span>登录密码：</span>
          						<input name="userpwd" type="password" id="userpwd" class="text">
							<span class="stats1">请输入密码</span> </li>
       						 <li><span>确认密码：</span>
         						 <input name="repwd" type="password" id="repwd" value="" size="20" class="text">
							 <span class="stats1">请输入确认</span> </li>
        					<li><span>电子邮箱：</span>
         						 <input name="email" type="text" id="email" class="text">
							 <span class="stats1">请输入邮箱</span> </li>
       					
        					<li><span>性别：</span>
        						  <input type="radio" name="sex" value="1" /> 男 &nbsp;
        						  <input type="radio" name="sex" value="2" /> 女 &nbsp;
         						  <input name="sex" type="radio" value="0" checked="checked" /> 保密 
						 </li>
  						 <li><span>验证码：</span>
         						 <input name="code" type="text" onkeyup="if (this.value != this.value.toUpperCase()) this.value=this.value.toUpperCase();" id="vdcode" size="6" class="text" />
         						 <img src="<{$url}>/code" alt="看不清楚，换一张" style="cursor: pointer;" onclick="this.src='<{$url}>/code/'+Math.random()" />
							 <span class="stats1">请输入用验证码</span></li>
      					
					</ul>
     					 <hr />
      					<ul>
      						  <li><span>&nbsp;</span>
          						<input class="button"  type="submit" value="注 册">
       						 </li>
      					</ul>
   				 </form>		
			</div>
		</div>
	</body>
</html>

