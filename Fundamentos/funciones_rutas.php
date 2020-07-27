<?php 

// echo pathinfo('documento.txt', PATHINFO_FILENAME);

	// * PATHINFO_DIRNAME // Devuelve el directorio padre del archivo
	// * PATHINFO_BASENAME // Devuelve el nombre del archivo con su extension
	// * PATHINFO_EXTENSION // Devuelve la extension del archivo
	// * PATHINFO_FILENAME // Devuelve el nombre del archivo


// $resultados = glob('*.{php,html,txt}', GLOB_BRACE);
// print_r($resultados);

// $resultados = glob('session/*.{php,html,txt}', GLOB_BRACE);
// print_r($resultados);


// echo basename('carpeta1/carpeta2/archivo.php', '.php');
// Obtenemos el nombre del archivo sin ruta

//Nos devuelve toda la ruta, menos el nombre de archivo
echo dirname('carpeta1/carpeta2/archivo.php');

?>