<?php
session_start();
ob_start();

	if($_SESSION["status"] == "logged_in"){
		$file = $_FILES["avatar"];
		$catalog = "../../img/avatars/";
		
		
		
		if(($file["type"] == "image/png") || ($file["type"] == "image/jpeg")){
			$upload = move_uploaded_file($file["tmp_name"], $catalog.$file["name"]);
		
			if($upload){
				$_SESSION["avatar_status"] = "ok";
				$_SESSION["avatar_adress"] = $catalog.$file["name"];
				$_SESSION["avatar_name"] = $file["name"];
				header("Location: ../index.php?view=settings");	
			}else{
				$_SESSION["avatar_status"] = "error";
				header("Location: ../index.php?view=settings");
			}
		}else{
			$_SESSION["avatar_status"] = "error";
			header("Location: ../index.php?view=settings");
		}
	}else {
		header("Location: ../index.php");
	}

ob_end_flush();
?>