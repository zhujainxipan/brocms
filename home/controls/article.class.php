<?php
	class Article {
		function index(){
			$article=D("article");
			
			//设置访问数量
			$article->where(array("id"=>$_GET["aid"]))->update("views=views+1");
			if(!$this->isCached(null, $_SERVER["REQUEST_URI"])) {
				//获取并分配菜单项
				$column=D("column");
				
				//如果是自己发的文章没有审核只有自己能看
				$data=$article->where(array("id"=>$_GET["aid"], "uid"=>$_SESSION['id']))->find();
				if(!$data) { 
					$find=array("id"=>$_GET["aid"], "audit"=>"1");
					//如果是后台管理员查看则可以是不用审核的
					if($_SESSION["articleadmin"]=="1")
						unset($find['audit']);



					$data=$article->where($find)->find();

				}
			
				if(!$data){
					$this->error("你现在访问的文章不存在或没有审核!", 3, "index/index");
				}
			
			

		
				$this->assign("menu", $column->field('id,title')->where(array("pid"=>0,"display"=>1))->order("ord asc")->select());
		
				$author=D("user")->field('username')->find($data['uid']);
				$data["author"]=$author["username"];
				$data["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $data["content"]);
				//将文章分配到模板中
				$this->assign("article", $data);


				$columns=$column->find($data["pid"]);
				//获取并分配将前位置到模板中
				$locs=$column->field('id,title,description')->where(str_replace('-',',', $columns["path"]).','.$columns["id"])->select();

				$this->assign("locs", $locs);

				//将网站名称分配到模板中，在标题栏中显示
				$this->assign("appname", $data["title"]);
				//将这个文章的摘要分配到模板中，在搜索引擎中标题下显示 
				$this->assign("keywords",$data["keyword"]);
				$this->assign("description", $data["summary"]);


		
				if($columns["audit"]==1){
					$prevwhere=array("audit"=>1, "pid"=>$data["pid"],"id <"=>$_GET["aid"]);
					$nextwhere=array("audit"=>1, "pid"=>$data["pid"],"id >"=>$_GET["aid"]);
					$connwhere=array("audit"=>1, "pid"=>$data["pid"]);
					$recowhere=array("audit"=>1, "pid"=>$data["pid"], "recommend >"=>0);
					$hotswhere=array("audit"=>1, "pid"=>$data["pid"]);
				}else{
					$prevwhere=array("pid"=>$data["pid"],"id <"=>$_GET["aid"]);
					$nextwhere=array("pid"=>$data["pid"],"id >"=>$_GET["aid"]);
					$connwhere=array("pid"=>$data["pid"]);
					$recowhere=array("pid"=>$data["pid"], "recommend >"=>0);
					$hotswhere=array("pid"=>$data["pid"]);
				}



				//获取和当前文章在同一个类别中的上一篇审核过的文章	
				$this->assign("prevArticle",$article->field("id, title")->where($prevwhere)->order("id DESC")->find());
		
				//获取和当前文章在同一个类别中的下一篇审核过的文章
				$this->assign("nextArticle", $article->field("id, title")->where($nextwhere)->order("id ASC")->find());


				//获取同类中的相关文章
				$this->assign("conns", $article->field("id, title,posttime")->where($connwhere)->order("id DESC")->limit(15)->select());

				//获取本类的推荐文章并分配
				$this->assign("recommends", $article->field("id, title,posttime,recommend")->where($recowhere)->order("recommend DESC")->limit(10)->select());
				//获取本类中热门文章并分配
				$this->assign("hots", $article->field("id, title,posttime,views")->where($hotswhere)->order("views DESC")->limit(10)->select());
			

				$this->assign("fbpl", true);
				
		

			}
			//已经收藏
			if(D('dynamic')->where(array('otype'=>'3', 'uid'=>$_SESSION['id'], 'cid'=>$_GET['aid']))->find()){
					$this->assign('collection', true);
			}
			//已经推荐
			if(D('dynamic')->where(array('otype'=>'4', 'uid'=>$_SESSION['id'], 'cid'=>$_GET['aid']))->find()){
					$this->assign('recommend', true);
			}
			$allow=$article->field('allow')->find($_GET['aid']);
			if($allow['allow']==1){
				$this->assign("ck", Form::editor("comment", "basic", 100, 'white',false));
			}
			$this->assign('allow', $allow['allow']);

		
			$this->display(null, $_SERVER["REQUEST_URI"]);
		}


		function comment(){
			$this->caching=0;     //设置缓存关闭
			debug(0);
			$comment=D("comment");
			$where=array("aid"=>$_GET["aid"]);
		
			$page=new AjaxPage($comment->where($where)->total(), COMMENT_PAGE_SIZE, "aid/{$_GET['aid']}", false);
			$page->set("head","条评论");
			$comment=$comment->where($where)->limit($page->limit)->r_select(array("user", 'username,upic,sex', 'id', 'uid'));
			
			$this->assign("comment", $comment);
			$this->assign("fpage", $page->fpage(0,2,3,4,5,6));
			$this->assign('page', $page->page);
			$this->display();
		}


	}
