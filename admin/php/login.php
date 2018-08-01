<?php
	session_start();
	ob_start();
	
	if(($_POST["login"] != NULL) && ($_POST["password"] != NULL)){

		include("../../php/db_connect.php");
		
		$login = $_POST["login"];
		$password = $_POST["password"];
		
		$query = mysql_query("SELECT * FROM admin_users WHERE login = '$login'");
		$result = mysql_fetch_assoc($query);
		
		if($result["login"] == $login){
			if($result["password"] == $password){
				$_SESSION["status"] = "logged_in";
				$_SESSION["login"] = $login;
				$_SESSION["password"] = $password;
				$_SESSION["username"] = $result["username"];
				$_SESSION["email"] = $result["email"];
				$_SESSION["avatar"] = $result["avatar"];
				
				header("Location: ../index.php");
			}
			else{
				$_SESSION["status"] = "wrong_password";
				
				header("Location: ../index.php");
			}	
		}
		else{
				$_SESSION["status"] = "wrong_login";
				
				header("Location: ../index.php");
		}
	}else{
		header("Location: ../index.php");
	}
		
	ob_end_flush();
?>