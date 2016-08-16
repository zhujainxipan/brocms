<?php
	class Image {
		function delimage($images){
			foreach($images as $img){
				$srcname=PROJECT_PATH.'public/uploads/'.$img["name"];
				$watername=PROJECT_PATH.'public/uploads/wa_'.$img["name"];

				if(file_exists($srcname)){
					unlink($srcname);
				}

				if(file_exists($watername)) {
					unlink($watername);
				}
			}
		}
	}
