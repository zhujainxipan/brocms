<?php
	class Base {
		function sysinfo(){
			$sysinfo=new Sysinfo;
			$this->assign("sysinfo", $sysinfo->getSysInfos());	
			$this->mess('可以根据网站的需要，对服务器现有的配置进行调整.');
			$this->display();
		} 

		function baseset(){
			$stats=isset($_GET["stats"]) ? $_GET["stats"] : null;
			$mess=isset($_GET["mess"]) ? $_GET["mess"] : "水印一般为网站LOGO图片.";
			$this->mess($mess, $stats); 
			$this->assign("varList",BaseSet::getSet());
			$this->display();
		}


		function set(){		
			if(BaseSet::writeConfig($_POST)){
				$this->redirect("baseset", "stats/1/mess/修改成功！");
			}else {
				$this->redirect("baseset", "stats/0/mess/修改失败！");
			}
		
		}
		function upcache(){
			$cachedir=PROJECT_PATH."runtime/cache/";
			deldir($cachedir);
			$tmpdir=PROJECT_PATH."public/uploads/tmp/";
			deldir($tmpdir);
			if(!file_exists($cachedir)) {
				$this->mess("更新所有缓存成功！", 1); 
			}else{
				$this->mess("更新缓存失败！", 0);
			}
			$this->display();
		}	
	}
