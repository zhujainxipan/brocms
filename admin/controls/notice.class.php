<?php
	class Notice {
		function index(){
			$notice=D("notice");
			$this->mess('共有公告 <b class="red_font">'.$notice->total().'</b> 条，可以通过输入整数改变公告显示顺序,从小到大的排列顺序.<br><span style="background:#FAECBA"><a href="'.B_URL.'/index/action/2">深色</a></span>的记录被设置为不显示,如果结束时间为<a href="'.B_URL.'/index/action/4" style="color:red">红色</a>表示已经过期,如果开始时间为<a href="'.B_URL.'/index/action/5" style="color:blue">蓝色</a>表示还没有到期.');

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

			
			$this->assign("notices", $notice->field("id,title,color,starttime,endtime,ord,display")->order("ord asc")->select($where));		
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
			$this->assign("ck", Form::editor("content", "desc", "150", "#FAFAFA"));
		}

		function add() {
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$this->showform();
			$this->assign("color", Form::color("color", "000000"));
			$this->display();
		}


		function insert(){
			$_POST["starttime"]=strtotime($_POST["starttime"]);
			$_POST["endtime"]=strtotime($_POST["endtime"]);
			$notice=D("notice");		
			$content=$_POST["content"];
			unset($_POST["content"]);
			$lastid=$notice->insert($_POST, 1, 1);
			if($lastid && $notice->aimage($content, $lastid, "notice_")){
				$this->redirect("index");	
			}else{
				$this->mess($notice->getMsg(), false);
				$this->assign("post", $_POST);
				$this->showform($_POST["starttime"], $_POST["endtime"]);
				$this->assign("color", Form::color("color", $_POST["color"]));
				$this->display("add");
			}
		}
		
		function mod(){
			$notice=D("notice");
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$data=$notice->find($_GET["id"]);
			$this->showform($data["starttime"], $data["endtime"]);
			$this->assign("color", Form::color("color", $data["color"]));
			$this->assign("post", $data);
			$this->display();
		}

		function update(){
			$notice=D("notice");
			$_POST["starttime"]=strtotime($_POST["starttime"]);
			$_POST["endtime"]=strtotime($_POST["endtime"]);
			$content=$_POST["content"];
			unset($_POST["content"]);
			$affected=$notice->update($_POST, 1, 1);
			$affected1=$notice->aimage($content, $_POST["id"], "notice_");
			$affected_rows=$affected+$affected1;
			if($affected_rows){
				$this->redirect("index");		
			}else{
				$mess=$notice->getMsg();
				if($mess=="")
					$mess="没有数据被修改！";
				$this->mess($mess, false);
				$this->showform($_POST["starttime"], $_POST["endtime"]);
				$this->assign("color", Form::color("color", $_POST["color"]));
				$this->assign("post", $_POST);
			}
			$this->display("mod");
		}

		function order(){
			$notice=D("notice");

			for($i=0; $i < count($_POST["ids"]); $i++){
				$notice->update(array("id"=>$_POST["ids"][$i],"ord"=>$_POST["ord"][$i]));	
			}

			$this->redirect("index");
		}


		function del(){
			$notice=D("notice");
		
			$result=$notice->delete($_GET["id"]);
			if($result) {
				$notice->delres($_GET["id"], "notice_");
				$this->redirect("index");
			}else{
				$this->error("公告删除失败！", 3, "index");
			}
				
		}


	}
