<?php 
	
	$id=$_POST['id'];
	$stuJson=file_get_contents("student.json");
	if($stuJson){
		$date_arr=json_decode($stuJson,true);
		unset($date_arr[$id]);
		$jsonStr=json_encode($date_arr,JSON_PRETTY_PRINT);
		file_put_contents("student.json", $jsonStr);
	}








 ?>