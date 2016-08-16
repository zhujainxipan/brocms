<?php
	class BaseSet{


		//==========================================
		// 函数: getSet()
		// 功能: 获取需要设置的信息数组
		// 参数: 无
		// 返回: 需要对系统进行设置的选择数组
		//==========================================
		static function getSet(){
			$content=file_get_contents(PROJECT_PATH."index.php");
			$style="/define\(\"TPLSTYLE\"\s*,\s*\"(.+?)\"\);/i";
			preg_match($style,$content, $arr);

			$style="/define\(\"CSTART\"\s*,\s*\"(.+?)\"\);/i";
			preg_match($style,$content, $brr);

			global $styleList,$pictureSize,$thumbSize;
			$varList = array("selectStyle"		=> $styleList,
					"appStyle"		=> $arr[1],
					 "cstart"               => $brr[1],
					 "articlePageSize"	=> ARTICLE_PAGE_SIZE,
					 "picturePageSize"	=> PICTURE_PAGE_SIZE,	
					 "water"		=> WATER,
					 "position"		=> POSITION,
					 "ctime"		=> CTIME,
					 "appname"              => APP_NAME,
					 "keyword"              => KEYWORD,
					 "description"          => DESCRIPTION,
					 "width"		=> $thumbSize["width"],
					 "height"		=> $thumbSize["height"],
					 "maxWidth"		=> $pictureSize["maxWidth"],
					 "maxHeight"		=> $pictureSize["maxHeight"]
				 );
			return $varList;
		}




		private function upload(){
			$up=new FileUpload(array("filePath"=>GALLERY_REAL_PATH));

			if(!$up->uploadFile($_FILES["water"])){
				return $up->getNewFileName();
			}else{
				$this->messList[]=$up->getErrorMsg();
				return false;
			}
		}

		static function writeindex($style,$start){
			$file=PROJECT_PATH."index.php";

			$content=file_get_contents($file);

			$reg[]="/define\(\"TPLSTYLE\".+?;/i";
			$reg[]="/define\(\"CSTART\".+?;/i";
			
			$rep[]="define(\"TPLSTYLE\",\"{$style}\");";
			$rep[]="define(\"CSTART\",\"{$start}\");";
			file_put_contents($file, preg_replace($reg, $rep, $content));
		}

		//==========================================
		// 函数: writeConfig($fileName,$post)
		// 功能: 用于将用户输入的设置信息改写配置文件
		// 参数: fileName是配置文件的名称，和需要设置的内容数组
		// 返回: true或false
		//==========================================
		static function writeConfig($post){
			$confile=PROJECT_PATH."config.inc.php";
		
			$configText = file_get_contents($confile);
			
			self::writeindex($post['appStyle'], $post['cstart']);
			
			$reg=array(
					"/define\(\"CTIME\".+?;/i",
					"/define\(\"APP_NAME\".+?;/i",
					"/define\(\"KEYWORD\".+?;/i",
					"/define\(\"DESCRIPTION\".+?;/i",
					"/define\(\"ARTICLE_PAGE_SIZE\".+?;/i",		
					"/define\(\"PICTURE_PAGE_SIZE\".+?;/i",		
					"/define\(\"POSITION\".+?;/i",
					"/pictureSize\s*=\s*.+?;/i",	
					"/thumbSize\s*=\s*.+?;/i"	
				);
			$rep=array(	
					"define(\"CTIME\", \"{$post['ctime']}\");",
					"define(\"APP_NAME\", \"{$post['appname']}\");",
					"define(\"KEYWORD\", \"{$post['keyword']}\");",
					"define(\"DESCRIPTION\", \"{$post['description']}\");",
					"define(\"ARTICLE_PAGE_SIZE\", \"{$post['articlePageSize']}\");",
					"define(\"PICTURE_PAGE_SIZE\", \"{$post['picturePageSize']}\");",
					"define(\"POSITION\", \"{$post['position']}\");",
					"pictureSize = array('maxWidth' => {$post['maxWidth']}, 'maxHeight' => {$post['maxHeight']});",
					"thumbSize = array('width' => {$post['width']}, 'height' => {$post['height']});"
				);
			
			

			if(isset($_FILES["water"])) {
				$water=self::changeWater();

				if($water) {
					$img="/define\(\"WATER\"\s*,\s*\"(.+?)\"\);/i";
					preg_match($img, $configText, $arr);
				
					$srcimg=PROJECT_PATH."public/uploads/".$arr[1];
				
					if(file_exists($srcimg))
						unlink($srcimg);

					$reg[] = $img;
					$rep[] = "define(\"WATER\",\"{$water}\");";
					
				}		
			
			}
			
			return file_put_contents($confile, preg_replace($reg, $rep, $configText));
		}
		static function changeWater(){
			$up=new FileUpload;
		
			if($up->upload("water")){
				return $up->getFileName();
			}else{
				return false;
			} 
		}


	}

