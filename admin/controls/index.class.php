<?php
	class Index {
		function index(){
			debug(0);  //临时关闭调试模式
			$this->display();
		}
		function top(){
			debug(0);  //临时关闭调试模式
			$this->display();
		}
		function menu(){
			debug(0);  //临时关闭调试模式
			$this->display();
		}
		function main(){
			$this->mess("请操作左侧菜单，对本网站的内容进行管理. ");
			$this->display();
		}
		function bottom(){
			debug(0);  //临时关闭调试模式
			//对文章管理权限才输出
			if($_SESSION["articleadmin"]) {
				$this->assign("plays", D("play")->total());
				$this->assign("articles", D("article")->total());
			}

			//对网站编辑的权限才输出
			if($_SESSION["webadmin"]) {
				$this->assign("images", D("image")->total());
				$this->assign("columns",D("column")->total());
				$this->assign("flinks", D("flink")->total());
				$this->assign("notices", D("notice")->total());
			}

			//有对用户管理的权限才输出
			if($_SESSION["useradmin"]) {
				$this->assign("users", D("user")->total());
			}
			$this->display();
		}
	}
