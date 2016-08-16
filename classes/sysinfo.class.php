<?php
	/*==================================================================*/
	/*		文件名:SysInfo.class.php                            */
	/*		概要: 系统信息管理类.                	       	    */
	/*		作者: 高洛峰                                        */
	/*		创建时间: 2009-05-25                                */
	/*		最后修改时间:2009-05-25                             */
	/*		copyright (c)2009 lampteacher@gmail.com             */
	/*==================================================================*/
	class Sysinfo {
		private $gd;
		private $serverEnv;
		private $domainName;
		private $phpVersion;
		private $gdInfo;
		private $freeType;
		private $mysqlVersion;
		private $allowUrl;
		private $fileUpload;
		private $dbSize;
		private $maxExeTime;

		function __construct(){
			$db=D();
			$this->serverEnv =$this->getServerEnv();
			$this->domainName = $_SERVER['SERVER_NAME'];
			$this->phpVersion = PHP_VERSION;
			$this->gdInfo = $this->getGdInfo();
			$this->freeType = $this->getFreeType();
			$this->mysqlVersion =$db->dbVersion();
			$this->allowUrl = $this->getAllowUrl();
			$this->fileUpload = $this->getFileUpload();
			$this->dbSize = $db->dbSize();
			$this->maxExeTime = $this->getMaxExeTime();
		}

		private function getServerEnv() {
			return PHP_OS.' | '.$_SERVER['SERVER_SOFTWARE'];
		}



		private function getGdInfo() {
			if(function_exists('gd_info')){
				$this->gd = gd_info();
				$gdInfo = $this->gd['GD Version'];
			}else {
				$gdInfo = '<span class="red_font">未知</span>';
			}
			return $gdInfo;
		}

		private function getFreeType() {
			if($this->gd["FreeType Support"])
				return '支持';
			else
				return '<span class="red_font">不支持</span>';
		}


		private function getAllowUrl() {
			if(@ini_get('allow_url_fopen'))
				return '支持';
		        else
				return '<span class="red_font">不支持</span>';
		}

		private function getFileUpload() {
			if(@ini_get('file_uploads')){
				$umfs = ini_get('upload_max_filesize');
				$pms = ini_get('post_max_size');
   				return '允许 | 文件:'.$umfs.' | 表单：'.$pms;
			}else{
				return '<span class="red_font">禁止</span>';
			}
		}
	


		private function getMaxExeTime() {
			return ini_get('max_execution_time').'秒';
		}
		
		public function getSysInfos() {
			$infos=array(
				"服务器环境:" => $this->serverEnv,
				"域名:" => $this->domainName,
				"PHP版本:" => $this->phpVersion,
				"GD库版本:" => $this->gdInfo,
				"FreeType:" => $this->freeType,
				"MYSQL版本:" => $this->mysqlVersion,
				"远程文件获取:" => $this->allowUrl,
				"文件上传:" => $this->fileUpload,
				"数据库使用:" => $this->dbSize,
				"脚本最大执行时间"=> $this->maxExeTime
			);
			return $infos;
		}	
	}

