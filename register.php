<?php
        
if($city == 7 || $city == 8){
	// if city = saihat or qatif ONLY
	// update default city in home page
	$cityNameSql = mysql_query("SELECT * FROM cities WHERE id = $city ");
	$getCity = mysql_fetch_object($cityNameSql);
	$cityName = $getCity->name;
	setcookie('maeda_city', $cityName, time() + (31104000 * 30), '/');
}
