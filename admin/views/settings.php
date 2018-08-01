<script type="text/javascript">
	window.onload = function(){
		settingsUploadAvatar();
		settingsCheckPassword();
	
	}
</script>
<article class="middle">
<div id="settings_content">
	<div id="change_password">
	<h3>Zmień hasło</h3>
        <form action="php/change_password.php" method="post">
            <p>Aktualne hasło: <input type="password" name="old_password" id="old_pass" /></p>
            <p>Nowe hasło: <input type="password" name="new_password" id="pass1" /></p>
            <p>Powtórz hasło: <input type="password" id="pass2" /></p>
            <p><input id="pass_submit" type="submit" value="Zmień hasło" /></p>
            <?php
				if($_SESSION["password_change"] == NULL){
            		echo "<p id=\"pass_alert_error\"> </p>";
				}elseif($_SESSION["password_change"] == "ok"){
					echo "<p id=\"pass_alert_ok\">Hasło zmienione pomyślnie</p>";
					$_SESSION["password_change"] = NULL;
				}elseif($_SESSION["password_change"] == "error"){
					echo "<p id=\"pass_alert_error\">Aktualne hasło nieprawidłowe</p>";
					$_SESSION["password_change"] = NULL;
				}
            ?>
        </form>
    </div>
    
    <div id="change_username">
	<h3>Zmień nazwę użytkownika</h3>
        <form action="php/change_username.php" method="post">
        	<?php
            	echo("<p>Aktualna nazwa: ".$_SESSION["username"]."</p>");
			?>
            <p>Nowa nazwa: <input type="text" name="new_username" /></p>
            <p><input type="submit" value="Zmień nazwę" id="username_submit" /></p>
            <?php
				if($_SESSION["username_change"] == NULL){
            		echo "<p></p>";
				}elseif($_SESSION["username_change"] == "ok"){
					echo "<p id=\"username_alert_ok\">Nazwa została zmieniona na \"".$_SESSION["username"]."\"</p>";
					$_SESSION["username_change"] = NULL;
				}elseif($_SESSION["username_change"] == "error"){
					echo "<p id=\"username_alert_error\">Błąd! Nazwa nie została zmieniona</p>";
					$_SESSION["username_change"] = NULL;
				}
            ?>
        </form>
    </div>
    
    <div id="change_avatar">
	<h3>Zmień avatar</h3>
        <form action="php/upload_avatar.php" method="post" enctype="multipart/form-data">
            <p><input type="file" name="avatar" id="avatar_adress" /></p>
            <p><input type="submit" value="Załaduj plik" id="avatar_submit" />
            <?php
				if($_SESSION["avatar_status"] == "ok"){
					echo "<a href=\"php/change_avatar.php\" id=\"set_avatar\">Ustaw Avatar</a>";
				}else{
				}
			?></p>
            <p id="avatar_alert"></p>
        </form>
        <?php
			if($_SESSION["avatar_status"] == NULL){
				echo("<img src=\"../../img/avatars/user_unknow.jpg\" id=\"avatar\" />");
			}
			elseif($_SESSION["avatar_status"] == "ok"){
				echo("<img src=\"".$_SESSION["avatar_adress"]."\" id=\"avatar\" />");
				$_SESSION["avatar_status"] = NULL;
			}
			elseif($_SESSION["avatar_status"] == "error"){
				echo("<img src=\"../../img/avatars/user_unknow.jpg\" id=\"avatar\" />");
				echo("<p id=\"upload_alert\">Błąd ładowania pliku</p>");
				$_SESSION["avatar_status"] = NULL;
			}
        
		?>
    </div>
</div>
    

<article/>
