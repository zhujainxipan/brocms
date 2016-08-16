<?php
	/*==================================================================*/
	/*		文件名:Process_class.php                            */
	/*		概要: 安装处理类，用于改写配置文章创建数据库和数据表*/
	/*		作者: 高洛峰                                        */
	/*		创建时间: 2009-05-01                                */
	/*		最后修改时间:2009-05-01                             */
	/*		copyright (c)2009 lampteacher@gmail.com             */
	/*==================================================================*/
	class  Process {
		private $configFile;
		private $sqlFile;
		private $info;
		//==========================================
		// 函数: __construct($configFile="../config.inc.php", $sqlFile="lampcms.sql")
		// 功能: 构造方法用于初使化对象的成员属性
		// 参数: configFile是指定需要修改的配置文件，sqlFile是需要安装数据表的SQL语句文件 
		// 返回: 无
		//==========================================	
		function __construct($configFile="../config.inc.php", $sqlFile="brocms.sql"){
			$this->configFile=$configFile;
			$this->sqlFile=$sqlFile;
			$this->info="";
		}
		//==========================================
		// 函数: configSYS($configArray)
		// 功能: 用于修改指定配置文件中的内容
		// 参数: configArray需要在配置文件中修改的内容数组
		// 返回: true或false
		//==========================================	
		function configSYS($configArray) {
			$configText = file_get_contents($this->configFile);
			foreach($configArray as $key => $val) {
				$pattern[]='/define\(\"'.$key.'\",\s*.+\);/';
				$repContent[]='define("'.$key.'", "'.$val.'");';
			}
			$configText = preg_replace($pattern, $repContent, $configText);
			return file_put_contents($this->configFile, $configText);
		}

		//==========================================
		// 函数:  createDb($user)
		// 功能: 用于创建系统所需要的数据库、数表表，以及添加管理员用户和一些分类的默认记录
		// 参数: user是在安装界面中指定的管理员用户信息
		// 返回: true或false
		//==========================================			
		function createDb($user){
			$mysql=mysql_connect(HOST, USER, PASS);	
			if(!$mysql) {
				$this->info.='<font color="red">连接失败，原因为：'.mysql_error().'</font>';
				return false;
			}

			if(mysql_select_db(DBNAME)){
				$this->info.='数据库<b>'.DBNAME.'</b>选择成功<br>';
			}else{
				$this->info.='<font color="red">选择数据库<b>'.DBNAME.'</b>失败！<font>';
				return false;
			}
			$sqls='';
			$fp=fopen($this->sqlFile, "r");

			while(!feof($fp)){
				$line=trim(fgets($fp));
				if($line!=""){
					$sqls .= $line{0} == '#' || $line{0}.$line{1} == '--' ? '' : $line;
				}
			}

			fclose($fp);

			$sqls=rtrim(str_replace(' bro_', ' '.TABPREFIX, $sqls), ";");

			$ret=explode(";", $sqls);
		
			foreach($ret as $query) {
			
				if(substr($query, 0, 12) == 'CREATE TABLE') {
					$name = preg_replace("/CREATE TABLE ([a-z0-9_]+) .*/is", "\\1", $query);
					if(mysql_query($query)){
						$this->info.='建立数据表'.' <b>'.$name.'</b> ... '.'成功！！<br>';
					}else{
						$this->info.='<font color="red">建立数据表'.' '.$name.' ... '.'失败！</font>';						
					       	mysql_close();
						return false;
					}	
				} else {
					if(!mysql_query($query)){
						$this->info.='<font color="red">查询语句'.$query.'执行失败！</font>';							
						mysql_close();
						return false;
					}
				}
			}
		
			$insert="INSERT INTO ".TABPREFIX."user(gid,username, userpwd, email,regtime) VALUES('1','".$user["ADMIN_USER"]."', '".md5($user["ADMIN_PWD"])."','".$user["ADMIN_MAIL"]."','".time()."')";
			
			if(mysql_query($insert)){
				$this->info.='添加管理员用户<b>'.$user["ADMIN_USER"].'</b>成功！<br>';
			}else{
				$this->info.='<font color="red">添加管理员用户<b>'.$user["ADMIN_USER"].'</b>失败！<font>';
				mysql_close();
				return false;
			}
			
			mysql_close();
			return true;		
		}
		//==========================================
		// 函数: getInstallInfo()
		// 功能: 用于安装过程中的提示信息
		// 参数: 无
		// 返回: 返回安装过程中的提示信息字符串
		//==========================================		
		function getInstallInfo(){
			return $this->info;
		}
	}
?>

