<article id="admin_main">
	<h3>Admin Panel</h3>
    <div id="database_status">
    <?php
		$host_connect = mysql_connect("mysql.cba.pl","eleven_admin","elevendb2015");
		$database_connect = mysql_select_db("eleven_cba_pl");
		
		if($host_connect){
			$host_status = "<a class=\"status_online\">Online</a>";
			
			if($database_connect){
				$db_status = "<a class=\"status_online\">Online</a>";
			}else{
				$db_status = "<a class=\"status_offline\">Offline</a>";
			}
		}else{
			$host_status = "<a class=\"status_offline\">Offline</a>";
			$db_status = "<a class=\"status_offline\">Offline</a>";
		}
		
    	echo ("<p>Status serwera bazy danych: <a>".$host_status."</a></p>");
		echo ("<p>Status bazy danych: <a>".$db_status."</a></p>");
		
		mysql_query("SET NAMES utf8");
		
		echo "<table border=\"1\">";
			echo "<tr>";
				echo "<th>Tabela</th><th>Liczba rekordów</th>";
			echo "</tr>";
			
			echo "<tr>";
				$query = mysql_query("SELECT COUNT(id) FROM admin_users");
				$result = mysql_fetch_array($query);
				$records = $result[0];
				echo ("<td>admin_users</td><td>".$records."</td>");
			echo "</tr>";
			echo "<tr>";
				$query = mysql_query("SELECT COUNT(id) FROM derby");
				$result = mysql_fetch_array($query);
				$records = $result[0];
				echo ("<td>derby</td><td>".$records."</td>");
			echo "</tr>";
			echo "<tr>";
				$query = mysql_query("SELECT COUNT(team) FROM league_table");
				$result = mysql_fetch_array($query);
				$records = $result[0];
				echo ("<td>league_table</td><td>".$records."</td>");
			echo "</tr>";
			echo "<tr>";
				$query = mysql_query("SELECT COUNT(id) FROM news");
				$result = mysql_fetch_array($query);
				$records = $result[0];
				echo ("<td>news</td><td>".$records."</td>");
			echo "</tr>";
			echo "<tr>";
				$query = mysql_query("SELECT COUNT(id) FROM photo");
				$result = mysql_fetch_array($query);
				$records = $result[0];
				echo ("<td>photo</td><td>".$records."</td>");
			echo "</tr>";
			echo "<tr>";
				$query = mysql_query("SELECT COUNT(player) FROM scorers");
				$result = mysql_fetch_array($query);
				$records = $result[0];
				echo ("<td>scorers</td><td>".$records."</td>");
			echo "</tr>";
			echo "<tr>";
				$query = mysql_query("SELECT COUNT(id) FROM teams");
				$result = mysql_fetch_array($query);
				$records = $result[0];
				echo ("<td>teams</td><td>".$records."</td>");
			echo "</tr>";
			echo "<tr>";
				$query = mysql_query("SELECT COUNT(id) FROM video");
				$result = mysql_fetch_array($query);
				$records = $result[0];
				echo ("<td>video</td><td>".$records."</td>");
			echo "</tr>";
		echo "</table>";
		
	?>
    </div>
</article>