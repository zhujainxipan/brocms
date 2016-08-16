<?php
	class MessageAction extends Common {
		function index(){
			$message=D("message");
			
			$where=array("revicename"=>$_SESSION["username"]);
			$page=new Page($message->where($where)->total(), 10);
			$page->set("head", "条信息");
			$mess=$message->where($where)->limit($page->limit)->order('ptime desc')->r_select(array("user", 'username', 'id', 'uid'));

		
			$this->assign("message", $mess);
			$this->assign("fpage", $page->fpage(0,2,3,4,5,6));
			$this->display();
		}

		function write(){

			if($_SESSION["sendmessage"]!="1") {
				$this->error("你没有写站内信的权限！", 3, 'index');
			}
		       
			if(isset($_POST["sub"])) {
				if(D("user")->where(array("username"=>$_POST["revicename"]))->find()){
					$_POST["ptime"]=time();
					$_POST["uid"]=$_SESSION["id"];
					$_POST["stutas"]=1;
				
					if(D("message")->insert()){
						$this->assign("mess", "发送成功");
					}
				}else{
					$this->assign("mess", "收件人不存在");
				}
			}

			if(!empty($_GET["id"])){
				$message=D("message")->find($_GET["id"]);
				$this->assign("message", $message);
				$this->assign("user", D("user")->field("id,username")->find($message["uid"]));
			}
		
			$this->display();
		}

		function view(){
			$message=D("message");
			$mess=$message->find($_GET["id"]);
			$message->update(array("id"=>$_GET["id"], "stutas"=>'0'));

			$user=D("user")->field('id, username,sex,upic')->find($mess["uid"]);
			
			$this->assign("message", $mess);
			$this->assign("user", $user);

			$this->display();
		}

		function del() {
		

			$id=!empty($_POST["id"]) ? $_POST["id"] : $_GET["id"]; 
			
			if(D("message")->delete(array("id"=>$id, "revicename"=>$_SESSION["username"]))) {
				$this->redirect("index", "message/index");
			}
		}
	}
