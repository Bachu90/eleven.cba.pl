<?php
session_start();
ob_start();
	if(($_SESSION["status"] == "logged_in")){
		if(($_POST["team"] == NULL) || ($_POST["position"] == NULL) || ($_POST["matches"] == NULL) || ($_POST["points"] == NULL)){
			$_SESSION["update_status"] = "empty";
			header("Location: ../index.php?view=league_table");
		}elseif((is_numeric($_POST["matches"])) || (is_numeric($_POST["points"]))){
			include("../../php/db_connect.php");
			mysql_query("SET NAMES utf8");
			
			$team = $_POST["team"];
			$position = $_POST["position"];
			$matches = $_POST["matches"];
			$points = $_POST["points"];
			
			$query = mysql_query("UPDATE league_table SET position = '$position', matches = '$matches', points = '$points' WHERE team = '$team'");
			
			if($query){
				$_SESSION["update_status"] = "ok";
				header("Location: ../index.php?view=league_table");
			}else{
				$_SESSION["update_status"] = "error";
				header("Location: ../index.php?view=league_table");
			}
		}else{
			$_SESSION["update_status"] = "no_number";
			header("Location: ../index.php?view=league_table");
		}
	}else{
		header("Location: ../index.php");
	}
ob_end_flush();
?>