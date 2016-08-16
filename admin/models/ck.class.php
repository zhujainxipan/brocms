<?php
	class Ck {
		function aimage($content, $lastid, $prefix=""){
			if(rtrim($content)=="")
			{
				$this->setMsg("内容不能为空");
				return false;
			}
			$content=str_replace(array("\"", "'"), array("&quot;", "&#039;"), stripslashes($content));

		
			if(!empty($_SESSION["article"])){
				$srcpath=PROJECT_PATH."public/uploads/";
				$path=$srcpath.$prefix.$lastid.'/';
				foreach($_SESSION["article"] as $filename){
					$content=str_replace("tmp/".$filename, $prefix.$lastid."/".$filename, $content);

					if(!file_exists($path)){
						mkdir($path, 0755);
					}

					rename($srcpath.'tmp/'.$filename, $path.$filename);
				}
				$_SESSION["article"]=array();
			}
		
			return $this->where($lastid)->update("content='{$content}'");
		}

		function delres($id, $prefix=""){
			//如果是删除文章，删除文章对应的所有评论，及用户对这个文章的操作
			if($prefix==""){
				D("comment")->where(array('aid'=>$id))->delete();
				D("dynamic")->where(array("otype"=>array(1,2,3,4),"cid"=>$id))->delete();
			}

			$directory=PROJECT_PATH."public/uploads/".$prefix.$id.'/';
		
			if(file_exists($directory)) {      
				if($dir_handle=@opendir($directory)) {      
					while(false!==($filename=readdir($dir_handle))) {  
						if($filename!="." && $filename!="..") {   
							unlink($directory."/".$filename);             
						}
					}
					closedir($dir_handle);                      
				                     
				}
				rmdir($directory);     
			}
		}
	}
