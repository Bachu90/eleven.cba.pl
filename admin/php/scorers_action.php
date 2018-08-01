<?php
session_start();
ob_start();

if(($_SESSION["status"] == "logged_in") && (($_POST["league"] != NULL))){
	
	if(($_POST["player"] == NULL) || ($_POST["team"] == NULL) || ($_POST["matches"] == NULL) || ($_POST["goals"] == NULL)){
		$_SESSION["update_status"] = "empty";
		header("Location: ../index.php?view=scorers");
	}else{
		if((is_numeric($_POST["matches"])) || (is_numeric($_POST["goals"]))){
			include("../../php/db_connect.php");
			mysql_query("SET NAMES utf8");
			
				$league = $_POST["league"];
				$position = $_POST["position"];
				$player = $_POST["player"];
				$team = $_POST["team"];
				$matches = $_POST["matches"];
				$goals = $_POST["goals"];	
			
			
			$query = mysql_query("UPDATE scorers SET player = '$player', team = '$team', matches = '$matches', goals = '$goals' WHERE league = '$league' AND position = '$position'");
			
			if($query){
				$_SESSION["update_status"] = "ok";
				header("Location: ../index.php?view=scorers");
			}else{
				$_SESSION["update_status"] = "error";
				header("Location: ../index.php?view=scorers");
			}
		}else{
			$_SESSION["update_status"] = "no_number";
			header("Location: ../index.php?view=scorers");
		}
	}
}else{
	header("Location: ../index.php");
}


ob_end_flush();
?>