<?php

if($_SESSION["status"] == "logged_in"){
	echo "<div id=\"wrapper\">";
				echo "<section id=\"left\">";
					echo "<div id=\"panel\">";
						$login = $_SESSION["login"];
						$panel_query = mysql_query("SELECT * FROM admin_users WHERE login = '$login'");
						$panel_result = mysql_fetch_assoc($panel_query);
						
						$avatar = $panel_result["avatar"];
						
						$_SESSION["username"] = $panel_result["username"]; 
			
						echo("<h3>Witaj ".$panel_result["username"]."</h3>");
						if($avatar != ""){
							echo ("<img src=\"../img/avatars/".$panel_result["avatar"]."\" />");
						}else{
							echo ("<img src=\"../img/avatars/user_unknow.jpg\" />");
						}
						echo "<p><a href=\"php/logout.php\" id=\"logout\">Wyloguj Się</a> | <a href=\"index.php?view=settings\">Ustawienia</a></p>";
					
					echo "</div>";
					echo "<h3 class=\"menu_header\">:: MENU ::</h3>";
					echo "<ul class=\"menu\">";
						echo "<li><a href=\"index.php\">#Strona Główna</a></li>";
						echo "<li><a href=\"index.php?view=news\">#Artykuły</a></li>";
						echo "<li><a href=\"index.php?view=derby\">#Klasyki</a></li>";
						echo "<li><a href=\"index.php?view=video\">#Video</a></li>";
						echo "<li><a href=\"index.php?view=league_table\">#Tabele Ligowe</a></li>";
						echo "<li><a href=\"index.php?view=scorers\">#Tabele Strzelców</a></li>";
						echo "<li><a href=\"index.php?view=photo\">#Zdjęcie Tygodnia</a></li>";
					echo "</ul>";
				echo "</section>";
				echo "<section id=\"right\">";
				
					$view = $_GET["view"];
					
					if($view == NULL){
						include("views/main.php");
					}elseif($view != NULL){
						switch($view){
							case news :
								include("views/news.php");
								break;
							case derby :
								include("views/derby.php");
								break;
							case video :
								include("views/video.php");
								break;
							case league_table :
								include("views/league_table.php");
								break;
							case scorers :
								include("views/scorers.php");
								break;
							case photo :
								include("views/photo.php");
								break;
							case settings:
								include("views/settings.php");
								break;
							default :
								include("views/main.php");
						}
					}
				
				echo "</section>";
	echo "</div>";
}else {
	header("Location: ../index.php");
}

?>