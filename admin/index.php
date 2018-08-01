<?php
	session_start();
	ob_start();
	
	include("../php/db_connect.php");
	mysql_query("SET NAMES utf8");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Eleven #Admin Panel</title>
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/lightbox.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="../js/jquery.lightbox.js" type="text/javascript"></script>
<script src="script.js" type="text/javascript"></script>
</head>

<body>
<header>
	<h1>Eleven Admin Panel</h1>
</header>

<script type="text/javascript">
	window.onload = function(){
		loginCheckEmpty();
	}
</script>

<?php

	if($_SESSION["status"] == NULL){

		echo "<div id=\"login\">";
		echo "<form action=\"php/login.php\" method=\"post\">";
				echo "<p>Login: <input type=\"text\" name=\"login\" size=\"14\" autocomplete=\"off\" id=\"login_login\"/></p>";
				echo "<p>Hasło: <input type=\"password\" name=\"password\" size=\"14\" autocomplete=\"off\" id=\"login_password\" /></p>";
				echo "<p><input type=\"submit\" value=\"zaloguj\" id=\"login_button\" /></p>";
			echo "</form>";	
			echo "<p class=\"alert\" id=\"login_alert\"></p>";	
		echo "</div>";
	}elseif($_SESSION["status"] == "wrong_login"){
		echo "<div id=\"login\">";
		echo "<form action=\"php/login.php\" method=\"post\">";
				echo "<p>Login: <input type=\"text\" name=\"login\" size=\"14\" /></p>";
				echo "<p>Hasło: <input type=\"password\" name=\"password\" size=\"14\"/></p>";
				echo "<p><input type=\"submit\" value=\"zaloguj\" id=\"login_button\" /></p>";
			echo "</form>";	
			echo "<p class=\"alert\">Podany login nie istnieje</p>";	
		echo "</div>";
	}elseif($_SESSION["status"] == "wrong_password"){
		echo "<div id=\"login\">";
		echo "<form action=\"php/login.php\" method=\"post\">";
				echo "<p>Login: <input type=\"text\" name=\"login\" size=\"14\" /></p>";
				echo "<p>Hasło: <input type=\"password\" name=\"password\" size=\"14\"/></p>";
				echo "<p><input type=\"submit\" value=\"zaloguj\" id=\"login_button\" /></p>";
			echo "</form>";
			echo "<p class=\"alert\">Błędne hasło</p>";		
		echo "</div>";
			
	}elseif($_SESSION["status"] == "logged_in"){
		include("php/page.php");
	}
	
	ob_end_flush();
?>
</body>
</html>
