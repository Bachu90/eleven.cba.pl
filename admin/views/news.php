<script type="text/javascript">
	window.onload = function(){
		newsCheckEmpty();
	}
</script>
<article id="admin_news">
<h3>Dodaj artykuł</h3>

<form action="../admin/php/news_upload_photo.php" method="post" enctype="multipart/form-data" id="admin_news_photo">
<table cellpadding="5">
	<tr>
		<td>
			<a class="news_form_photo">Zdjęcie:</a><br /> <input type="file" name="news_photo" onchange="submit()" />
        </td>
        <td>
			<?php
                if($_SESSION["news_photo_status"] == NULL){
                    echo("<img src=\"../../img/avatars/user_unknow.jpg\" id=\"admin_news_photo_img\"/>");
                }
                elseif($_SESSION["news_photo_status"] == "ok"){
                    echo("<img src=\"".$_SESSION["news_photo_adress"]."\" id=\"admin_news_photo_img\" />");
                    $_SESSION["news_photo_status"] = NULL;
                }
                elseif($_SESSION["news_photo_status"] == "error"){
                    echo("<img src=\"../../img/avatars/user_unknow.jpg\" id=\"admin_news_photo_img\" />");
                    echo("<p id=\"upload_alert\">Błąd ładowania pliku</p>");
                    $_SESSION["news_photo_status"] = NULL;
                }
            
            ?>
		</td>
	</tr>
</table>

</form>
<form action="../admin/php/news_action.php" method="post" enctype="multipart/form-data" class="admin_news_form" >
<p><input type="text" name="news_title" placeholder="Wprowadź tytuł artykułu" id="news_title" /></p>
<p><textarea name="news_content" placeholder="Wprowadź treść artykułu" id ="news_content"></textarea></p>
<p><input type="text" name="news_source" placeholder="Wprowadź źródło" id="news_source" /></p>
<p><label></label><input type="checkbox" name="news_main" id="news_main" />Artykuł na stronie głównej</label></p>
<p><input type="submit" value="Wyślij" id="news_submit" />&nbsp;&nbsp;&nbsp;<input type="reset" value="wyczyść" /></p>
</form>
<?php
				if($_SESSION["news_status"] == NULL){
            		echo "<p id=\"news_alert\"> </p>";
				}elseif($_SESSION["news_status"] == "ok"){
					echo "<p id=\"news_alert_ok\">Artykuł dodany pomyślnie</p>";
					$_SESSION["news_status"] = NULL;
				}elseif($_SESSION["news_alert"] == "error"){
					echo "<p id=\"news_alert_error\">Błąd! Artykuł nie został dodany</p>";
					$_SESSION["news_status"] = NULL;
				}
            ?>
</article>