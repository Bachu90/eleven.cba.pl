<?php
session_start();
	ob_start();
	
	if($_SESSION["status"] == "logged_in"){
	
		include("../../php/db_connect.php");
		
		$login = $_SESSION["login"];
		$old_password = $_POST["old_password"];
		$new_password  = $_POST["new_password"];
		
		$query = mysql_query("SELECT * FROM admin_users WHERE login = '$login'");
		$result = mysql_fetch_assoc($query);
		
		if($old_password == $result["password"]){
			mysql_query("UPDATE admin_users SET password = '$new_password' WHERE login = '$login'");
			$_SESSION["password_change"] = "ok";
			header("Location: ../index.php?view=settings");
			
		}else{
			$_SESSION["password_change"] = "error";
			header("Location: ../index.php?view=settings");
		}
	}else{
		header("Location: ../index.php");
	}
	
ob_end_flush();
?>