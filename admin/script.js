// JavaScript Document

/* LOGIN */

function loginCheckEmpty(){
	document.getElementById("login_button").onclick = function(){
		var login = document.getElementById("login_login").value;
		var password = document.getElementById("login_password").value;
		
		if((login == "") || (password == "")){
			document.getElementById("login_alert").innerHTML = "Uzupełnij wszystkie pola";
			return false;
		}else{
			document.getElementById("login_alert").innerHTML = "";
			return true;
		}
	}
			
}

/* SETTINGS */

function settingsCheckPassword(){
	
	document.getElementById("pass_submit").onclick = function(){

		var old_pass = document.getElementById("old_pass").value;
		var pass1 = document.getElementById("pass1").value;
		var pass2 = document.getElementById("pass2").value;	
		
		if((old_pass == "") || (pass1 == "") || (pass2 == "")){
			document.getElementById("pass_alert_error").innerHTML = "Uzupełnij wszystkie pola";
			return false;
		}else {
			if(old_pass == pass1){
				document.getElementById("pass_alert_error").innerHTML = "Nowe hasło musi być inne niż aktualne";
				return false;
			}else {
				if(pass1 != pass2){
				document.getElementById("pass_alert_error").innerHTML = "Nowe hasło zostało źle powtórzone";
				return false;
				}else {
				document.getElementById("pass_alert_ok").innerHTML = "";
				return true;
				}
			}
		}
	}
}


function settingsUploadAvatar(){
	
	document.getElementById("avatar_submit").onclick = function(){
	
		var adress = document.getElementById("avatar_adress");
		
		if(adress.value == ""){
			document.getElementById("avatar_alert").innerHTML = "Nie wybrano żadnego pliku";
			return false;
		}else{
			document.getElementById("avatar_alert").innerHTML = "";
			return true;
		}
	}
}


/* NEWS */

function newsCheckEmpty(){
	document.getElementById("news_submit").onclick = function(){
		
		var title = document.getElementById("news_title").value;
		var content = document.getElementById("news_content").value;
		var source = document.getElementById("news_source").value;
		
		if((title == "") || (content == "") || (source == "")){
			document.getElementById("news_alert").innerHTML = "Uzupełnij wsystkie Pola";
			return false;
		}else{
			document.getElementById("news_alert").innerHTML = "";
			return true;
		}
	}
}


/* VIDEO */

function videoShowView(){
	
	document.getElementById("video_view_button").onclick = function(){
	
		var title = document.getElementById("video_title").value;
		var adress = document.getElementById("video_adress").value;
		
		document.getElementById("video_title_view").innerHTML = title;
		document.getElementById("video_content_view").innerHTML = "<iframe width=\"400\" height=\"250\" src=\"" + adress + "\" frameborder=\"0\" allowfullscreen></iframe>";
	}
}


$(document).ready(function(){
	$("#admin_video a").lightbox();
	
});

/* DERBY */

function checkTime(){
	
	
	document.getElementById("derby_submit_button").onclick = function(){
		var derby_date = document.getElementById("derby_date").value;
		var date_expression = /^[0-9]{4}-[0-9]{2}-[0-9]{2}$/;
		var derby_time = document.getElementById("derby_time").value;
		var time_expression = /^[0-9]{2}:[0-9]{2}$/;
		
		if(derby_date.match(date_expression)){
			if(derby_time.match(time_expression)){
				return true;
			}else{
				document.getElementById("derby_alert").innerHTML = "Podana godzina jest nieprawidłowa";
				return false;
			}
		}else{
			document.getElementById("derby_alert").innerHTML = "Podana data jest nieprawidłowa";
			return false;
		}
	}
	
}

/* WEEK PHOTO */

function photoCheckEmpty() {
	document.getElementById("admin_photo_submit_button").onclick = function(){
		
		var adminPhotoTitle = document.getElementById("admin_photo_title").value;
		var adminPhotoMinature = document.getElementById("admin_photo_minature").value;
		var adminPhotoImage = document.getElementById("admin_photo_image").value;
		
		if((adminPhotoTitle == "") || (adminPhotoMinature == "") || (adminPhotoImage == "")){
			document.getElementById("admin_photo_alert").innerHTML = "Uzupełnij wszystkie pola";
			return false;	
		}
	}
}

$(document).ready(function(){
	$("#admin_photo_view a").lightbox();
	
});


	

	
