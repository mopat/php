<?php
	mysql_connect('localhost', 'root') or die(mysql_error());
	mysql_select_db('il-disegno') or die (mysql_error());

	if(function_exists($_GET['method'])){
		$_GET['method']();
	}
	else{
		echo 'NO method available';
	}



	function getAllImages(){
		$images_sql = mysql_query('select * from images');
		$images = array();

		while ($image = mysql_fetch_array($images_sql)){
			$images[] = $image;
		}
		$images = json_encode($images);

		echo $_GET['jsoncallback'].'('.$images.')';
	}
?>