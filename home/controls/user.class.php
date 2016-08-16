<?php
	class User {
		function index(){
			debug(0);
		
			if(empty($_GET['uid']) || !D("user")->find($_GET['uid']))
				$this->error('不是合法的用户');
			$this->display();
		}
		function top(){
			debug(0);
			$this->display();
		}


		function menu(){
			debug(0);
			$user= D("user");
			$dynamic=D("dynamic");

		
			//设置访客数量
			if($_GET["uid"]!=$_SESSION['id'])
				$user->where($_GET['uid'])->update('views=views+1');	

			$cuser=$user->field("id, username,sex,info,upic,views")->find($_GET["uid"]);
			$this->assign("user",$cuser);

			$where1=array("otype"=>5, "cid"=>$_GET["uid"]); //粉丝
			$where2=array("otype"=>5, "uid"=>$_GET["uid"]);  //关注

			$this->assign('followednum', $dynamic->total($where1));
			
			$this->assign("followeds", $dynamic->field('uid,ptime')->order('ptime desc')->limit(10)->where($where1)->r_select(array('user', 'id,username,upic,sex', 'id', 'uid')));
		
			$this->assign('followingnum',$dynamic->total($where2));
			$this->assign("followings",$dynamic->field('cid,ptime')->order('ptime desc')->limit(10)->where($where2)->r_select(array('user', 'id,username,upic,sex', 'id', 'cid')));
		
			
			//已关注
			if($dynamic->where(array('uid'=>$_SESSION['id'], 'cid'=>$_GET['uid']))->find()){
				$this->assign("ygz", true);
			}else{
				$this->assign('ygz', false);
			}


			//文章论数
			$this->assign("articlenum", $dynamic->where(array('otype'=>1, 'uid'=>$_GET['uid']))->total());

			//发评论数
			$this->assign("commentnum", $dynamic->where(array('otype'=>2, 'uid'=>$_GET['uid']))->total());

			//收藏数
			$this->assign("collectionnum", $dynamic->where(array('otype'=>3, 'uid'=>$_GET['uid']))->total());

			//推荐数
			$this->assign("recommendnum", $dynamic->where(array('otype'=>4, 'uid'=>$_GET['uid']))->total());

			$this->display();
		}


		function set(){
			$user=D("user");
			
			if(isset($_POST["sub"])){
				$_POST["id"]=$_SESSION["id"];
				if($user->update())
					$this->assign("flush", true);	
			
			}
		
			$this->assign("user", $user->field("id, username, email,info")->find($_SESSION['id']));
			$this->display();
		}
		function pset(){
			
			if(isset($_POST["sub"])){
			
				if($_POST["userpwd"]!=$_POST["repwd"]){
					$this->assign("confirm", "confirm");
				}else{
					$user=D("user");
					$row=$user->where(array("id"=>$_SESSION["id"], "userpwd"=>md5($_POST["cuserpwd"])))->find();
					if($row){
						$_POST["userpwd"]=md5($_POST["userpwd"]);
						$_POST["id"]=$_SESSION["id"];
						if($user->update()){
							$this->assign("confirm", "yes");
						}else{
							$this->assign("confirm", "no");
						
						}
					}else{
						$this->assign("confirm", "error");
					}
				}
				
				
			}
			
			$this->display();
		}
		function tset(){
			$user=D("user");
			if(isset($_POST["sub"])){
			
				$up=new FileUpload();
				$path=PROJECT_PATH.'public/uploads/user/';
				$up->set("path", $path)
			  	 ->set('maxsize', '500000')
  			  	 ->set('thumb', array('width'=>100, "height"=>100));
				if($up->upload('upic')){
					$imgname=$up->getFileName();
					$_POST["upic"]=$imgname;
					$_POST["id"]=$_SESSION["id"];
					if($user->update()){
						$this->assign("flush", true);
						if(file_exists($path.$_POST["srcimg"]))
							unlink($path.$_POST["srcimg"]);	
					}
				}else{
					$this->assign("error", $up->getErrorMsg());
				}
			}
			
			$this->assign("user", $user->field("upic,sex")->find($_SESSION["id"]));
			$this->display();
		}

		//设置关注
		function follow(){
			debug(0);
					
			$dynamic=array("uid"=>$_SESSION['id'], 'otype'=>'5', 'ptime'=>time(), 'cid'=>$_POST['uid'], 'title'=>$_POST['username']);
			if(D("dynamic")->insert($dynamic)){
				echo 'ok';
			}		
		}

		//取消关注
		function delfollow(){
			debug(0);
	
			if(D("dynamic")->delete(array('uid'=>$_SESSION['id'], 'otype'=>5, 'cid'=>$_POST['uid']))){
				echo 'ok';
			}		
		}

		function allfollowed() {
			$dynamic=D("dynamic");
			
			$where=array("otype"=>5, "cid"=>$_GET["uid"]); //粉丝

			$page=new Page($dynamic->total($where), 24, "uid/{$_GET["uid"]}/otype/5");
			$page->set("head", "个粉丝");
			$follows=$dynamic->field('uid,ptime')->order('ptime desc')->limit($page->limit)->where($where)->r_select(array('user', 'id,username,sex,upic', 'id', 'uid'));
			$allfollow=array();
			foreach($follows as $follow) {
				$follow['ednum']=$dynamic->total(array("otype"=>5, "cid"=>$follow["uid"]));
				$follow['ingnum']=$dynamic->total(array("otype"=>5, "uid"=>$follow["uid"]));
				$allfollow[]=$follow;
			}
			$this->assign('tit', '粉&nbsp;&nbsp;丝');
			$this->assign('follows', $allfollow);
			$this->assign("fpage", $page->fpage(0,4,5,6));

			$this->display('follow');
		}

		function allfollowing() {

			$dynamic=D("dynamic");
			
			$where=array("otype"=>5, "uid"=>$_GET["uid"]);  //关注
			$page=new Page($dynamic->total($where), 14, "uid/{$_GET["uid"]}/otype/5");
			$page->set("head", "个关注");

			$follows=$dynamic->field('cid,ptime')->order('ptime desc')->limit($page->limit)->where($where)->r_select(array('user', 'id,username,upic,sex', 'id', 'cid'));
			$allfollow=array();
			foreach($follows as $follow) {
				$follow['ednum']=$dynamic->total(array("otype"=>5, "cid"=>$follow["cid"]));
				$follow['ingnum']=$dynamic->total(array("otype"=>5, "uid"=>$follow["cid"]));
				$allfollow[]=$follow;
			}
			$this->assign('tit', '关&nbsp;&nbsp;注');
			$this->assign('follows', $allfollow);
			$this->assign("fpage", $page->fpage(0,4,5,6));
			$this->display('follow');
		
		}
	}
