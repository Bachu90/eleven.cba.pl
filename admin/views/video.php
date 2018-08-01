<script type="text/javascript">
	window.onload = function(){
		videoShowView();
	}
</script>
<article id="admin_video">
<h3>Dodaj video</h3>
<form action="php/video_action.php" method="POST">
	<table>
    	<tr>
        	<td><input type="text" name="video_title" placeholder="Wprowadź tytuł filmu" id="video_title" /></td>
        </tr>
        <tr>
        </tr>
        <tr>
        	<td><input type="text" name="video_adress" placeholder="Wprowadź adres filmu" id="video_adress" /></td>
            <td><a href="../../img/video_help.png"><img src="../img/helpicon.png" id="video_help" /></a></td>
        </tr>
    </table>
  	<p><input type="submit" value="Wyślij" id="video_submit" />&nbsp;&nbsp;<input type="button" value="Podgląd" id="video_view_button" /></p>
    <?php
		if($_SESSION["video_status"] == NULL){
			echo "<p id=\"video_alert\"></p>";
		}elseif($_SESSION["video_status"] == "ok"){
			echo "<p id=\"video_alert_ok\">Video dodane pomyślnie</p>";
			$_SESSION["video_status"] = NULL;
		}elseif($_SESSION["video_status"] == "error"){
			echo "<p id=\"video_alert_error\">Błąd ! Video nie zostło dodane</p>";
			$_SESSION["video_status"] = NULL;
		}
	?>
</form>
<div id="admin_video_view">
	<h3 id="video_title_view"></h3>
	<div id="video_content_view">
    </div>
</div>
</article>