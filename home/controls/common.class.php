<?php
	class Common extends Action {
		function init(){
			if(!file_exists("./runtime/install.lock")){
				header("Location:./install/index.php");
			}
			//消息数
			$amks=array("index", "list", "article", "search");
			if(in_array($_GET["m"], $amks) && isset($_SESSION["login"]) && $_SESSION["login"]===1){
				$message=D("message");
				$where=array("revicename"=>$_SESSION["username"], "stutas"=>1);
				$this->assign("mtotal",$message->where($where)->total());
			}
			//没登录不能操作
			$bmks=array("user", "dynamic", "message");
			if(in_array($_GET["m"], $bmks) && $_SESSION["login"]!==1 && $_GET["a"] !="gts"){
				$this->error("你还没有登录，请先登录才能完成该操作", 3, "index/index");
			}

			if($_SESSION["articleadmin"] != "1") {
				//没有发文章的权限不能操作
				$aczs=array("add", "insert", "mod", "update", "upimage", "upflash"); //和文章有关的操作
				if($_GET["m"]=="dynamic" && in_array($_GET["a"], $aczs) && $_SESSION["sendarticle"]!=1){
					$this->error("你没有对文章的操作权限", 3);
				}


				//没有发评论的权限不能操作
				$bczs=array("addc", "modc"); //和评论有关的操作
				if($_GET["m"]=="dynamic" && in_array($_GET["a"], $bczs) && $_SESSION["sendcomment"]!=1){
					$this->error("你没有对评论的操作权限", 3);
				}
			}

			$nocache=array("user", "dynamic", "message","search");

			if(in_array($_GET["m"], $nocache)){
				$this->caching=0;     //设置缓存关闭
			}

		}		
	}
