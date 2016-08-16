<?php
	class User {
		function logout(){
			$_SESSION=array();

			if(isset($_COOKIE[session_name()])){
				setCookie(session_name(), '', time()-3600, '/');
			}

			session_destroy();
		}
	}
