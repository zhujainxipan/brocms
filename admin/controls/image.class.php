<?php
	class Image {
		function index() {
			if(!empty($_GET["pid"])){
				$where=array("pid"=>$_GET["pid"]);
				$pid=$_GET["pid"];
			}else{
				$where="";
				$pid=0;
			}

			$this->mess('提示:如果想更改图片列表的显示方式请到系统管理的基本设置中进行修改.');
			$album=D("album");
			$this->assign("select", $album->formselect("pid", $pid, "请选择"));
			$image=D("image");
			$page=new Page($image->total($where), PICTURE_PAGE_SIZE,"pid/{$pid}");
			$page->set("head", "张图片")
			     ->set("first", "|&lt;")
			     ->set("last", "&gt;|")
			     ->set("next", "&gt;&gt;|")
			     ->set("prev", "|&lt;&lt;");
			$images=$image->field("id,name,water")->order("id desc")->limit($page->limit)->select($where);

			$this->assign("images", $images);
			$this->assign("fpage", $page->fpage(0,3,4,5,6));
			$this->assign("pid",$pid);

			$this->display();
		}

		function add(){
			$album=D("album");
			$this->assign("select", $album->formselect("pid", 0, "请选择相册"));
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息.<br>注意: 可以上传的图片格式支持GIF,JPEG和PNG三种,大小不能超过2M.  ');
			$this->display();
		}

		function insert(){
		
			global $pictureSize,$thumbSize;
			$up=new FileUpload();
			if(isset($_POST["thumb"])) {
				$up->set("thumb", array("width"=>$thumbSize["width"], "height"=>$thumbSize["height"]));
				$this->assign("thumb", "checked");
			} else {
				$up->set("thumb", array("width"=>$pictureSize["maxWidth"], "height"=>$pictureSize["maxHeight"]));
			}
			
			if(isset($_POST["water"])){
				$up->set("watermark", array("water"=>WATER, "position"=>POSITION, "prefix"=>"wa_"));
				$this->assign("water", "checked");
			}


			if($up->upload("pic")){
				$image=D("image");
				$names=$up->getFileName();	
				foreach($names as $name){
					$_POST["name"]=$name;
					$image->insert($_POST, 1, 1);
				}
				$this->mess('图片添加成功.', true);
				$this->redirect("index", "pid/{$_POST["pid"]}");
			}else{
			
				$this->mess($up->getErrorMsg(),false);
				$album=D("album");
				$this->assign("select", $album->formselect("pid", $_POST["pid"], "请选择相册"));
				
				$this->display("add");
			}
		}
		function del(){
			$image=D("image");
			$images=$image->field("name")->select($_POST["id"]);
			if($image->delete($_POST["id"])){
				$image->delimage($images); //删除图片
				$this->redirect("index", "pid/{$_GET["pid"]}");
			}else{
				$this->error("删除图片失败", 1, "image/index/pid/{$_GET["pid"]}");
			}
		}

		function open(){
			debug(0);

			if(!empty($_GET["pid"])){
				$where=array("pid"=>$_GET["pid"]);
				$pid=$_GET["pid"];
			}else{
				$where="";
				$pid=0;
			}

			$album=D("album");
			$this->assign("select", $album->formselect("pid", $pid, "请选择", "onchange='imglist(\"".B_URL."/open/pid/\"+this.options[this.selectedIndex].value)'"));
			$image=D("image");
			$page=new AjaxPage($image->total($where), 10,"pid/{$pid}");
			$page->set("head", "张图片")
			     ->set("first", "|&lt;")
			     ->set("last", "&gt;|")
			     ->set("next", "&gt;&gt;|")
			     ->set("prev", "|&lt;&lt;");
			$images=$image->field("id,name")->order("id desc")->limit($page->limit)->select($where);

			$this->assign("images", $images);
			$this->assign("fpage", $page->fpage(0,1,3,4,5,6,7));
			$this->assign("pid",$pid);
			$this->display();
		}
	}
