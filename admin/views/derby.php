<script type="text/javascript">
	window.onload = function(){
		checkTime();
	}
</script>

<article id="admin_derby">
<h3>Dodaj Klasyk</h3>
<form action="../admin/php/derby_action.php" method="post">
    <label id="derby_hosts_label" for="derby_team1">Gospodarze</label>
    <label id="derby_guests_label" for="derby_team2">Goście</br></label>
    <select name="derby_team1" id="derby_team1">
        <?php
			$query = mysql_query("SELECT * FROM teams");
			while($result = mysql_fetch_assoc($query)){
				echo ("<option value=\"".$result["team"]."\">".$result["name"]."</option>");
			}
		?>
    </select>&nbsp;
    <select name="derby_team2" id="derby_team2">
        <?php
			$query = mysql_query("SELECT * FROM teams");
			while($result = mysql_fetch_assoc($query)){
				echo ("<option value=\"".$result["team"]."\">".$result["name"]."</option>");
			}
		?>
    </select><br /><br />
    <label id="derby_date_label" for="derby_date">Data:</label>
    <input type="text" id="derby_date" name="derby_date" placeholder="RRRR-MM-DD" size="10" />
    <label id="derby_time_label" for="derby_time">Godzina:</label>
    <input type="text" id="derby_time" name="derby_time" placeholder="GG:MM" size="5" />
    <p id="derby_info">Date i godzinę podajemy według czasu polskiego</p>
    <input type="submit" id="derby_submit_button" value="Dodaj spotkanie" />
</form>
<?php
	if($_SESSION["derby_status"] == NULL){
		echo "<p id=\"derby_alert\"></p>";
	}elseif($_SESSION["derby_status"] == "team_error"){
		echo "<p id=\"derby_alert_error\">Gospodarze i Goście nie mogą być tą samą drużyną</p>";
		$_SESSION["derby_status"] = NULL;
	}elseif($_SESSION["derby_status"] == "ok"){
		echo "<p id=\"derby_alert_ok\">Spotkanie dodane pomyślnie</p>";
		$_SESSION["derby_status"] = NULL;
	}elseif($_SESSION["derby_status_error"] == "error"){
		echo "<p id=\"derby_alert\">Błąd! Spotkanie nie zostało dodane</p>";
		$_SESSION["derby_status"] = NULL;
	}

?>
</article>