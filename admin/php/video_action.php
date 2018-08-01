<?php
session_start();
ob_start();
	
	if($_SESSION["status"] == "logged_in"){
		include("../../php/db_connect.php");
		mysql_query("SET NAMES utf8");
	
		$video_title = $_POST["video_title"];
		$video_adress = $_POST["video_adress"];
		
		$query = mysql_query("INSERT INTO video VALUES( NULL, '$video_title', '$video_adress', CURRENT_TIMESTAMP)");
		
		if($query){
			$_SESSION["video_status"] = "ok";
			header("Location: ../index.php?view=video");
		}else{
			$_SESSION["video_status"] = "error";
			header("Location: ../index.php?view=video");
		}
	}else {
		header("Location: ../index.php");
	}
	
	
ob_end_flush();
?>