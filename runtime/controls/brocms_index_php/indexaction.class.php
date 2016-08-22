<?php
	class IndexAction extends Common {
		function index(){
			if(!$this->isCached()) {
				//将网站名称分配到模板中，在标题栏中显示
				$this->assign("appname", APP_NAME);
				$this->assign("keywords", KEYWORD);
				$this->assign("description", DESCRIPTION);
				//获取并分配菜单项 
				$column=D("column");
				$article=D("article");
				$time=strtotime(date("Y-m-d"))+60*60*24;
			
				$this->assign("menu", $column->field('id,title')->where(array("pid"=>0,"display"=>1))->order("ord asc")->select());
				//公告
				$notice=D("notice")->field('id,title,color')->where('display="1" and "'.$time.'" > starttime and ("'.$time.'" < endtime or endtime="0")')->order("ord asc")->select();
				$this->assign("ncount", count($notice));
				$this->assign("notice", $notice);
				//幻灯播放的数据分配
				$play=D("play")->where('display="1" and "'.$time.'" > starttime and ("'.$time.'" < endtime or endtime="0")')->order("ord asc")->limit(6)->r_select(array("image", 'name as picname', 'id', 'picid'));
			
				$this->assign("play",$play);	 
				//获取并分配推荐文章
				$this->assign("recommends", $article->field('id,title,recommend')->where(array("recommend >"=>0, "audit"=>1))->order("recommend desc")->limit(10)->select());
				//获取并分配最新更新文章
				$this->assign("news", $article->field('id,title')->where(array("audit"=>1))->order("posttime desc")->limit(10)->select());
				//获取并分配热门文章
				$this->assign("hots", $article->field('id,title,views')->where(array("posttime >"=>($time-60*60*24*30), "audit"=>1))->order("views desc")->limit(10)->select());
		
				//获取并分配所有栏目 
				$data=$column->field("id,title,picid")->order("ord asc")->where(array("pid"=>0,"display"=>1))
					->r_select(
						array("image", 'name as imgname', 'id', 'picid'),
						array("column", 'id,title', 'pid', array("subcol", 'ord asc', '4',"display=1")), 
						array("article", 'id,title', 'pid', array('art', 'id desc', 10, "audit=1"))
					);

					
			


				$this->assign("cols", $data);

		
		
				//获取并分配友情链接内容
				$this->assign("links", D("flink")->field('id, webname,url,logo,list')->where(array("audit"=>1))->order("ord asc")->select());
			}
			$this->display();
		}
		
		function notice(){
			if(!$this->isCached(null, $_SERVER["REQUEST_URI"])) {
				$time=strtotime(date("Y-m-d"))+60*60*24;

				$n=D("notice");
	
				$notice=$n->where(array("id"=>$_GET["id"], "display"=>'1'))->find();

				if(!($notice and $notice["starttime"] < $time and ($notice["endtime"] > $time or $notice["endtime"]=='0'))){
					$this->error("访问公告失败", 3, "index/index");
				}
				$notice["content"]=str_replace(array("&quot;", "&#039;"),array("\"", "'"), $notice["content"]);

				$this->assign("notice", $notice);

				$this->assign("menu", D("column")->field('id,title')->where(array("pid"=>0,"display"=>1))->order("ord asc")->select());


			
			}
			$this->display(null, $_SERVER["REQUEST_URI"]);
		}	
	}
