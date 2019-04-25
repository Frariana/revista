<?php
    #para redireccionar pagina
    function redireccionar($pagina, $mensaje){
    	header('Location: '.RUTA_URL.$pagina);
    }
    function day($fecha){
    	$date  = DateTime::createFromFormat("Y-m-d H:i:s", $fecha);
        $day   = $date->format("d");
    	return $day;
    }
    function moth($fecha){
    	$date  = DateTime::createFromFormat("Y-m-d H:i:s", $fecha);
    	$moth  = $date->format("m");
		switch ($moth) { case '01': $moth="ENE"; break; case '02': $moth="FEB"; break; case '03': $moth="MAR"; break; case '04': $moth="ABR"; break; case '05': $moth="MAY"; break; case '06': $moth="JUN"; break; case '07': $moth="JUL"; break; case '08': $moth="AGO"; break; case '09': $moth="SEP"; break; case '10': $moth="OCT"; break; case '11': $moth="NOV"; break; case '12': $moth="DIC"; break; default: $moth="MES"; break; };
		return $moth;
    }
    function year($fecha){
    	return $year;
    }
    function _url($url){
    	return str_replace("_", " ", $url);
    }
    function url($url){
	    $url = str_replace(
	        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
	        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
	        $url
	    );
	    $url = str_replace(
	        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
	        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
	        $url );
	    $url = str_replace(
	        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
	        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
	        $url );
	    $url = str_replace(
	        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
	        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
	        $url );
	    $url = str_replace(
	        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
	        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
	        $url );
	    $url = str_replace(
	        array('ñ', 'Ñ', 'ç', 'Ç'),
	        array('n', 'N', 'c', 'C'),
	        $url
	    );
	    $url = str_replace(" ", "_", $url);
	    $url = strtolower($url);  
    	$url = preg_replace("/[^a-zA-Z0-9\_\-\.\,\:]+/", "", $url);
    	return $url;
    }
    
?>