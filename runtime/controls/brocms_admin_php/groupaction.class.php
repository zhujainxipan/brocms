<?php
	class GroupAction extends Common {
		function index(){
			$this->mess('管理员用户组不能删除，否则将不能登录系统. ');
			$this->assign("groups", D("group")->field('id, groupname,description')->select());
			$this->display();
		}
	
		function  add(){
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$this->display();
		}

		function insert(){
			$group=D("group");

			if($group->insert($_POST, 1, 1)){
				$this->mess("用户组{$_POST["groupname"]}添加成功！. ",true);
				$this->assign("groups", D("group")->field('id, groupname,description')->select());
				$this->display('index');

			}else{
				$this->mess($group->getMsg(),false);
				$this->assign("post", $_POST);
				$this->display('add');
			}
		}



		function del(){
			$group=D("group");
			if(D("user")->total(array('gid'=>$_GET['id'])) > 0){
				$this->mess('请将该用户组中所有成员移动到其他组中再删除!', false);
			}else{
				if($group->delete($_GET['id'])) {
					$this->mess('成功删除用户组！', true);
				}else{
					$this->mess($group->getMsg(), false);
				}
			}
			$this->assign("groups", D("group")->field('id, groupname,description')->select());
			$this->display('index');

		}


		function mod(){
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息. ');
			$this->assign("post", D("group")->find($_GET['id']));
			$this->display();
		}

		function update(){
			$group=D("group");

			$_POST["useradmin"] = !empty($_POST["useradmin"]) ? $_POST["useradmin"] : 0;
			$_POST["webadmin"] = !empty($_POST["webadmin"]) ? $_POST["webadmin"] : 0;
			$_POST["articleadmin"] = !empty($_POST["articleadmin"]) ? $_POST["articleadmin"] : 0;
			$_POST["sendarticle"] = !empty($_POST["sendarticle"]) ? $_POST["sendarticle"] : 0;
			$_POST["sendcomment"] = !empty($_POST["sendcomment"]) ? $_POST["sendcomment"] : 0;
			$_POST["sendmessage"] = !empty($_POST["sendmessage"]) ? $_POST["sendmessage"] : 0;


			$affectedrow=$group->update($_POST, 1, 1);	

			if($affectedrow){
				$this->mess("用户组{$_POST["groupname"]}修改成功！. ",true);
				$this->assign("groups", D("group")->field('id, groupname,description')->select());
				$this->display('index');
			}else{
				if($affectedrow===0)
					$mess="数据没有改变";
				else
					$mess=$group->getMess();

				$this->mess($mess,false);
				$this->assign("post", $_POST);
				$this->display('mod');
			}
		}
	}
