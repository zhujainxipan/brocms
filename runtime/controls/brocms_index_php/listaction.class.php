<?php
	class ListAction extends Common {
		function index(){
			if(!$this->isCached(null, $_SERVER["REQUEST_URI"])) {
				//获取并分配菜单项
				$column=D("column");
				$article=D("article");
				$current=$column->where(array("id"=>$_GET["pid"], "display"=>1))->find();
		
				if(!$current){
					$this->error("该栏目不存在或已经被关闭!", 3, "index/index");
				}

				if($current)
					$image=D("image")->field('name')->find($current["picid"]);
				else
					$image["name"]="no_image.gif";
		
				$current['picname']=$image['name'];
				$this->assign("appname", "栏目：".$current["title"]);
				$this->assign("keywords",$current["title"]);
				$this->assign("description", $current["description"]);

				$this->assign("column", $current); 

				$this->assign("menu", $column->field('id,title')->where(array("pid"=>0,"display"=>1))->order("ord asc")->select());
				//左边导航
				$this->assign("columnmenu", $column->field('id,title,description')->where(array("pid"=>$_GET["pid"],"display"=>1))->select());

				//上面导航
				$locs=$column->field('id,title,description')->where(str_replace('-',',', $current["path"]).','.$_GET["pid"])->select();
				$this->assign("locs",$locs);
				$time=strtotime(date("Y-m-d"));
				if($current["audit"]==1){
					$wherelist=array("pid"=>$_GET["pid"], "audit"=>1);
					$rwhere=array("recommend >"=>0, "audit"=>1, "pid"=>$_GET["pid"]);	
					$hwhere=array("audit"=>1, "pid"=>$_GET["pid"]);
				}else{
					$wherelist=array("pid"=>$_GET["pid"]);
					$rwhere=array("recommend >"=>0, "pid"=>$_GET["pid"]);	
					$hwhere=array("pid"=>$_GET["pid"]);
				}

				$page=new Page($article->where($wherelist)->total(), ARTICLE_PAGE_SIZE, "pid/{$_GET["pid"]}");
				$this->assign("articles", $article->field('id,title,uid,posttime')->where($wherelist)->order("id desc")->limit($page->limit)->r_select(array("user", 'username as author', 'id', 'uid')));

				$this->assign("fpage", $page->fpage(0,3,4,5,6));
				//获取本类的推荐文章并分配
				$this->assign("recommends", $article->field("id, title,posttime,recommend")->where($rwhere)->order('recommend desc')->limit(13)->select());

				//获取本类中热门文章并分配
				$this->assign("hots",$article->field("id, title,posttime,views")->where($hwhere)->order('views desc')->limit(13)->select());
			}
			$this->display(null, $_SERVER["REQUEST_URI"]);
		}
	}
