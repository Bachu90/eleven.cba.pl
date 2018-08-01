// JavaScript Document

$("document").ready(function(){
	
	/* LEAGUE TABLE */
	
	$("#table_button_first").css("background-image","url(img/table_button_on.png)");
	$(".table_button").click(function(){
		$(".table_button").css("background-image","url(img/table_button_off.png)");
		$(".league_tab").fadeOut(1000);
		var active = $(this).attr("title");
		$(this).css("background-image","url(img/table_button_on.png)");
		$("#" + active).delay(1000).fadeIn(1000);
	});
	
	/* SCORERS TABLE */
	
	$("#scorers_button_first").css("background-image","url(img/scorers_button_on.png)");
	$(".scorers_button").click(function(){
		$(".scorers_button").css("background-image","url(img/scorers_button_off.png)");
		$(".scorers_tab").fadeOut(1000);
		var active = $(this).attr("title");
		$(this).css("background-image","url(img/scorers_button_on.png)");
		$("#" + active).delay(1000).fadeIn(1000);
	});
	
	/* WEEK PHOTO */
	
	$("#photo a").lightbox();
	
	/* MENU */
	
	$(".menu").hover(function(){
		$(this).find(".menu_list").show();
	},
	function(){
		$(this).find(".menu_list").hide();
	});
});