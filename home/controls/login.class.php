<?php
	class Login {
		function index(){
			$this->caching=0;     //设置缓存关闭
			$stats=false;
			$errormess="登录失败：<br>";
			if(!preg_match('/^\S+$/i', $_POST["username"])){
				$errormess.="用户名不能为空!<br>";
				$stats=true;	
			}
			if(!preg_match('/^\S+$/i', $_POST["username"])){
				$errormess.="用户密码不能为空!<br>";
				$stats=true;	
			}
		
			if($stats){
				$this->error($errormess, 3);
			}

			$user=D("user")->field('id,gid,username,disable')
				       ->where(array("username"=>$_POST["username"],"userpwd"=>md5($_POST["userpwd"]), "disable"=>0))
					->find();
			if($user){
				$group=D("group")->field('groupname,useradmin,webadmin,articleadmin,sendarticle,sendcomment,sendmessage')->where(array("id"=>$user["gid"]))->find();
				$guser=array_merge($user, $group);
				$_SESSION=$guser;
				$_SESSION["login"]=1;
				$this->success("你好 {$_POST["username"]}, 登录成功！");
			}else{
				$this->error("用户登录失败,请重新登录！", 3);
			}
		}

		function logout(){
			$this->caching=0;     //设置缓存关闭
			$username=$_SESSION["username"];
			D("user", "admin")->logout();
			$this->success("再见 $username , 退出成功!", 1, "index/index");
		}

		function register(){
			$this->caching=0;     //设置缓存关闭
			$this->display();	
		}

		function insert(){
			$this->caching=0;     //设置缓存关闭
			$user=D("user","admin");
			$_POST["regtime"]=time();
			$_POST["userpwd"]=md5($_POST["userpwd"]);
			$_POST["repwd"]=md5($_POST["repwd"]);
			$_POST["gid"]=2;
			$lastid=$user->insert($_POST, 1, 1);
			if($lastid){
				$user=$user->field('id,gid,username,disable')->find($lastid);
				$group=D("group")->field('groupname,useradmin,webadmin,articleadmin,sendarticle,sendcomment,sendmessage')->where(array("id"=>$user["gid"]))->find();
				$guser=array_merge($user, $group);
				$_SESSION=$guser;
				$_SESSION["login"]=1;
				$this->success("注册成功,直接登录！",1,'index/index');
			}else{
				$this->error($user->getMsg(), 3, 'register');
			}
		}

		function unique(){
			$this->caching=0;     //设置缓存关闭
			debug(0);
			if(D("user")->total(array("username"=>$_GET["username"])) > 0){
				echo "false";
			}else{
				echo "true";
			}
		}

		function code(){
			$this->caching=0;     //设置缓存关闭
			echo new Vcode();
		}

		function vcode(){
			$this->caching=0;     //设置缓存关闭
			debug(0);
			if(strtoupper($_GET["code"])==$_SESSION["code"]){
				echo "true";
			}else{
				echo "false";
			}
		}
	}
