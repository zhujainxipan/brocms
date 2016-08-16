<?php
	/*==================================================================*/
	/*		文件名:InstallFrom_class.php                        */
	/*		概要: 安装程序中的用户表单界面处理类.          	    */
	/*		作者: 高洛峰                                        */
	/*		创建时间: 2009-05-01                                */
	/*		最后修改时间:2009-05-01                             */
	/*		copyright (c)2009 lampteacher@gmail.com             */
	/*==================================================================*/
	class Ifrom {	
		private $method;
		private $action;
		private $class;
		//==========================================
		// 函数: __construct($method="POST", $action="index.php", $class="white-box") 
		// 功能: 构造方法用于初使化对象的成员属性
		// 参数: metchod是指定表单的提交方法，action是指定表单提交的位置，class指定表单的样式类
		// 返回: 无
		//==========================================	
		function __construct($method="POST", $action="index.php", $class="white-box") {
			$this->method=$method;
			$this->action=$action;
			$this->class=$class;
		}
		//==========================================
		// 函数:  getAgreement()
		// 功能: 用于获取许可协议界面
		// 参数: 无
		// 返回: 返回许可协议界面字符串
		//==========================================
		function getAgreement(){
			$fc.='<div class="body-box tip-msg">';
			$fc.='欢迎您使用BroCMS内容管理系统2.0beta，请认真阅读以下安装条款后进行安装.';
			$fc.='</div>';
			$fc.='<form method="'.$this->method.'" action="'.$this->action.'" class="'.$this->class.'">';
			$fc.='<div class="body-box">';
			$fc.='<div class="center red-font">BroCMS 许可协议</div>';
			$fc.='<div class="license">';
			$fc.='<ol style="list-style:none">';
			
			$fp=fopen("./license.txt", "r");
			while(!feof($fp)){
				$fc.='<li>'.fgets($fp).'</li>';
			}
			fclose($fp);
			$fc.='</ol>';	
			$fc.='</div></div>';
			$fc.='<div class="center body-box">';
			$fc.='<input type="hidden" name="step" value="2">';
			$fc.='<input type="submit" class="button" value="开始安装">';
			$fc.='</div>';
			$fc.='</form>';
			return $fc;	
		}

		function check(){
			$ok=true;
			$fc.='<div class="body-box tip-msg">请检查环境和文件目录权限是否正确。</div>';
			$fc.='<form method="'.$this->method.'" action="'.$this->action.'" class="'.$this->class.'">';
			$fc.='<ol>';
			$fc.='<li class="light-row" style="font-size:14px;font-weight:blod"><b>';
			$fc.='<span>检查项目</span>';
			$fc.='<span>当前环境</span>';
			$fc.='<span>建议</span>';
			$fc.='<span>功能影响</span>';
			$fc.='</b></li>';

			$fc.='<li class="dark-row">';
			$fc.='<span>操作系统</span>';
			$os=explode(" ", php_uname());
			$fc.='<span>'.$os[0].' '.$os[1].'</span>';
			$fc.='<span>Linux/Freebsd/Windows_NT</span>';
			$fc.='<span><img src="images/correct.gif" /></span>';
			$fc.='</li>';


			$fc.='<li class="light-row">';
			$fc.='<span>WEB 服务器</span>';
			$fc.='<span>'. $_SERVER['SERVER_SOFTWARE'].'</span>';
			$fc.='<span>Apache/Nginx/IIS</span>';
			$fc.='<span><img src="images/correct.gif" /></span>';
			$fc.='</li>';


			$fc.='<li class="dark-row">';
			$fc.='<span>PHP 版本</span>';
			$fc.='<span>'.phpversion().'</span>';
			$fc.='<span>PHP 5.2.0 及以上</span>';
			if(phpversion() >= '5.2.0'){
				$fc.='<span><img src="images/correct.gif" /></span>';
			}else{
				$fc.='<span class="red-font"><img src="images/error.gif" />&nbsp;无法安装</span>';
				$ok=false;
			}
			$fc.='</li>';


			$fc.='<li class="light-row">';
			$fc.='<span>mysqli/pdo扩展</span>';
			$fc.='<span>';
			if(extension_loaded('mysqli')){ 
				$fc.='mysqli(√)';	
			}else{
				$fc.='mysqli(×)';
			}
			$fc.='&nbsp;&nbsp;';
			if(extension_loaded('pdo')){ 
				$fc.='pdo(√)';	
			}else{
				$fc.='pdo(×)';
			}
			$fc.='</span>';
			$fc.='<span>必须开启一项</span>';
			if(extension_loaded('pdo') || extension_loaded('mysqli')){
				$fc.='<span><img src="images/correct.gif" /></span>';
			}else{
				$fc.='<span class="red-font"><img src="images/error.gif" />&nbsp;无法安装</span>';
				$ok=false;
			}
			$fc.='</li>';



			$fc.='<li class="dark-row">';
			$fc.='<span>JSON 扩展</span>';
			$fc.='<span>';
			if(extension_loaded('json')){ 
				$fc.='√';	
			}else{
				$fc.='×';
			}
		
			$fc.='</span>';
			$fc.='<span>必须开启</span>';
			if(extension_loaded('json')){
				$fc.='<span><img src="images/correct.gif" /></span>';
			}else{
				$fc.='<span class="red-font"><img src="images/error.gif" />&nbsp;不只持json,<a href="http://pecl.php.net/package/json" target="_blank">安装 PECL扩展</a></span>';
				$ok=false;
			}
			$fc.='</li>';


			$fc.='<li class="light-row">';
			$fc.='<span>GD 扩展</span>';
			$fc.='<span>';
			$stas=false;
			if(extension_loaded('gd')){ 
				$fc.='√&nbsp;&nbsp;(支持';
				if (imagetypes() & IMG_PNG) {
					$fc.='png&nbsp;';
					$stas=true;
				}
				if (imagetypes() & IMG_GIF) {
					$fc.='gif&nbsp;';
					$stas=true;
				}
				if (imagetypes() & IMG_JPEG) {
					$fc.='jpg&nbsp;';
					$stas=true;
				}
				$fc.=")";
		
			}else{
				$fc.='×';
			}
			$fc.='</span>';
			$fc.='<span>必须开启</span>';
			if(extension_loaded('gd') && $stas){
				$fc.='<span><img src="images/correct.gif" /></span>';
			}else{
				$fc.='<span class="red-font"><img src="images/error.gif" />&nbsp;不支持缩略图和水印</span>';
				$ok=false;
			}
			$fc.='</li>';

			$fc.='<li class="dark-row">';
			$fc.='<span>打开远程文件</span>';
			$fc.='<span>';
			if(ini_get('allow_url_fopen')){ 
				$fc.='√';	
			}else{
				$fc.='×';
			}
		
			$fc.='</span>';
			$fc.='<span>建议打开</span>';
			if(ini_get('allow_url_fopen')){
				$fc.='<span><img src="images/correct.gif" /></span>';
			}else{
				$fc.='<span class="red-font"><img src="images/error.gif" />&nbsp;不支持保存远程图片</span>';
				$ok=false;
			}
			$fc.='</li>';

			$fc.='<li class="light-row">';
			$fc.='<span>index.php文件</span>';
			$fc.='<span>';
			if( is_writable("../index.php")){ 
				$fc.='<img src="images/correct.gif" />&nbsp;可写';	
			}else{
				$fc.='<img src="images/error.gif" />&nbsp;不可写';
			}
		
			$fc.='</span>';
			$fc.='<span>文件必须可写</span>';
			if( is_writable("../index.php")){ 
				$fc.='<img src="images/correct.gif" />&nbsp;可写';	
			}else{
				$fc.='<img src="images/error.gif" />&nbsp;不可写';
				$ok=false;
			}
			$fc.='</li>';
			$fc.='<li class="dark-row">';
			$fc.='<span>config.inc.php文件</span>';
			$fc.='<span>';
			if( is_writable("../config.inc.php")){ 
				$fc.='<img src="images/correct.gif" />&nbsp;可写';	
			}else{
				$fc.='<img src="images/error.gif" />&nbsp;不可写';
			}
		
			$fc.='</span>';
			$fc.='<span>文件必须可写</span>';
			if( is_writable("../config.inc.php")){ 
				$fc.='<img src="images/correct.gif" />&nbsp;可写';	
			}else{
				$fc.='<img src="images/error.gif" />&nbsp;不可写';
				$ok=false;
			}
			$fc.='</li>';

			$fc.='<li class="light-row">';
			$fc.='<span>runtime目录</span>';
			$fc.='<span>';
			if( is_writable("../runtime")){ 
				$fc.='<img src="images/correct.gif" />&nbsp;可写';	
			}else{
				$fc.='<img src="images/error.gif" />&nbsp;不可写';
			}
		
			$fc.='</span>';
			$fc.='<span>目录必须可写</span>';
			if( is_writable("../runtime")){ 
				$fc.='<img src="images/correct.gif" />&nbsp;可写';	
			}else{
				$fc.='<img src="images/error.gif" />&nbsp;不可写';
				$ok=false;
			}
			$fc.='</li>';

			$fc.='<li class="dark-row">';
			$fc.='<span>public/uploads目录</span>';
			$fc.='<span>';
			if( is_writable("../public/uploads")){ 
				$fc.='<img src="images/correct.gif" />&nbsp;可写';	
			}else{
				$fc.='<img src="images/error.gif" />&nbsp;不可写';
			}
		
			$fc.='</span>';
			$fc.='<span>目录必须可写</span>';
			if( is_writable("../public/uploads")){ 
				$fc.='<img src="images/correct.gif" />&nbsp;可写';	
			}else{
				$fc.='<img src="images/error.gif" />&nbsp;不可写';
				$ok=false;
			}
			$fc.='</li>';
			$fc.='</ol>';
			$fc.='<div class="center body-box">';
			$fc.='<input type="hidden" name="step" value="3">';
			if($ok) {
				$fc.='<input type="button" class="button" value="上一步" onclick="history.back()">';
				$fc.='<input type="submit" class="button" value="下一步" >';
			}else{
				$fc.='<input type="button" class="button" value="请检查环境" onclick="history.back()">';
			}
			$fc.='</div>';
			$fc.='</form>';

			return $fc;
		}
		//==========================================
		// 函数: getDbFrom($info, $inputs, $error="tip-msg")
		// 功能: 获取数据库配置表单
		// 参数: info是安装过程中的提示信息，inputs是用户在表单中输入的内容数组，error是错误报告的样式类
		// 返回: 数据库配置表单界面字符串
		//==========================================
		function getDbFrom($info, $inputs, $error="tip-msg"){
			$fc.='<div class="body-box '.$error.'">'.$info.'</div>';
			$fc.='<form method="'.$this->method.'" action="'.$this->action.'" class="'.$this->class.'">';
			$fc.='<ul>';

			$fc.='<li class="light-row">';
			$fc.='<span class="col_width">选择数据库连接驱动</span>';
			$fc.='<input type="radio" name="DRIVER" checked value="pdo" />&nbsp;pdo&nbsp;&nbsp;&nbsp;&nbsp;';
			$fc.='<input type="radio" name="DRIVER" value="mysqli" />&nbsp;mysqli&nbsp;&nbsp;&nbsp;&nbsp;';
			$fc.='系统支持pdo(默认)和mysqli两种';
			$fc.='</li>';

			$fc.='<li class="dark-row">';
			$fc.='<span class="col_width">数据库主机名称</span>';
			$fc.='<input type="text" class="text-box" name="HOST" value="'.$inputs["HOST"].'">';
			$fc.='数据库服务器地址, 一般为 localhost';
			$fc.='</li>';
			
			$fc.='<li class="light-row">';
			$fc.='<span class="col_width">数据库用户名</span>';
			$fc.='<input type="text" class="text-box" name="USER" value="'.$inputs["USER"].'">';	
			$fc.='数据库账号用户名';
			$fc.='</li>';

			$fc.='<li class="dark-row">';
			$fc.='<span class="col_width">数据库密码</span>';
			$fc.='<input type="password" class="text-box" name="PASS" value="'.$inputs["PASS"].'">';	
			$fc.='数据库账号密码';
			$fc.='</li>';

			$fc.='<li class="light-row">';
			$fc.='<span class="col_width">数据库名称</span>';
			$fc.='<input type="text" class="text-box" name="DBNAME" value="'.$inputs["DBNAME"].'">';	
			$fc.='数据库名称,数据库必须存在';
			$fc.='</li>';


			$fc.='<li class="dark-row">';
			$fc.='<span class="col_width">表名前缀</span>';
			$fc.='<input type="text" class="text-box" name="TABPREFIX" value="'.$inputs["TABPREFIX"].'">';
			$fc.='同一数据库安装多CMS时可改变默认';
			$fc.='</li>';

			$fc.='<li class="light-row">';
			$fc.='<span class="col_width">网站名称</span>';
			$fc.='<input type="text" class="text-box" name="APP_NAME" value="'.$inputs["APP_NAME"].'">';	
			$fc.='用于在标题栏上显示';
			$fc.='</li>';

			$fc.='</ul>';
			$fc.='<div class="center body-box">';
			$fc.='<input type="hidden" name="step" value="4">';
			$fc.='<input type="button" class="button" value="上一步" onclick="history.back()">';
			$fc.='<input type="submit" class="button" value="下一步" >';
			$fc.='</div>';
			$fc.='</form>';
			return $fc;	
		}
		//==========================================
		// 函数: getAdminFrom($info, $inputs, $error="tip-msg")
		// 功能: 添写管理员用户名和密码的表单
		// 参数: info是安装过程中的提示信息，inputs是用户在表单中输入的内容数组，error是错误报告的样式类
		// 返回: 管理员添加表单界面字符串
		//==========================================
		function getAdminFrom($info, $inputs, $error="tip-msg"){
			$fc.='<div class="body-box '.$error.'">'.$info.'</div>';
			$fc.='<form method="'.$this->method.'" action="'.$this->action.'" class="'.$this->class.'">';
			$fc.='<ul>';

			$fc.='<li class="light-row liimg">';
			$fc.='<span class="col_width">管理员帐号</span>';
			$fc.='<input type="text" class="text-box" name="ADMIN_USER" value="'.$inputs["ADMIN_USER"].'">';
			$fc.='</li>';
			
			$fc.='<li class="dark-row liimg">';
			$fc.='<span class="col_width">管理员密码</span>';
			$fc.='<input type="password" class="text-box" name="ADMIN_PWD" value="'.$inputs["ADMIN_PWD"].'">';
			$fc.='</li>';
			$fc.='<li class="light-row liimg">';
			$fc.='<span class="col_width">重复密码</span>';
			$fc.='<input type="password" class="text-box" name="ADMIN_REPWD" value="'.$inputs["ADMIN_REPWD"].'">';	
			$fc.='</li>';
			$fc.='<li class="dark-row liimg">';
			$fc.='<span class="col_width">管理员邮箱</span>';
			$fc.='<input type="text" class="text-box" name="ADMIN_MAIL" value="'.$inputs["ADMIN_MAIL"].'">';	
			$fc.='</li>';

			$fc.='</ul>';
			$fc.='<div class="center body-box">';
			$fc.='<input type="hidden" name="step" value="5">';
			$fc.='<input type="button" class="button" value="上一步" onclick="history.back()">';
			$fc.='<input type="submit" class="button" value="下一步" >';
			$fc.='</div>';
			$fc.='</form>';
			return $fc;	
		}
		//==========================================
		// 函数: getInstallMessage($message, $installStats)
		// 功能: 安装信息显示的表单界面
		// 参数: $message是安装的提示信息，installStats安装的成功或失败的状态信息
		// 返回: 安装信息显示界面字符串
		//==========================================
		function getInstallMessage($message, $installStats){
			$fc="";
			$fc.='<div class="body-box tip-msg">';
			$fc.='安装信息显示！！';
			$fc.='</div>';
			$fc.='<div class="body-box">';
			$fc.='<div class="license">';
			$fc.=$message;
			$fc.='</div></div>';
			$fc.='<div class="center body-box">';
			$fc.='<form method="'.$this->method.'" action="'.$this->action.'">';
			if($installStats){
				$fc.='<input type="hidden" name="step" value="6">';
				$fc.='<input type="submit" class="button" value="恭喜您安装成功，点击进入首页" >';
			
			}else{
				$fc.='<input type="button" class="button" value="安装失败，请返回" onclick="history.back()">';
			}	
			$fc.='</form>';
			$fc.='</div>';
			return $fc;	
		}

	}
?>

