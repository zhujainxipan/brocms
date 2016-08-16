<?php
	class ColumnModel extends CatModel {
	
		function parsetree() {	
			$option = $this->field('id,pid,title,concat(path,"-",id) as abspath,ord,display')->order("abspath,id asc")->select();
			$html='';
			$i=0;
			foreach($option as $value) {
				$class=($i++%2==0)?'light-row':'dark-row';  //隔行换样式
				$html .= '<li class='.$class.'>';
				if($value["pid"]=="0"){
					$input ='<input type="text" style="width:20px;height:20px;" name="ord[]" value="'.$value["ord"].'">';
					$input.='<input type="hidden" name="id[]" value="'.$value["id"].'">';
				}else{
					$input='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
				}
				$title = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|',count(explode('-',$value['abspath']))-2).$input. '|--<a href="'.B_APP.'/article/index/pid/'.$value["id"].'">'.$value['title'].'</a>';
				$html .= '<span class="col_width2">'.$title.'</span>';
			
				$html .= '【<a href="'.B_URL.'/mod/id/'.$value["id"].'">修改</a>】';
				$html .= '【<a href="'.B_URL.'/del/id/'.$value["id"].'" onclick=\'return confirm("确定要删除'.$value['title'].'及子分类吗？")\'>删除</a>】';
				if($value['display']=="1"){
					$html .= '【<span style="cursor:pointer;"  onclick="dis(this, '.$value['id'].')">正常</span>】';
				}else{
					$html .= '【<span   style="cursor:pointer;background:#ccc;" onclick="dis(this, '.$value['id'].')">隐藏</span>】';
				}
				
				$html .= '</li>';
			}
			return $html; 
		}
		function corder($post){
			$affected_rows=0;
			for($i=0; $i<count($post["id"]); $i++){
				$data["id"]=$post["id"][$i];
				$data["ord"]=$post["ord"][$i];
				$affected_rows+=$this->update($data, 1, 0);
			}

			if($affected_rows > 0) {
				$this->setMsg("类别顺序修改成功.");
				return true;
			}else{
				$this->setMsg("没有需要修改的类别顺序.");
				return false;
			}
		}
	}
