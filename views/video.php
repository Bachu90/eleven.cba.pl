<?php
	$video_record = $_GET["video"];
	$video_query = mysql_query("SELECT * FROM video WHERE id = $video_record");
	
	$video_result = mysql_fetch_assoc($video_query);
	$video_title = $video_result["title"];
	$video_adress = $video_result["adress"];
	
	echo "<div id=\"video_content\">";
	echo ("<h1>".$video_title."</h1>");
	echo ("<iframe width=\"500\" height=\"355\" src=\"".$video_adress."\" frameborder=\"0\" allowfullscreen></iframe>");
	echo "</div>";
?>
