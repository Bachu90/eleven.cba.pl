<article id="admin_scorers_table">
	<h3>Tabela Strzelców</h3>
    
    <div class="admin_scorers">
    	<h5>Liga Mistrzów</h5>
    	<form action="../admin/php/scorers_action.php" method="post">
        	<table>
            	<tr>
                	<th></th>
                	<th>Pozycja</th>
                    <th>Gracz</th>
                    <th>Zespół</th>
                    <th>Mecze</th>
                    <th>Gole</th>
                </tr>
                <tr>
                	<td><input type="text" name="league" value="champions_league" class="scorers_league" /></td>
        			<td><select name="position">
                        <option value="1">1.</option>
                        <option value="2">2.</option>
                        <option value="3">3.</option>
                        <option value="4">4.</option>
                        <option value="5">5.</option>
            		</select></td>
                    <td><input type="text" name="player" size="10" id="scorers_player" /></td>
                    <td><input type="text" name="team" size="10" id="scorers_team" /></td>
                    <td><input type="text" name="matches" size="1" id="scorers_matches" /></td>
                    <td><input type="text" name="goals" size="1" id="scorers_goals" /></td>	
                    <td><input type="submit" value="Wyślij" id="scorers_submit" /></td>
            	</tr>	
            </table>
        </form>
    </div>
     <div class="admin_scorers">
    	<h5>Liga Europy</h5>
    	<form action="../admin/php/scorers_action.php" method="post">
        	<table>
            	<tr>
                	<th></th>
                	<th>Pozycja</th>
                    <th>Gracz</th>
                    <th>Zespół</th>
                    <th>Mecze</th>
                    <th>Gole</th>
                </tr>
                <tr>
                	<td><input type="text" name="league" value="europa_league" class="scorers_league" /></td>
        			<td><select name="position">
                        <option value="1">1.</option>
                        <option value="2">2.</option>
                        <option value="3">3.</option>
                        <option value="4">4.</option>
                        <option value="5">5.</option>
            		</select></td>
                    <td><input type="text" name="player" size="10" id="scorers_player" /></td>
                    <td><input type="text" name="team" size="10" id="scorers_team" /></td>
                    <td><input type="text" name="matches" size="1" id="scorers_matches" /></td>
                    <td><input type="text" name="goals" size="1" id="scorers_goals" /></td>	
                    <td><input type="submit" value="Wyślij" id="scorers_submit" /></td>
            	</tr>	
            </table>
        </form>
    </div>
    <?php
			if($_SESSION["update_status"] == NULL){
        		echo "<p class=\"admin_scorers_table_alert\" id=\"admin_scorers_table_alert\"></p>";
			}elseif($_SESSION["update_status"] == "ok"){
				echo "<p class=\"admin_scorers_table_alert_ok\">Tabela zaktualizowana pomyślnie</p>";
				$_SESSION["update_status"] = NULL;
			}elseif($_SESSION["update_status"] == "error"){
				echo "<p class=\"admin_scorers_table_alert_error\">Bląd! Tabela nie została zaktualizowana</p>";
				$_SESSION["update_status"] = NULL;
			}elseif($_SESSION["update_status"] == "empty"){
				echo "<p class=\"admin_scorers_table_alert_error\">Błąd! Uzupełnij wszystkie wymagane pola</p>";
				$_SESSION["update_status"] = NULL;
			}elseif($_SESSION["update_status"] == "no_number"){
				echo "<p class=\"admin_scorers_table_alert_error\">Błąd! Podana wartość \"Mecze\" lub \"Gole\" nie jest liczbą</p>";
				$_SESSION["update_status"] = NULL;
			}
		?>

</article>