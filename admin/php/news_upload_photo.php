<?php
session_start();
ob_start();
if($_SESSION["status"] == "logged_in"){
	
	
	$file = $_FILES["news_photo"];
	$catalog = "../../img/news/";
	
	
	
	if(($file["type"] == "image/png") || ($file["type"] == "image/jpeg")){
		$upload = move_uploaded_file($file["tmp_name"], $catalog.$file["name"]);
	
		if($upload){
			$_SESSION["news_photo_status"] = "ok";
			$_SESSION["news_photo_adress"] = $catalog.$file["name"];
			$_SESSION["news_photo_name"] = $file["name"];
			header("Location: ../index.php?view=news");	
		}else{
			$_SESSION["news_photo_status"] = "error";
			header("Location: ../index.php?view=news");
		}
	}else{
		$_SESSION["news_photo_status"] = "error";
		header("Location: ../index.php?view=news");
	}
}else{
	header("Location: ../index.php");
}

ob_end_flush();
?>