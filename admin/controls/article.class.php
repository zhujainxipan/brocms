<?php
	class Article {
		function index() {
		
			$article=D("article");

			if($_GET["audit"]=="on"){
				$where["audit"]=1;
				$pget="/audit/on";
			}

			if($_GET["audit"]=="off"){
				$where["audit"]=0;
				$pget="/audit/off";
			}

			if(!empty($_GET["pid"])){
				$where["pid"]=$_GET["pid"];
				$pget.="/pid/{$_GET["pid"]}";
				$pid=$_GET['pid'];
			}else{
				$pid=0;
			}

			if(!empty($_GET["search"])){
				$where["title"]="%{$_GET["search"]}%";
				$pget.="/search/".$_GET["search"];
				$this->assign("search", $_GET["search"]);
			}

	
			
			$this->assign("select", D("column")->formselect("pid", $pid));
			$page=new Page($article->total($where), ARTICLE_PAGE_SIZE,$pget);

			if(isset($_GET["mess"])) {
				if($_GET["stats"]=="1")
					$this->mess("{$_GET["mess"]}成功！", true);
				else 
					$this->mess("{$_GET["mess"]}失败！", false);
			} else {
				$this->mess("部分类别中的文章在添加后都处于锁定状态,只有审核后的文章才能发布.<br>审核后的文章也可以锁定,锁定的文章不被发布. ");
			}
			
			$arts=$article->field('id,title,posttime,uid,pid,audit,allow')
				->where($where)
				->order('id desc')
				->limit($page->limit)
				->r_select(array('user', 'username as author', 'id', 'uid'));

			$this->assign("arts", $arts);
			$this->assign("fpage", $page->fpage());
			$this->assign("page", $page->page);
			$this->display();
		}

		function add() {
			$column=D("column");
			$this->assign("select", $column->formselect());
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息.');
			$this->assign("ck", Form::editor("content", "full",300, "#FAFAFA"));
			$this->assign("post", array("recommend"=>0, "allow"=>1));
			$this->display();
		}
		



		function insert(){
			$article=D("article");
			if($_POST["pid"]=="0")
				$_POST["pid"]="";
			$jz=false;
			$_POST["posttime"]=time();
			$_POST["uid"]=$_SESSION["id"];
			$content=$_POST["content"];
			unset($_POST["content"]);
			
			//如果不需要审核的栏目中，直接audit为1
			$column=D("column")->field("audit")->find($_POST["pid"]);
			
			if($column["audit"]==0 || $_SESSION["articleadmin"]=="1"){
				$_POST["audit"]=1;
			}

			$lastid=$article->insert($_POST, 1, 1);
			if($lastid && $article->aimage($content, $lastid)){
				//添加到动态
				$dynamic=array("uid"=>$_SESSION['id'], 'otype'=>'1', 'ptime'=>$_POST['posttime'], 'cid'=>$lastid, 'title'=>$_POST['title']);
				D("dynamic")->insert($dynamic);
				$this->mess("文章 <b>{$_POST["title"]}</b> 添加成功，可以继续添加！",true);	
				$this->assign("post", array("recommend"=>0, "allow"=>1));
			}else{
				$_POST["content"]=stripslashes($content);
				$this->assign("post", $_POST);
				$this->mess($article->getMsg(), false);
				$jz=true;
			}

			if(isset($_POST["jz"])){
			
				$this->assign("select", D("column")->formselect("pid", $_POST["pid"]));
				$this->assign("jz", "checked");
			}else{
				if($jz)
					$this->assign("select", D("column")->formselect("pid", $_POST["pid"]));
				else
					$this->assign("select", D("column")->formselect());
			}
			$this->assign("ck", Form::editor("content", "full",300, "#FAFAFA"));	
			
			$this->display("add");			
		}

		function mod() {
			$article=D("article");
			$post=$article->find($_GET["id"]);
			$column=D("column");
			$this->assign("select", $column->formselect("pid", $post["pid"]));
			$this->mess('提示: 带<span class="red_font">*</span>的项目为必填信息.');
			$this->assign("ck", Form::editor("content", "full",300, "#FAFAFA"));
			$this->assign("post",$post);
			$this->display();
		}
		function update(){
			$article=D("article");
			if($_POST["pid"]=="0")
				$_POST["pid"]="";
			$content=$_POST["content"];
			unset($_POST["content"]);
			$affected=$article->update($_POST, 1, 1);
			$affected1=$article->aimage($content, $_POST["id"]);
			$affected_rows=$affected+$affected1;
			if($affected_rows){
				$mess="文章 {$_POST["title"]} 修改";	
				$this->redirect("index", "pid/{$_POST["pid"]}/mess/{$mess}/stats/1");
				
			}else{
				$_POST["content"]=stripslashes($content);
				$this->assign("post", $_POST);
				$mess=$article->getMsg();

				if($mess=="")
					$mess="没有数据被改变！";
				$this->mess($mess, false);
				$this->assign("select", D("column")->formselect("pid", $_POST["pid"]));
				$this->assign("ck", Form::editor("content", "full",300, "#FAFAFA"));
				$this->display("mod");		
			}	
		}


		function status(){
			debug();
			$article=D("article");
			$update=array("id"=>$_GET["id"], $_GET["s"]=>$_GET["val"]);

			if($article->update($update)){
				echo "1";
			}else{
				echo "no";
			}
		}

		function fpro(){
			
			$article=D("article");
			if(isset($_POST["allows_x"]) && isset($_POST["allows_y"])){
				$result=$article->where($_POST["id"])->update("allow='1'");
				$mess="批量设置充许评论";
			}else if(isset($_POST["nallows_x"]) && isset($_POST["nallows_y"])){
				$result=$article->where($_POST["id"])->update("allow='0'");
				$mess="批量设置不充许评论";
			}else if(isset($_POST["audits_x"]) && isset($_POST["audits_y"])){
				$result=$article->where($_POST["id"])->update("audit='1'");
				$mess="批量审核";
			}else if(isset($_POST["locks_x"]) && isset($_POST["locks_y"])) {
				$result=$article->where($_POST["id"])->update("audit='0'");
				$mess="批量锁定";
			}else if(isset($_POST["dels_x"]) && isset($_POST["dels_y"])) {
				$result=$article->delete($_POST["id"]);
				foreach($_POST["id"] as $id){
					$article->delres($id);
				}
				$mess="批量删除";
			}

				
			$pget="/page/{$_GET["page"]}";

			if(!empty($_GET["search"]))
				$pget.="/search/{$_GET["search"]}";
				
			if(!empty($_GET["pid"]))
				$pget.="/pid/{$_GET["pid"]}";

			if(!empty($_GET["audit"]))
				$pget.='/audit/'.$_GET["audit"];

			if($result) {
				$this->redirect("index", "mess/{$mess}/stats/1".$pget);
			}else{
				$this->redirect("index", "mess/{$mess}/stats/0".$pget);
			}
		}

		function del(){
			$article=D("article");
			$result=$article->delete($_GET["id"]);
				
			$pget="/page/{$_GET["page"]}";

			if(!empty($_GET["search"]))
				$pget.="/search/{$_GET["search"]}";
				
			if(!empty($_GET["pid"]))
				$pget.="/pid/{$_GET["pid"]}";

			if(!empty($_GET["audit"]))
				$pget.='/audit/'.$_GET["audit"];
				
			if($result) {
				$article->delres($_GET["id"]);
				$this->redirect("index", "mess/删除一篇文章/stats/1".$pget);
			}else{
				$this->redirect("index", "mess/删除一篇文章/stats/0".$pget);
			} 
		}
	}
