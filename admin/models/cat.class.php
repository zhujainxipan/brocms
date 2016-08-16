<?php
	class  Cat {
		function formselect($name="pid", $value="0", $root="根分类", $change=""){
			$data=$this->field('id,pid,title,concat(path,"-",id) as abspath')->order("abspath,id asc")->select();

			$html='<select '.$change.' id="sel" name="'.$name.'">';
			$html.='<option value="0">'.$root.'</option>';
			foreach($data as $val){
				if($value==$val["id"])
					$html.='<option selected value="'.$val['id'].'">';
				else
					$html.='<option value="'.$val['id'].'">';

				$num=count(explode("-", $val["abspath"]))-2;
				$space=str_repeat("|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$num);	
				$name=$val["title"];
				$html.=$space."|-".$name;
				$html.='</option>';	
			}
			$html.='</select>';

			return $html;
		}



		function getPathById($id){
			if($id==0) {
				return "0";
			} else {
		
				$row=$this->field("path")->find($id);

				return $row["path"];
			}
		}	

		//==========================================
		// 函数: catMod()
		// 功能: 修改单个分类信息
		// 参数: post是表单提交的数组信息，catId是需要修改分类的ID
		// 返回: true或false
		//==========================================
		function catMod($post) {

			$ppath=$this->getPathById($post["pid"]);  //新选择的父节点的path
			$xpath=$this->getPathById($post["id"]);     //当前操作节点的path
		
			if($post["pid"]=="0")
				$post["path"]=0;
			else
				$post["path"]=$ppath.'-'.$post['pid'];	
			


			if(in_array($post["id"], explode("-", $post["path"]))) {
				$this->setMsg("不能将{$post['title']}移动到自己或自己的子类别中.");
				return false; 
			}
	
		

			$srcpath=$xpath.'-'.$post["id"];
			$cpath=$post["path"].'-'.$post['id'];	          //和现有的操作的分类Id相连
		
			
			$this->where("path like '{$srcpath}%'")->update("path=REPLACE(path, '{$srcpath}','{$cpath}')");
		
		
			if($this->update($post,1, 1) ){
				return true;
			}else{
				$this->setMsg("修改<b> ".$post["title"]."</b> 失败.");
				return false;
			} 
		}
	}

