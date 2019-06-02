<?php

    $repetir = 100000000000;
    for($i=1; $i<$repetir; $i++) {
 

	$analytics='UA-139938670-1'; 
	$utmn=rand(1000000000,9999999999); 
	$cookie=rand(10000000,99999999); 
	$keytran=rand(1000000000,2147483647);
	$hoy=time(); 
	$tipo = rand(0,5);
	
	
	//Referer
	$referrers = array(
		'google.com',
	);
	
	//Sociales
	$sociales = array(
		'facebook.com',
	);
	
	//Palabras
	$palabras = array(
		'lightoflifetv',
		);
	
	$referer = $referrers[rand(0,count($referrers)-1)];
	$social = $sociales[rand(0,count($sociales)-1)];
	$palabra = $palabras[rand(0,count($palabras)-1)];
	

	switch($tipo) {
		default:
			$dtipo = 'utmccn%3D(direct)%7Cutmcsr%3D(direct)%7Cutmcmd%3D(none)%3B%2B__utmv%3D38513878.-%3B';
		break;
		case 1:
			$dtipo = 'utmcsr%3D'.$referer.'%7Cutmccn%3D(organic)%7Cutmcmd%3Dreferral%7Cutmctr%3D'.$referer.'%3B';
		break;
		case 2:
			$dtipo = 'utmcsr%3D'.$social.'%7Cutmccn%3D(organic)%7Cutmcmd%3Dsocial%7Cutmctr%3D'.$social.'%3B';
		break;
		case 3:
			$dtipo = 'utmcsr%3D1233dd%7Cutmccn%3D(organic)%7Cutmcmd%3Dcustom%7Cutmctr%3Dlightoflifetv%3B';
		break;
		case 4:
			$dtipo = 'utmcsr%3D'.$palabra.'%7Cutmccn%3D(organic)%7Cutmcmd%3Dorganic%7Cutmctr%3D'.$palabra.'%3B';
		break;
	}
	
	$url='http://www.google-analytics.com/__utm.gif?utmwv=1&utmn='.$utmn.'&utmsr=-&utmsc=-&utmul=-&utmje=1&utmfl=-&utmdt=&utmhn='.$referer.'&utmr='.$referer.'&utmp='.$var_utmp.'&utmac='.$analytics.'&utmcc=__utma%3D'.$cookie.'.'.$keytran.'.'.$hoy.'.'.$hoy.'.'.$hoy.'.2%3B%2B__utmb%3D'.$cookie.'%3B%2B__utmc%3D'.$cookie.'%3B%2B__utmz%3D'.$cookie.'.'.$hoy.'.2.2.'.$dtipo;
	 echo $url;
	
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, $url); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 15); 
	curl_setopt($ch, CURLOPT_REFERER, $referer);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36");

	$contenido = curl_exec($ch); 
	curl_close($ch);
		

}
?>