<?php
class Form {
	/**
	 * 编辑器
	 * @param int $textareaid
	 * @param int $toolbar    有basic full 和desc三种
	 * @param int $color 编辑器颜色
	 * @param string $alowuploadexts 允许上传类型
	 * @param string $height 编辑器高度
	 * @param string $disabled_page 是否禁用分页和子标题
	 */
	public static function editor($textareaid = 'content', $toolbar = 'basic', $height = 200, $color = '', $up=true) {
		$str ='';
		if(!defined('EDITOR_INIT')) {
			$str = '<script type="text/javascript" src="'.B_PUBLIC.'/ckeditor/ckeditor.js"></script>';
			define('EDITOR_INIT', 1);
		}
	
		if($toolbar == 'basic') {
			$toolbar = "['Bold', 'Italic','Underline','Strike','NumberedList', 'BulletedList', 'TextColor','BGColor', 'Link', 'Unlink', '-', 'Image','Flash','Table','Smiley','SpecialChar'],['RemoveFormat'],
		   \r\n";
		} elseif($toolbar == 'full') {
		   $toolbar = "['Source','-','Templates'],
		    ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
		    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],['ShowBlocks'],['Image','Capture','Flash'],['Maximize'],
		    '/',
		    ['Bold','Italic','Underline','Strike','-'],
		    ['Subscript','Superscript','-'],
		    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
		    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
		    ['Link','Unlink','Anchor'],
		    ['Table','HorizontalRule','Smiley','SpecialChar'],
		    '/',
		    ['Styles','Format','Font','FontSize'],
		    ['TextColor','BGColor'],
		    ['attachment'],\r\n";
		  
		} elseif($toolbar == 'desc') {
			$toolbar = "['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', '-', 'Image', '-','Source'],\r\n";
		
		} else {
			$toolbar = '';
		}
		$str .= "<script type=\"text/javascript\">\r\n";
		$str .= "CKEDITOR.replace( '$textareaid',{";

	


		$str .= "height:{$height},";
	
	
		if($color) {
			$str .= "extraPlugins : 'uicolor',uiColor: '$color',";
		}
		
		if($up) {	
			$str .="filebrowserImageUploadUrl:'".B_URL."/upimage',";
			$str .="filebrowserFlashUploadUrl:'".B_URL."/upflash',";
		}
		$str .= "toolbar :\r\n";
		$str .= "[\r\n";
		$str .= $toolbar;
		$str .= "]\r\n";
		//$str .= "fullPage : true";
		$str .= "});\r\n";
		$str .= '</script>';
		return $str;
	}
	/**
	 * 日期时间控件
	 * 
	 * @param $name 控件name，id
	 * @param $value 选中值
	 * @param $isdatetime 是否显示时间
	 * @param $loadjs 是否重复加载js，防止页面程序加载不规则导致的控件无法显示
	 * @param $showweek 是否显示周，使用，true | false
	 */
	public static function date($name, $value = '', $isdatetime = 0, $loadjs = 0) {
		if($value == '0000-00-00 00:00:00') $value = '';
		$id = preg_match("/\[(.*)\]/", $name, $m) ? $m[1] : $name;
		if($isdatetime) {
			$size = 21;
			$format = '%Y-%m-%d %H:%M:%S';
			$showsTime = 12;
		} else {
			$size = 10;
			$format = '%Y-%m-%d';
			$showsTime = 'false';
		}
		$str = '';
		if($loadjs || !defined('CALENDAR_INIT')) {
			define('CALENDAR_INIT', 1);
			$str .= '<script src="'.B_PUBLIC.'/js/date/js/jscal2.js"></script>
   				 <script src="'.B_PUBLIC.'/js/date/js/lang/cn.js"></script>
   				 <link rel="stylesheet" type="text/css" href="'.B_PUBLIC.'/js/date/css/jscal2.css" />
    				<link rel="stylesheet" type="text/css" href="'.B_PUBLIC.'/js/date/css/border-radius.css" />
    				<link rel="stylesheet" type="text/css" href="'.B_PUBLIC.'/js/date/css/steel/steel.css" />';
		}
		$str .= '<input type="text" name="'.$name.'" id="'.$id.'" value="'.$value.'" size="'.$size.'" class="date" readonly>&nbsp;';
		$str .= '<script type="text/javascript">
			Calendar.setup({
			weekNumbers: true,
		    inputField : "'.$id.'",
		    trigger    : "'.$id.'",
		    dateFormat: "'.$format.'",
		    showTime: '.$showsTime.',
		    minuteStep: 1,
		    onSelect   : function() {this.hide();}
			});
        </script>';
		return $str;
	}

	/**
	 * 颜色控件
	 * 
	 * @param $name 控件name
	 * @param $value 选中值
	 */
	public static function color($name, $value = '000000') {
	
		if(!defined('COLOR_INIT')) {
			define('COLOR_INIT', 1);
			$str= '<script src="'.B_PUBLIC.'/js/jscolor/jscolor.js"></script>';
   			
		}
		$str .= '<input class="color" style="width:48px;height:16px;overfrom:hidden" name="'.$name.'" value="'.$value.'" />';
	
		return $str;
	}

}
