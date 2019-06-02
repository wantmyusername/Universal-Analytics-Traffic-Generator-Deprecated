<?php 

// Configuración para la cantidad de visitas
	$CantidadVisitas = 10000000000;
	for($i=1; $i<$CantidadVisitas; $i++) {


// Configruacion General
	$CodigoAnalytics = 'UA-139938670-1';
	$url = '/';
	$titulopagina = 'Tile';
	$UbicacionGeografica = array('FR','DE','CN');
	$tiempoporusuario = '500';


// Configuracion de Organico
	$palabraclave = 'lightoflifetv';
	$searchengine = 'google';

// Otros
	$idiomausuario = array(
			'es',
			'fr',
			'en',
			'fr-CA',
			'en-US',
			'tr-BG',
			'en-IN',
			'it',
			'pt',
			'pt-BR',
			'it-IT',
			'fr-IT',
			'de-IT',
			'de'
		);


// Configuracion para el Device Category (Mixed Traffic)
	$devicecategory = array(

		// User Agent para Mobile   
			'Mozilla%2F5.0%20(iPhone%3B%20CPU%20iPhone%20OS%208_0_2%20like%20Mac%20OS%20X)%20AppleWebKit%2F600.1.4%20(KHTML%2C%20like%20Gecko)%20Version%2F8.0%20Mobile%2F12A366%20Safari%2F600.1.4',
			'Mozilla%2F5.0%20(iPhone%3B%20CPU%20iPhone%20OS%208_0%20like%20Mac%20OS%20X)%20AppleWebKit%2F600.1.4%20(KHTML%2C%20like%20Gecko)%20Version%2F8.0%20Mobile%2F12A366%20Safari%2F600.1.4',
			'Mozilla%2F5.0%20(Linux%3B%20U%3B%20Android%204.2.2%3B%20nl-nl%3B%20GT-I9505%20Build%2FJDQ39)%20AppleWebKit%2F534.30%20(KHTML%2C%20like%20Gecko)%20Version%2F4.0%20Mobile%20Safari%2F534.30',
			'Mozilla%2F5.0%20(Linux%3B%20Android%204.3%3B%20GT-I9505%20Build%2FJSS15J)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F32.0.1700.99%20Mobile%20Safari%2F537.36',
			'Mozilla%2F5.0%20(Linux%3B%20Android%204.3%3B%20GT-I9500%20Build%2FJSS15J)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F32.0.1700.99%20Mobile%20Safari%2F537.36',
			'Mozilla%2F5.0%20(Linux%3B%20Android%205.1.1%3B%20SM-G925F%20Build%2FLMY47X)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F47.0.2526.83%20Mobile%20Safari%2F537.36',
			'Mozilla%2F5.0%20(Linux%3B%20Android%205.1.1%3B%20SM-G925F%20Build%2FLMY47X)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F45.0.2454.94%20Mobile%20Safari%2F537.36',

		// User Agent para PC 
			'Mozilla%2F5.0%20(Windows%20NT%2010.0%3B%20Win64%3B%20x64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F55.0.2883.87%20Safari%2F537.36',
			'Mozilla%2F5.0%20(Windows%20NT%206.1%3B%20WOW64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F55.0.2883.87%20Safari%2F537.36',
			'Mozilla%2F5.0%20(Windows%20NT%2010.0%3B%20WOW64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F55.0.2883.87%20Safari%2F537.36',
			'Mozilla%2F5.0%20(Macintosh%3B%20Intel%20Mac%20OS%20X%2010_12_2)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F55.0.2883.95%20Safari%2F537.36',
			'Mozilla%2F5.0%20(Macintosh%3B%20Intel%20Mac%20OS%20X%2010_12_2)%20AppleWebKit%2F602.3.12%20(KHTML%2C%20like%20Gecko)%20Version%2F10.0.2%20Safari%2F602.3.12',
			'Mozilla%2F5.0%20(Windows%20NT%2010.0%3B%20WOW64%3B%20rv%3A50.0)%20Gecko%2F20100101%20Firefox%2F50.0',
			'Mozilla%2F5.0%20(X11%3B%20Linux%20x86_64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F55.0.2883.87%20Safari%2F537.36',

		// User Agent para Tablets 
			'Mozilla%2F5.0%20(iPad%3B%20U%3B%20CPU%20OS%20OS%203_2%20like%20Mac%20OS%20X%3B%20en-us)%20AppleWebKit%2F531.21.10%20(KHTML%2C%20like%20Gecko)%20Version%2F4.0.4%20Mobile%2F7B367%20Safari%2F531.21.10'
		);


// Otras configuraciones (Este no se toca)
	$randomuno = rand(1234104333,155641367);
	$randomdos = rand(1234104313,955641367);


// Aquí Esta la mágina. 

	$url= 'https://www.google-analytics.com/r/collect?v=1&_v=j47&a=1642660441&t=pageview&_s=1&dl='.$url.'&ul='.$idiomausuario[array_rand($idiomausuario)].'&de=UTF-8&dt='.$titulopagina.'&sd=24-bit&sr=1440x900&vp=1423x786&je=0&fl=24.0%20r0&_u=AAgAAMABI~&jid=759653687&cid='.$randomuno.'.'.$randomdos.'&tid='.$CodigoAnalytics.'&_r=1&z=646999952&geoid='.$UbicacionGeografica[array_rand($UbicacionGeografica)].'&cm=organic&cs='.$searchengine.'&ck='.$palabraclave.'&cc=content&utt='.$tiempoporusuario.'&ua='.$devicecategory[array_rand($devicecategory)];

// Mostramos una imagen en la sección de proceso
	echo 'Sending Visitors... <img src='.$url.'>&nbsp;';
}

?>