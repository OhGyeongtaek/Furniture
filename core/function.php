<?php
	function script($txt,$type,$url=""){
		switch($type){
			case "return" : $url = $_SERVER['HTTP_REFERER']; break;
			case "main" : $url = '/view'; break;
			case "url" : $url = $url; 
		}

		echo '<script type="text/javascript">
				alert("'.$txt.'");
				location.href="'.$url.'";
			  </script>';
	}