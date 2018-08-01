<?php

	$date = getDate();
	
	if($date[mday] <10){
		$day = ("0".$date[mday]);
	}else{
		$day = $date[mday];
	}
	
	if($date[mon] <10){
		$month = ("0".$date[mon]);
	}else{
		$month = $date[mon];
	}
	
	$year = $date[year];
	
	$today = ($year."-".$month."-".$day);
	
?>