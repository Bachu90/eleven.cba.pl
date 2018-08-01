<?php
session_start();
	ob_start();
	
	if($_SESSION["status"] == "logged_in"){
	
		include("../../php/db_connect.php");
		mysql_query("SET NAMES utf8");
		
		$derby_team1 = $_POST["derby_team1"];
		$derby_team2 = $_POST["derby_team2"];
		$derby_date = $_POST["derby_date"];
		$derby_time = ($_POST["derby_time"]." GMT+1");
		
		if($derby_team1 == $derby_team2){
			$_SESSION["derby_status"] = "team_error";
			header("Location: ../index.php?view=derby");
		}else{
			$query = mysql_query("INSERT INTO derby VALUES( NULL, '$derby_team1', '$derby_team2', '$derby_date', '$derby_time')");
			
			if($query){
				$_SESSION["derby_status"] = "ok";
				header("Location: ../index.php?view=derby");
			}else {
				$_SESSION["derby_status"] = "error";
				header("Location: ../index.php?view=derby");
			}
		}
	}else{
		header("Location: ../index.php");
	}
	
ob_end_flush();
?>