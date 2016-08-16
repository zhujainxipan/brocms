<?php
	class  Group {
		function formselect($name="gid", $value="0",$change=""){
			$data=$this->field('id,groupname')->select();

			$html='<select '.$change.' id="sel" name="'.$name.'">';
			$html.='<option value="0">--用户组--</option>';
			foreach($data as $val){
				if($value==$val["id"])
					$html.='<option selected value="'.$val['id'].'">';
				else
					$html.='<option value="'.$val['id'].'">';

				$html.=$val['groupname'];
				$html.='</option>';	
			}
			$html.='</select>';

			return $html;
		}
	}

