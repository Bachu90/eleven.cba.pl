
<article id="admin_league_table">
	<h3>Tabele Ligowe</h3>
    
    <div class="admin_league">
    	<h5>Barclays Premier League</h5>
    	<form action="../admin/php/league_table_action.php" method="post">
        	<table>
            	<tr>
                	<th>Zespół</th>
                    <th>Miejsce</th>
                    <th>Mecze</th>
                    <th>Punkty</th>
                    <th></th>
                </tr>
                <tr>
        			<td><select class="team_select" name="team">
                    	<option value="">Wybierz...</option>
						<?php
                            $league_table_query = mysql_query("SELECT * FROM teams WHERE league = 'bpl' ORDER BY name ASC");
                            
                            while($league_table_result = mysql_fetch_assoc($league_table_query)){
                                echo ("<option value=\"".$league_table_result["team"]."\">".$league_table_result["name"]."</option>");
                            }
                        ?>
            		</select></td>
                    <td><select name="position" id="bpl_position">
                    	<option value="">--</option>
                    	<option value="1">1.</option>
                        <option value="2">2.</option>
                        <option value="3">3.</option>
                        <option value="4">4.</option>
                        <option value="5">5.</option>
                        <option value="6">6.</option>
                        <option value="7">7.</option>
                        <option value="8">8.</option>
                        <option value="9">9.</option>
                        <option value="10">10.</option>
                        <option value="11">11.</option>
                        <option value="12">12.</option>
                        <option value="13">13.</option>
                        <option value="14">14.</option>
                        <option value="15">15.</option>
                        <option value="16">16.</option>
                        <option value="17">17.</option>
                        <option value="18">18.</option>
                        <option value="19">19.</option>
                        <option value="20">20.</option>
                    </select></td>
                    <td><input type="text" name="matches" size="1" id="bpl_matches" /></td>
                    <td><input type="text" name="points" size="1" id="bpl_points" /></td>	
                    <td><input type="submit" value="Wyślij" id="bpl_submit" /></td>
            	</tr>	
            </table>
        </form>
    </div>
    <div class="admin_league">
    	<h5>Liga BBVA</h5>
    	<form action="../admin/php/league_table_action.php" method="post">
        	<table>
            	<tr>
                	<th>Zespół</th>
                    <th>Miejsce</th>
                    <th>Mecze</th>
                    <th>Punkty</th>
                    <th></th>
                </tr>
                <tr>
        			<td><select class="team_select" name="team">
                    	<option value="">Wybierz...</option>
						<?php
                            $league_table_query = mysql_query("SELECT * FROM teams WHERE league = 'bbva' ORDER BY name ASC");
                            
                            while($league_table_result = mysql_fetch_assoc($league_table_query)){
                                echo ("<option value=\"".$league_table_result["team"]."\">".$league_table_result["name"]."</option>");
                            }
                        ?>
            		</select></td>
                    <td><select name="position" id="bbva_position">
                    	<option value="">--</option>
                    	<option value="1">1.</option>
                        <option value="2">2.</option>
                        <option value="3">3.</option>
                        <option value="4">4.</option>
                        <option value="5">5.</option>
                        <option value="6">6.</option>
                        <option value="7">7.</option>
                        <option value="8">8.</option>
                        <option value="9">9.</option>
                        <option value="10">10.</option>
                        <option value="11">11.</option>
                        <option value="12">12.</option>
                        <option value="13">13.</option>
                        <option value="14">14.</option>
                        <option value="15">15.</option>
                        <option value="16">16.</option>
                        <option value="17">17.</option>
                        <option value="18">18.</option>
                        <option value="19">19.</option>
                        <option value="20">20.</option>
                    </select></td>
                    <td><input type="text" name="matches" size="1" id="bbva_matches" /></td>
                    <td><input type="text" name="points" size="1" id="bbva_matches" /></td>	
                    <td><input type="submit" value="Wyślij" id="bbva_submit" /></td>
            	</tr>	
            </table>
        </form>
    </div>
    <div class="admin_league">
    	<h5>Bundesliga</h5>
    	<form action="../admin/php/league_table_action.php" method="post">
        	<table>
            	<tr>
                	<th>Zespół</th>
                    <th>Miejsce</th>
                    <th>Mecze</th>
                    <th>Punkty</th>
                    <th></th>
                </tr>
                <tr>
        			<td><select class="team_select" name="team">
                    	<option value="">Wybierz...</option>
						<?php
                            $league_table_query = mysql_query("SELECT * FROM teams WHERE league = 'bundesliga' ORDER BY name ASC");
                            
                            while($league_table_result = mysql_fetch_assoc($league_table_query)){
                                echo ("<option value=\"".$league_table_result["team"]."\">".$league_table_result["name"]."</option>");
                            }
                        ?>
            		</select></td>
                    <td><select name="position" id="bundesliga_position">
                    	<option value="">--</option>
                    	<option value="1">1.</option>
                        <option value="2">2.</option>
                        <option value="3">3.</option>
                        <option value="4">4.</option>
                        <option value="5">5.</option>
                        <option value="6">6.</option>
                        <option value="7">7.</option>
                        <option value="8">8.</option>
                        <option value="9">9.</option>
                        <option value="10">10.</option>
                        <option value="11">11.</option>
                        <option value="12">12.</option>
                        <option value="13">13.</option>
                        <option value="14">14.</option>
                        <option value="15">15.</option>
                        <option value="16">16.</option>
                        <option value="17">17.</option>
                        <option value="18">18.</option>
                    </select></td>
                    <td><input type="text" name="matches" size="1" id="bundesliga_matches" /></td>
                    <td><input type="text" name="points" size="1" id="bundeslga_points" /></td>	
                    <td><input type="submit" value="Wyślij" id="bundesliga_submit" /></td>
            	</tr>	
            </table>
        </form>
    </div>
    
     <?php
			if($_SESSION["update_status"] == NULL){
        		echo "<p class=\"league_table_alert\" id=\"league_table_alert\"></p>";
			}elseif($_SESSION["update_status"] == "ok"){
				echo "<p class=\"league_table_alert_ok\">Tabela zaktualizowana pomyślnie</p>";
				$_SESSION["update_status"] = NULL;
			}elseif($_SESSION["update_status"] == "error"){
				echo "<p class=\"league_table_alert_error\">Bląd! Tabela nie została zaktualizowana</p>";
				$_SESSION["update_status"] = NULL;
			}elseif($_SESSION["update_status"] == "empty"){
				echo "<p class=\"league_table_alert_error\">Błąd! Uzupełnij wszystkie wymagane pola</p>";
				$_SESSION["update_status"] = NULL;
			}elseif($_SESSION["update_status"] == "no_number"){
				echo "<p class=\"league_table_alert_error\">Błąd! Podana wartość nie jest liczbą</p>";
				$_SESSION["update_status"] = NULL;
			}
		?>

</article>