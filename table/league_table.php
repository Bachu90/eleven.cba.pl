<?php
	
    		echo "<div id=\"table\">";
            	echo "<div class=\"bar\"><p>Tabele Ligowe</p></div>";
                echo "<ul>";
                	echo "<li class=\"table_button\" title=\"bpl\" id=\"table_button_first\"><a>Barclays PL</a></li>";
                    echo "<li class=\"table_button\" title=\"bbva\"><a>Liga BBVA</a></li>";
                    echo "<li class=\"table_button\" title=\"bundesliga\"><a>Bundesliga</a></li>";
                echo "</ul>";
				
				/* BARCLAYS PREMIER LEAGUE */
				
                echo "<table id=\"bpl\" class=\"league_tab\" width=\"180\" cellspacing=\"0\">";
                	echo "<tr>";
                    	echo "<th>Poz.</th>";
                        echo "<th>Nazwa Drużyny</th>";
                        echo "<th>Mecze</th>";
                        echo "<th>Pts</th>";
                    echo "</tr>";
					
					$league_table_query = mysql_query("SELECT * FROM league_table WHERE league = 'bpl' ORDER BY position ASC");
					
					
					
					while($league_table_result = mysql_fetch_assoc($league_table_query)){
						$team = $league_table_result["team"];
						$teams_query = mysql_query("SELECT * FROM teams WHERE team = '$team'");
						$teams_result = mysql_fetch_assoc($teams_query);
						
						echo "<tr>";
							echo ("<td>".$league_table_result["position"].".</td>");
							echo ("<td>".$teams_result["name"]."</td>");
							echo ("<td>".$league_table_result["matches"]."</td>");
							echo ("<td>".$league_table_result["points"]."</td>");	
					}
					echo "</table>";
					
					/* LIGA BBVA */
					
					echo "<table id=\"bbva\" class=\"league_tab\" width=\"180\" cellspacing=\"0\">";
                	echo "<tr>";
                    	echo "<th>Poz.</th>";
                        echo "<th>Nazwa Drużyny</th>";
                        echo "<th>Mecze</th>";
                        echo "<th>Pts</th>";
                    echo "</tr>";
					
					$league_table_query = mysql_query("SELECT * FROM league_table WHERE league = 'bbva' ORDER BY position ASC");
					
					
					
					while($league_table_result = mysql_fetch_assoc($league_table_query)){
						$team = $league_table_result["team"];
						$teams_query = mysql_query("SELECT * FROM teams WHERE team = '$team'");
						$teams_result = mysql_fetch_assoc($teams_query);
						
						echo "<tr>";
							echo ("<td>".$league_table_result["position"].".</td>");
							echo ("<td>".$teams_result["name"]."</td>");
							echo ("<td>".$league_table_result["matches"]."</td>");
							echo ("<td>".$league_table_result["points"]."</td>");	
					}
					echo "</table>";
					
					/* BUNDESLIGA */
					
					echo "<table id=\"bundesliga\" class=\"league_tab\" width=\"180\" cellspacing=\"0\">";
                	echo "<tr>";
                    	echo "<th>Poz.</th>";
                        echo "<th>Nazwa Drużyny</th>";
                        echo "<th>Mecze</th>";
                        echo "<th>Pts</th>";
                    echo "</tr>";
					
					$league_table_query = mysql_query("SELECT * FROM league_table WHERE league = 'bundesliga' ORDER BY position ASC");
					
					
					
					while($league_table_result = mysql_fetch_assoc($league_table_query)){
						$team = $league_table_result["team"];
						$teams_query = mysql_query("SELECT * FROM teams WHERE team = '$team'");
						$teams_result = mysql_fetch_assoc($teams_query);
						
						echo "<tr>";
							echo ("<td>".$league_table_result["position"].".</td>");
							echo ("<td>".$teams_result["name"]."</td>");
							echo ("<td>".$league_table_result["matches"]."</td>");
							echo ("<td>".$league_table_result["points"]."</td>");	
					}
					echo "</table>";
            echo "</div>";
?>	
		