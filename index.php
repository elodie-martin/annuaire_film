<?php 
	
	if (isset($_SERVER['REQUEST_URI'])) {
		$url = preg_split("/[\/,]+/",$_SERVER['REQUEST_URI']);
		$urlSlice = implode(array_slice($url,2));
		
		switch ($urlSlice) {
			case '':
				# code...
				break;
			case '':
				# code...
				break;
			case '':
				# code...
				break;
			case '':
				# code...
				break;	
			default:
				include 'controllers/default.php';
				break;
		}
				
	}
	
	
?>