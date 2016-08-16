<?php
	class AlbumAction extends Common {
		function index(){
			$album=D("album");
			$this->mess('提示：删除相册时只能删除空相册，如果相册下有子相册或有图片，请先删除子分类和图片. ');
			$this->assign("list", $album->parsetree());
			$this->display();
		}

		function add(){
			$album=D("album");
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$this->assign("select", $album->formselect());
			$this->display();
		}
		function insert(){
			$album=D("album");
			$pid=$_POST["pid"];
			if($pid=='0') {
				$_POST["path"]="0";
			} else {
				$data=$album->field('path')->find($pid);
				$_POST["path"]=$data["path"].'-'.$pid;
			}
			$jz=false;
			if($album->insert($_POST, 1, 1)){
				$this->mess("新相册 <b>{$_POST["title"]}</b> 添加成功，可以继续添加！",true);	

			}else{
				$this->assign("post", $_POST);
				$this->mess($album->getMsg(), false);
				$jz=true;
			}

			if(isset($_POST["jz"])){
				$this->assign("select", $album->formselect("pid", $pid));
				$this->assign("jz", "checked");
			}else{
				if($jz)
					$this->assign("select", $album->formselect("pid", $pid));
				else
					$this->assign("select", $album->formselect());
			}			
			$this->display("add");
		}
		function mod(){
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息。<br>注意：不能将类别移动到自己的子类中去. ');
			$album=D("album");
			$data=$album->find($_GET["id"]);
			$this->assign("select", $album->formselect("pid", $data["pid"]));
			$this->assign("post", $data);
			$this->display();
		}
		function update(){
			$album=D("album");
			
			if($album->catMod($_POST)){
				$this->mess("修改相册成功！", true);
				$this->assign("list", $album->parsetree());
				$this->display("index");
			}else{
				$this->mess($album->getMsg(),false);
				$this->assign("select", $album->formselect("pid", $_POST["pid"]));
				$this->assign("post", $_POST);
				$this->display("mod");
			}
		
		}
		function del(){
			$album=D("album");
			$image=D("image");
			if ($album->total(array("pid"=>$_GET["id"])) > 0){
				$this->mess("只能删除空相册，相册中有子相册的存在不能删除！", false);
			} else if($image->total(array("pid"=>$_GET["id"])) > 0){
				$this->mess("只能删除空相册，相册中有图片存在不能删除，请先删除本类中的图片！", false);
			} else {	
				if($album->delete($_GET["id"])){
					$this->mess("相册删除成功！", true);
				}else{
					$this->mess("相册删除失败！", false);
				}
			}
			
			$this->assign("list", $album->parsetree());
			$this->display("index");
		}

	}
