<?php
session_start();
	ob_start();
	
	include("../../php/db_connect.php");
	mysql_query("SET NAMES utf8");
	
	if(($_SESSION["status"] == "logged_in") && ($_POST["new_username"] != NULL)){
		$username = $_SESSION["username"];
		$new_username = $_POST["new_username"];
		
		$query = mysql_query("UPDATE admin_users SET username = '$new_username' WHERE username = '$username'");
		
		if($query){
			$_SESSION["username_change"] = "ok";
			header("Location: ../index.php?view=settings");
		}else{
			$_SESSION["username_change"] = "error";
			header("Location: ../index.php?view=settings");
		}
	}else{
		header("Location: ../index.php");
	}

ob_end_flush();
?>