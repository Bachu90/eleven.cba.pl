<ul class="archive">
	<?php
		$archive_query = mysql_query("SELECT * FROM news ORDER BY date DESC");
		while($archive_result = mysql_fetch_assoc($archive_query)){
			echo("<li><a href=\"index.php?news=".$archive_result["id"]."\">".$archive_result["date"]." ".$archive_result["title"]."</a></li>");
		}	
    ?>
</ul>
<p><a href="index.php" class="back">Powrót do strony głownej</a></p>
