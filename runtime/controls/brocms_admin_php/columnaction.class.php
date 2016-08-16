<?php
	class ColumnAction extends Common {
		function index(){
			$column=D("column");
			$this->mess('提示：可以通过重新排序改变栏目的在首页中的显示顺序,数值小的排在前面，还可以关闭部分栏目的显示.<br>注意：只能删除空栏目，如果样目下有文章或子栏目，请先删除.');
			$this->assign("list", $column->parsetree());
			$this->display();
		}

		function add(){
			$column=D("column");
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$this->assign("post", array("audit"=>1));
			$this->assign("select", $column->formselect());
			$this->display();
		}

		function insert(){
			$column=D("column");
			$pid=$_POST["pid"];
			if($pid=='0') {
				$_POST["path"]="0";
			} else {
				$data=$column->field('path')->find($pid);
				$_POST["path"]=$data["path"].'-'.$pid;
			}
			$jz=false;
			if($column->insert($_POST, 1, 1)){
				$this->mess("新分类 <b>{$_POST["title"]}</b> 添加成功，可以继续添加！",true);	

			}else{
				$this->assign("post", $_POST);
				$this->mess($column->getMsg(), false);
				$jz=true;
			}

			if(isset($_POST["jz"])){
				$this->assign("select", $column->formselect("pid", $pid));
				$this->assign("jz", "checked");
			}else{
				if($jz)
					$this->assign("select", $column->formselect("pid", $pid));
				else
					$this->assign("select", $column->formselect());
			}			
			$this->display("add");			
		}

		function dis(){
			$data["id"]=$_GET["id"];
			$data["display"]=$_GET["con"];
			D("column")->update($data);
		}

		function order(){
			$column=D("column");

			if($column->corder($_POST)) {
				$this->mess($column->getMsg(),true);
			}else{
				$this->mess($column->getMsg(), false);
			}
			$this->assign("list", $column->parsetree());
			$this->display("index");
		}
		function mod(){
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息。<br>注意：不能将类别移动到自己的子类中去. ');
			$column=D("column");
			$data=$column->find($_GET["id"]);
			$image=D("image")->field("name")->find($data["picid"]);
			$data["picname"]=$image["name"];
			$this->assign("select", $column->formselect("pid", $data["pid"]));
			$this->assign("post", $data);
			$this->display();
		}
		function update(){
			$column=D("column");
			
			if($column->catMod($_POST)){
				$this->mess("修改相册成功！", true);
				$this->assign("list", $column->parsetree());
				$this->display("index");
			}else{
				$this->mess($column->getMsg(),false);
				$this->assign("select", $column->formselect("pid", $_POST["pid"]));
				$this->assign("post", $_POST);
				$this->display("mod");
			}
		
		}
		function del(){
			$column=D("column");
			$article=D("article");
			if ($column->total(array("pid"=>$_GET["id"])) > 0){
				$this->mess("只能删除空分类，分类中有子分类存在不能删除！", false);
			} else if($article->total(array("pid"=>$_GET["id"])) > 0){
				$this->mess("只能删除空分类，分类中有文章存在不能删除，请先删除本类中的文章！", false);
			} else {	
				if($column->delete($_GET["id"])){
					$this->mess("分类删除成功！", true);
				}else{
					$this->mess("分类删除失败！", false);
				}
			}
			
			$this->assign("list", $column->parsetree());
			$this->display("index");
		}
	}
