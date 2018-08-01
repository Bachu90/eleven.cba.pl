<?php
	$main_query = mysql_query("SELECT * FROM news WHERE main = 1 ORDER BY date DESC");
	$main_result = mysql_fetch_assoc($main_query);
			echo "<article class=\"main\">";
            	echo("<h1><a href=\"index.php?news=".$main_result["id"]."\">#1 ".$main_result["title"]."</a></h1>");
                echo "<div class=\"main_left\">";
                	echo "<img src=\"img/news/".$main_result["image"]."\" class=\"article_img\" />";
                    echo "<p><u>Autor:</u> ".$main_result["author"]."<br />";
                    echo "<u>Źródło:</u> ".$main_result["source"]."<br />";
                    echo("<u>Dodano:</u><br />".$main_result["date"]." GMT+1</p>");
                echo "</div>";
                echo "<div class=\"main_right\">";

                	 echo $main_result["content"];
                    
                echo "</div>";
            echo "</article>";
			
	$main_result = mysql_fetch_assoc($main_query);
			echo "<article class=\"main\">";
            	echo("<h1><a href=\"index.php?news=".$main_result["id"]."\">#2 ".$main_result["title"]."</a></h1>");
                echo "<div class=\"main_left\">";
                	echo "<img src=\"img/news/".$main_result["image"]."\" class=\"article_img\" />";
                    echo "<p><u>Autor:</u> ".$main_result["author"]."<br />";
                    echo "<u>Źródło:</u> ".$main_result["source"]."<br />";
                    echo("<u>Dodano:</u><br />".$main_result["date"]." GMT+1</p>");
                echo "</div>";
                echo "<div class=\"main_right\">";

                	 echo $main_result["content"];
                    
                echo "</div>";
            echo "</article>";
			
	$main_result = mysql_fetch_assoc($main_query);
			echo "<article class=\"main\">";
            	echo("<h1><a href=\"index.php?news=".$main_result["id"]."\">#3 ".$main_result["title"]."</a></h1>");
                echo "<div class=\"main_left\">";
                	echo "<img src=\"img/news/".$main_result["image"]."\" class=\"article_img\" />";
                    echo "<p><u>Autor:</u> ".$main_result["author"]."<br />";
                    echo "<u>Źródło:</u> ".$main_result["source"]."<br />";
                    echo("<u>Dodano:</u><br />".$main_result["date"]." GMT+1</p>");
                echo "</div>";
                echo "<div class=\"main_right\">";

                	 echo $main_result["content"];
                    
                echo "</div>";
            echo "</article>";
?>
            

