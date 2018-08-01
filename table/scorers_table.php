<?php

echo "<div id=\"scorers\">";
	echo "<div class=\"bar\"><p>Strzelcy LM / LE</p></div>";
    	echo "<ul>";
        	echo "<li class=\"scorers_button\" title=\"cl\" id=\"scorers_button_first\"><a>Liga Mistrzów</a></li>";
            echo "<li class=\"scorers_button\" title=\"el\"><a>Liga Europy</a></li>";
        echo "</ul>";
        echo "<table class=\"scorers_tab\" id=\"cl\" width=\"180\" cellspacing=\"0\">";
            echo "<tr>";
            	echo "<th>Poz.</th>";
            	echo "<th>Zawodnik</th>";
            	echo "<th>Mecze</th>";
            	echo "<th>Gole</th>";
            echo "</tr>";
			
			$scorers_query = mysql_query("SELECT * FROM scorers WHERE league = 'champions_league' ORDER BY position ASC");
			
			while($scorers_result = mysql_fetch_assoc($scorers_query)){
				echo "<tr>";
					echo ("<td>".$scorers_result["position"].".</td>");
					echo ("<td>".$scorers_result["player"]."<br />(".$scorers_result["team"].")</td>");
					echo ("<td>".$scorers_result["matches"]."</td>");
					echo ("<td>".$scorers_result["goals"]."</td>");	
				echo "</tr>";
			}
		echo "</table>";
		
		echo "<table class=\"scorers_tab\" id=\"el\" width=\"180\" cellspacing=\"0\">";	
			echo "<tr>";
            	echo "<th>Poz.</th>";
            	echo "<th>Zawodnik</th>";
            	echo "<th>Mecze</th>";
            	echo "<th>Gole</th>";
            echo "</tr>";
			
			$scorers_query = mysql_query("SELECT * FROM scorers WHERE league = 'europa_league' ORDER BY position ASC");
			
			while($scorers_result = mysql_fetch_assoc($scorers_query)){
				echo "<tr>";
					echo ("<td>".$scorers_result["position"].".</td>");
					echo ("<td>".$scorers_result["player"]."<br />(".$scorers_result["team"].")</td>");
					echo ("<td>".$scorers_result["matches"]."</td>");
					echo ("<td>".$scorers_result["goals"]."</td>");	
				echo "</tr>";
			}
		echo "</table>";

echo "</div>";

?>