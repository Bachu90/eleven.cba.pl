<?php
	session_start();
	ob_start();
	
	if($_SESSION["status"] == "logged_in"){
	
		include("../../php/db_connect.php");
		
		$avatar_name = $_SESSION["avatar_name"];
		$login = $_SESSION["login"];
		
		echo ($avatar_name."</br>");
		echo ($login."</br>");
		
		$query = mysql_query("UPDATE admin_users SET avatar = '$avatar_name' WHERE login = '$login'");
		header("Location: ../index.php?view=settings");
	}else{
		header("Location: ../index.php");
	}
	
ob_end_flush();
?>