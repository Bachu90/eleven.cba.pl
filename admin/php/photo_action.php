<?php
	session_start();
	ob_start();
	
	if($_SESSION["status"] == "logged_in"){
		
		include("../../php/db_connect.php");
		mysql_query("SET NAMES utf8");
		
		$title = ("#".$_SESSION["admin_photo_title"]);
		$minature = $_SESSION["admin_photo_minature_name"];
		$image = $_SESSION["admin_photo_image_name"];
		
		$query = mysql_query("INSERT INTO photo VALUES( NULL, '$title', '$image', '$minature', CURRENT_TIMESTAMP )");
		
		if($query) {
			$_SESSION["admin_photo_status"] = "added";
			$_SESSION["admin_photo_title"] == NULL;
			$_SESSION["admin_photo_minature_name"] == NULL;
			$_SESSION["admin_photo_image_name"] == NULL;
			header("Location: ../index.php?view=photo");
		}else {
			$_SESSION["admin_photo_status"] = "error";
			$_SESSION["admin_photo_title"] == NULL;
			$_SESSION["admin_photo_minature_name"] == NULL;
			$_SESSION["admin_photo_image_name"] == NULL;
			header("Location: ../index.php?view=photo");
		} 
	}else{
		header("Location: ../index.php");
	}
	
	ob_end_flush();
?>