<?php
	class Search {
		function index(){
			//获取并分配菜单项
			
				
			//将网站名称分配到模板中，在标题栏中显示
			$this->assign("appname", APP_NAME);
			$this->assign("keywords", KEYWORD);
			$this->assign("description", DESCRIPTION);
			//获取并分配菜单项 
			$column=D("column");
			$article=D("article");
			$time=strtotime(date("Y-m-d"));
			
			$this->assign("menu", $column->field('id,title')->where(array("pid"=>0,"display"=>1))->order("ord asc")->select());
			//获取并分配推荐文章
			$this->assign("recommends", $article->field('id,title')->where(array("recommend"=>1, "audit"=>1))->order("id desc")->limit(10)->select());
			//获取并分配最新更新文章
			$this->assign("news", $article->field('id,title')->where(array("audit"=>1))->order("posttime desc")->limit(10)->select());
			//获取并分配热门文章
			$this->assign("hots", $article->field('id,title,views')->where(array("posttime >"=>($time-60*60*24*30), "audit"=>1))->order("views desc")->limit(10)->select());

			$sers=!empty($_POST["search"]) ? $_POST : $_GET;

			

			$where=array($sers["serType"]=>"%{$sers["search"]}%", "audit"=>"1");
			
			$args="serType/{$sers["serType"]}/search/{$sers["search"]}";
			$total=$article->where($where)->total();
			$page=new Page($total, ARTICLE_PAGE_SIZE, $args);
			$this->assign("searchs", $article->field('id,title,summary,posttime,uid,views')->where($where)->limit($page->limit)->r_select(array("user", "username as author", 'id', 'uid')));

			$this->assign("fpage", $page->fpage());
			$this->assign("total", $total);
			$this->assign("search", $sers["search"]);
			$this->assign("serType", $sers["serType"]);
			$this->display();
		}
	}
