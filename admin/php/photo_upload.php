<?php
	session_start();
	ob_start();
	
	if($_SESSION["status"] == "logged_in"){
		$title = $_POST["admin_photo_title"];
		$minature = $_FILES["admin_photo_minature"];
		$image = $_FILES["admin_photo_image"];
		$catalog = "../../img/week_photo/";
		
		
		if(($minature["type"] == "image/png") || ($minature["type"] == "image/jpeg")){
			
			$upload_minature = move_uploaded_file($minature["tmp_name"], $catalog.$minature["name"]);
	
			if($upload_minature){
				
				$_SESSION["admin_photo_minature_adress"] = $catalog.$minature["name"];
				$_SESSION["admin_photo_minature_name"] = $minature["name"];
				
				if(($image["type"] == "image/png") || ($image["type"] == "image/jpeg")){
					$upload_image = move_uploaded_file($image["tmp_name"], $catalog.$image["name"]);
				
					if($upload_image){
						$_SESSION["admin_photo_upload_status"] = "ok";
						$_SESSION["admin_photo_image_adress"] = $catalog.$image["name"];
						$_SESSION["admin_photo_image_name"] = $image["name"];
						$_SESSION["admin_photo_title"] = $title;	
						header("Location: ../index.php?view=photo");
					}else{
						$_SESSION["admin_photo_upload_status"] = "image_error";
						header("Location: ../index.php?view=photo");
					}
					
				}else{
					$_SESSION["admin_photo_upload_status"] = "image_format_error";
					header("Location: ../index.php?view=photo");
				}
					
			}else{
				$_SESSION["admin_photo_upload_status"] = "minature_error";
				header("Location: ../index.php?view=photo");
			}
		}else{
			$_SESSION["admin_photo_upload_status"] = "minature_format_error";
			header("Location: ../index.php?view=photo");
		}
	}else{
		header("Location: ../index.php");
	}
	
	ob_end_flush();
?>
	