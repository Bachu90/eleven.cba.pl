<?php
	include("php/db_connect.php");
	mysql_query("SET NAMES utf8");
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Eleven - Serwis sportowy online</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/lightbox.css" rel="stylesheet" type="text/css" />

<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">

<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/jquery.lightbox.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
</head>

<body>
<div id="background">
    <div id="wrapper">
    	<header>
        	<a href="index.php"><img src="img/logo.png" id="logo" alt="Eleven - Serwis sportowy online" /></a>
        </header>
        <nav>
        	<ul>
            	<li class="menu"><a href="index.php">Strona Główna</a></li>
                <li class="menu"><a href="#">Historia Futbolu</a>
                	<ul class="menu_list">
                    	<li><a href="#">Już wkrótce...</a></li>
                        <li><a href="#">Już wkrótce...</a></li>
                        <li><a href="#">Już wkrótce...</a></li>
                    </ul>
                </li>
                <li class="menu"><a href="#">Zasady Gry</a>
                	<ul class="menu_list">
                    	<li><a href="#">Już wkrótce...</a></li>
                        <li><a href="#">Już wkrótce...</a></li>
                        <li><a href="#">Już wkrótce...</a></li>
                    </ul>
                </li>
                <li class="menu"><a href="#">Kluby</a>
                	<ul class="menu_list">
                    	<li><a href="#">Już wkrótce...</a></li>
                        <li><a href="#">Już wkrótce...</a></li>
                        <li><a href="#">Już wkrótce...</a></li>
                    </ul>
                </li>
                <li class="menu"><a href="#">Redakcja</a></li>
            </ul>
        </nav>
        <section id="left">
        	<div id="articles">
            	<div class="bar"><p>Najnowsze</p></div>
            	<ul>
					<?php
						$article_query = mysql_query("SELECT * FROM news ORDER BY date DESC LIMIT 0, 7");
						while($article_result = mysql_fetch_assoc($article_query)){
							if($article_result["main"] == 1){
								echo("<li><a style=\"text-decoration: underline;\" href=\"index.php?news=".$article_result["id"]."\">".$article_result["title"]."</a></li>");
							}else{
								echo("<li><a href=\"index.php?news=".$article_result["id"]."\">".$article_result["title"]."</a></li>");
							}
						}
                    ?>
                    
                </ul>
                <a href="index.php?view=news_archive" id="archive">Pokaż Archiwum</a>
            </div>
            <?php
            echo "<div id=\"derby\">";
            	echo "<div class=\"bar\"><p style=\"font-size: 16px; padding-top: 5px;\">Najbliższe Klasyki</p></div>";
            
				include("php/date.php");
				
				$derby_query = mysql_query("SELECT * FROM derby WHERE date >= '$today' ORDER BY date ASC");
				
				/* DERBY 1 */
				$derby_result = mysql_fetch_assoc($derby_query);
				$team1 = $derby_result["team_1"];
				$team2 = $derby_result["team_2"];
				
				if(($team1 != NULL) || ($team2 != NULL)){
					
					$logo1_query = mysql_query("SELECT * FROM teams WHERE team = '$team1'");
					$logo1_result = mysql_fetch_assoc($logo1_query);
					$logo1 = $logo1_result["logo"];
					$logo2_query = mysql_query("SELECT * FROM teams WHERE team = '$team2'");
					$logo2_result = mysql_fetch_assoc($logo2_query);
					$logo2 = $logo2_result["logo"];
					$stadium = $logo1_result["stadium"];
					
					echo "<div class=\"derby\">";
					echo("<p><img src=\"".$logo1."\" alt=\"".$team1."\" /> VS <img src=\"".$logo2."\" alt=\"".$team2."\" /></p>");
					echo("<p>".$derby_result["date"]." ".$derby_result["time"]."</p>");
					echo("<p>".$stadium."</p>");
					echo "</div>";
				}else{
					echo "<div class=\"derby\">";
					echo "</div>";
				}
				/* DERBY 2 */
                $derby_result = mysql_fetch_assoc($derby_query);
				$team1 = $derby_result["team_1"];
				$team2 = $derby_result["team_2"];
				
				if(($team1 != NULL) || ($team2 != NULL)){
				
					$logo1_query = mysql_query("SELECT * FROM teams WHERE team = '$team1'");
					$logo1_result = mysql_fetch_assoc($logo1_query);
					$logo1 = $logo1_result["logo"];
					$logo2_query = mysql_query("SELECT * FROM teams WHERE team = '$team2'");
					$logo2_result = mysql_fetch_assoc($logo2_query);
					$logo2 = $logo2_result["logo"];
					$stadium = $logo1_result["stadium"];
					
					echo "<div class=\"derby\">";
					echo("<p><img src=\"".$logo1."\" alt=\"".$team1."\" /> VS <img src=\"".$logo2."\" alt=\"".$team2."\" /></p>");
					echo("<p>".$derby_result["date"]." ".$derby_result["time"]."</p>");
					echo("<p>".$stadium."</p>");
					echo "</div>";
				} else{
					echo "<div class=\"derby\">";
					echo "</div>";
				}
			echo "</div>";
			?>
            
            <div id="video">
            	<div class="bar"><p>Sportowe Video</p></div>
                <ul>
                <?php 
				
					$video_query = mysql_query("SELECT * FROM video ORDER by date DESC LIMIT 0,7");
					while($video_result = mysql_fetch_assoc($video_query)){
						$video_id = $video_result["id"];
						$video_title = $video_result["title"];
						echo ("<li><a href=\"index.php?video=".$video_id."\">".$video_title."</a></li>");
					};	
					
				?>
                </ul>
                <a href="index.php?view=video_archive" id="more">Pokaż więcej...</a>
            </div>
        </section>
        <section id="middle">
        	<?php
				$view = $_GET["view"];
				$news = $_GET["news"];
				$video = $_GET["video"];
				if($view == NULL and $news == NULL and $video == NULL){
					include("views/main.php");
				}elseif($news == NULL and $view !=NULL and $video == NULL){
					switch($view){
						case news_archive:
							include("views/news_archive.php");
							break;
						case video_archive:
							include("views/video_archive.php");
							break;
					}
				}elseif($news != NULL and $view == NULL and $video == NULL){
					include("views/news.php");
				}elseif($news == NULL and $view == NULL and $video != NULL){
					include("views/video.php");
				}
			?>
        </section>
        <section id="right">
        
        <?php
			include("table/league_table.php");
		?>
        
        <?php
			include("table/scorers_table.php");
		?>
        	
            
            <div id="photo">
            	<div class="bar"><p>Zdjęcie tygodnia</p></div>
                <?php
					$photo_query = mysql_query("SELECT * FROM photo ORDER BY date DESC");
					$photo_result = mysql_fetch_assoc($photo_query);
					
					echo ("<h3>".$photo_result["title"]."</h3>");
					echo ("<a href=\"img/week_photo/".$photo_result["image"]."\" title=\"".$photo_result["title"]."\"><img src=\"img/week_photo/".$photo_result["minature"]."\" id=\"week_photo\"/></a>");
				?>
            </div>
        </section>
        <footer>
        	<p>Designed by <a href="http://www.grzegorzbach.co.uk">Grzegorz Bach</a>. Copyrights &copy 2015. All rights reserved by <a href="http://www.eleven.cba.pl">eleven.cba.pl</a></p>
        </footer>
    
    </div>
</div>
</body>
</html>
