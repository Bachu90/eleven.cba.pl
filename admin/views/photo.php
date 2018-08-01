<script type="text/javascript">
	window.onload = function(){
		photoCheckEmpty();	
	}
</script>
<article id="admin_photo">
<h3>Dodaj zdjęcie tygodnia</h3>
<form action="../admin/php/photo_upload.php" method="post" id="photo_form" enctype="multipart/form-data">
<p><label class="admin_photo_label">Tytuł: </label><input type="text" name="admin_photo_title" id="admin_photo_title" placeholder="Wprowadź tytuł zdjęcia" /></p>
<p><label class="admin_photo_label">Miniatura (180px X 100px): </label><input type="file" name="admin_photo_minature" id="admin_photo_minature" /></p>
<p><label class="admin_photo_label">Pełny obraz: </label><input type="file" name="admin_photo_image" id="admin_photo_image" /></p>
<p><input type="submit" value="Podgląd" id="admin_photo_submit_button">&nbsp;<input type="reset" value="Wyczyść" />&nbsp;&nbsp;&nbsp;
<?php
	if($_SESSION["admin_photo_upload_status"] == "ok"){
		echo "<a href=\"php/photo_action.php\" id=\"admin_photo_action\">Dodaj zdjęcie tygodnia</a>";
	}else{
		echo "<a></a>";
	}
?>
</p>
</form>
<?php
	if(($_SESSION["admin_photo_upload_status"] == NULL) && ($_SESSION["admin_photo_status"] == NULL)){
		echo "<p id=\"admin_photo_alert\"></p>";
	}elseif(($_SESSION["admin_photo_upload_status"] == "ok") && ($_SESSION["admin_photo_status"] == NULL)){
		echo ("<div id=\"admin_photo_view\"><h3>#".$_SESSION["admin_photo_title"]."</h3><a href=\"../img/week_photo/".$_SESSION["admin_photo_image_name"]."\" title=\"".$_SESSION["admin_photo_title"]."\"><img src=\"../img/week_photo/".$_SESSION["admin_photo_minature_name"]."\" /></a></div>");
		$_SESSION["admin_photo_upload_status"] = NULL;
	}elseif(($_SESSION["admin_photo_upload_status"] == "minature_error") && ($_SESSION["admin_photo_status"] == NULL)){
		echo "<p id=\"admin_photo_alert_error\">Błąd ładowania minatury</p>";
		$_SESSION["admin_photo_upload_status"] = NULL;
	}elseif(($_SESSION["admin_photo_upload_status"] == "image_error") && ($_SESSION["admin_photo_status"] == NULL)){
		echo "<p id=\"admin_photo_alert_error\">Błąd ładowania głównego obrazu</p>";
		$_SESSION["admin_photo_upload_status"] = NULL;
	}elseif(($_SESSION["admin_photo_upload_status"] == "image_format_error") && ($_SESSION["admin_photo_status"] == NULL)){
		echo "<p id=\"admin_photo_alert_error\">Nieprawidłowy format głównego obrazu</p>";
		$_SESSION["admin_photo_upload_status"] = NULL;
	}elseif(($_SESSION["admin_photo_upload_status"] == "minature_format_error") && ($_SESSION["admin_photo_status"] == NULL)){
		echo "<p id=\"admin_photo_alert_error\">Nieprawidłowy format miniatury</p>";
		$_SESSION["admin_photo_upload_status"] = NULL;
	}elseif(($_SESSION["admin_photo_upload_status"] == NULL) && ($_SESSION["admin_photo_status"] == "added")){
		echo "<p id=\"admin_photo_alert_ok\">Zdjęcie tygodnia dodane pomyślnie</p>";
		$_SESSION["admin_photo_status"] = NULL;
	}elseif(($_SESSION["admin_photo_upload_status"] == NULL) && ($_SESSION["admin_photo_status"] == "error")){
		echo "<p id=\"admin_photo_alert_error\">Błąd! Zdjęcie tygodnia nie zostało dodane</p>";
		$_SESSION["admin_photo_status"] = NULL;
	}
?>
</article>
