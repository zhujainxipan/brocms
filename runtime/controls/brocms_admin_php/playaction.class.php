<?php
	class PlayAction extends Common {
		function index(){
			$play=D("play");
			$this->mess('共有幻灯片 <b class="red_font">'.$play->total().'</b> 条，在首页中最多显示6张，可以通过输入整数改变幻灯片显示顺序,从小到大的排列顺序.<br><span style="background:#FAECBA"><a href="'.B_URL.'/index/action/2">深色</a></span>的记录被设置为不显示,如果结束时间为<a href="'.B_URL.'/index/action/4" style="color:red">红色</a>表示已经过期,如果开始时间为<a href="'.B_URL.'/index/action/5" style="color:blue">蓝色</a>表示还没有到期.');


			if($_GET["action"]==1)
				$where=array("display"=>1);
			else if($_GET["action"]==2)
				$where=array("display"=>0);
			else if($_GET["action"]==3)
				$where=array("endtime"=>'');
			else if($_GET["action"]==4)
				$where=array("endtime <"=>time(), "endtime !="=>'');
			else if($_GET["action"]==5)	
				$where=array("starttime >"=>time());
			else
				$where="";

			$this->assign("plays", $play->field("id,aid,title,starttime,endtime,ord,display")->order("ord asc")->select($where));		
			$this->display();
		}
		
		private function showform($start="", $end=""){
			if($start=="")
				$start=time();
			$this->assign("starttime", Form::date("starttime", date("Y-m-d H:i:s", $start), 1));
		
			if($end!="" && $end !="0")
				$end=date("Y-m-d H:i:s", $end);
			else
				$end="";
			$this->assign("endtime", Form::date("endtime", $end, 1));
		
		}

		function add() {
			$play=D("play")->where(array("aid"=>$_GET["aid"]))->find();
			if($play){
				$this->redirect("mod", "id/{$play['id']}");
			}

			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$article=D("article")->field('id,title')->find($_GET["aid"]);
			$this->assign("article", $article);
			$this->showform();
			$this->display();
		}


		function insert(){
			$_POST["starttime"]=strtotime($_POST["starttime"]);
			if($_POST["endtime"]=="") {
				$_POST["endtime"]=0;
			}else{
				$_POST["endtime"]=strtotime($_POST["endtime"]);
			}
			$play=D("play");		
		
			if($play->insert($_POST, 1, 1)){
				$this->redirect("index");	
			}else{
				$this->mess($play->getMsg(), false);
				$this->assign("post", $_POST);
				$this->assign("article", array("id"=>$_POST["aid"], "title"=>$_POST["title"]));
				$this->showform($_POST["starttime"], $_POST["endtime"]);
				$this->display("add");
			}
		}
		
		function mod(){
			$play=D("play");
			if(isset($_GET["stats"]))
				$this->mess($_GET["stats"], false);
			else
				$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$data=$play->find($_GET["id"]);
			$image=D("image")->field("name")->find($data["picid"]);
			$data["picname"]=$image["name"];
			$this->showform($data["starttime"], $data["endtime"]);
			$this->assign("post", $data);
			$this->assign("article", array("id"=>$data["aid"], "title"=>$data["title"]));
			$this->display();
		}

		function update(){
			$play=D("play");
			$_POST["starttime"]=strtotime($_POST["starttime"]);
			$_POST["endtime"]=strtotime($_POST["endtime"]);
		
			if($play->update($_POST, 1, 1)){
				$this->redirect("index");		
			}else{
				$mess=$play->getMsg();
				if($mess=="")
					$mess="没有数据被修改！";
				$this->mess($mess, false);
				$this->redirect("mod", "stats/{$mess}/id/{$_POST["id"]}");
			}
		
		}

		function order(){
			$play=D("play");

			for($i=0; $i < count($_POST["ids"]); $i++){
				$play->update(array("id"=>$_POST["ids"][$i],"ord"=>$_POST["ord"][$i]));	
			}

			$this->redirect("index");
		}


		function del(){
			$play=D("play");
		
			if($play->delete($_GET["id"])) {
				$this->redirect("index");
			}else{
				$this->error("幻灯片删除失败！", 3, "index");
			}
				
		}


	}
