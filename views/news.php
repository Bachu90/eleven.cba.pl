<?php
	$record = $_GET["news"];
	$main_query = mysql_query("SELECT * FROM news WHERE id = $record");
		$main_result = mysql_fetch_assoc($main_query);
				echo "<article class=\"main\">";
					echo("<h1><a style=\"text-decoration: underline;\"># ".$main_result["title"]."</a></h1>");
					echo "<div class=\"main_left\">";
						echo "<img src=\"img/news/".$main_result["image"]."\" class=\"article_img\" />";
						echo "<p><u>Autor:</u> ".$main_result["author"]."<br />";
						echo "<u>Źródło:</u> ".$main_result["source"]."<br />";
						echo("<u>Dodano:</u><br />".$main_result["date"]." GMT+1</p>");
					echo "</div>";
					echo "<div class=\"main_right\" style=\"height: auto; max-height: 750px; overflow: auto; margin-bottom: 20px;\">";
	
						 echo $main_result["content"];
						
					echo "</div>";
				echo "</article>";
?>
<p style="clear: both; margin-top: 10px;"><a href="index.php" class="back">Powrót do strony głownej</a></p>