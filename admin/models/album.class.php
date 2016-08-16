<?php
	class Album extends Cat {

		function parsetree() {	
			$option = $this->field('id,pid,title,concat(path,"-",id) as abspath')->order("abspath,id asc")->select();;
			$list='';
			$i=0;
			if(empty($option)){
				$list .= '<li class='.$class.'>请添加相册</li>';
			}
			foreach($option as $value) {
				$class=($i++%2==0)?'light-row':'dark-row';  //隔行换样式
				$list .= '<li class='.$class.'>';
				$title = str_repeat('|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',count(explode('-',$value['abspath']))-2). '|--<a href="'.B_APP.'/image/index/pid/'.$value["id"].'">'.$value['title'].'</a>';
				$list .= '<span class="col_width2">'.$title.'</span>';
			
				$list .= '【<a href="'.B_URL.'/mod/id/'.$value["id"].'">修改</a>】';
				$list .= '【<a href="'.B_URL.'/del/id/'.$value["id"].'" onclick=\'return confirm("确定要删除'.$value['title'].'及子分类吗？")\'>删除</a>】';
				
				$list .= '</li>';
			}
			return $list;
		}


	}
