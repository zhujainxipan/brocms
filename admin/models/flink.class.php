<?php
	class Flink {
		function downlogo($logourl){
			$url=parse_url($logourl);
			$logoname=str_replace(".", "_", $url["host"]).".".array_pop(explode(".", basename($logourl)));
			
			$path=PROJECT_PATH."public/uploads/logos/";

			if(!file_exists($path))
				mkdir($path);

			$location=$path.$logoname;
			
			$data=file_get_contents($logourl);

			if(strlen($data) > 0) {
				file_put_contents($location,$data);
				return $logoname;
			} else {
				return false;
			}
		}
	}
