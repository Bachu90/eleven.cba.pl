<?php
session_start();
	ob_start();
	
	if($_SESSION["status"] == "logged_in"){
	
		include("../../php/db_connect.php");
		mysql_query("SET NAMES utf8");
	
		$news_photo_name = $_SESSION["news_photo_name"];
		$news_title = $_POST["news_title"];
		$news_content = $_POST["news_content"];
		$news_source = $_POST["news_source"];
		$login = $_SESSION["login"];
		$news_main_status = $_POST["news_main"];
		
		if($news_main_status == "on"){
			$news_main = 1;
		}else{
			$news_main = 0;
		}
		
		
		$query = mysql_query("SELECT * FROM admin_users WHERE login = '$login'");
		$result = mysql_fetch_assoc($query);
		
		$author = $result["username"];
		
		$query = mysql_query("INSERT INTO news VALUES( NULL, CURRENT_TIMESTAMP, '$news_title', '$author', '$news_source', '$news_content', '$news_photo_name', '$news_main')");
		
		if($query){
			$_SESSION["news_status"] = "ok";
			$_SESSION["news_photo_name"] = NULL;
			header("Location: ../index.php?view=news");
		}else{
			$_SESSION["news_status"] = "error";
			header("Location: ../index.php?view=news");
		}
	}else{
		header("Location: ../index.php");
	}
	
	
ob_end_flush();
?>