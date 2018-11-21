<?php
    #para redireccionar pagina
    function redireccionar($pagina){
        header('Location: '.RUTA_URL.$pagina);
    }
    function fechaPretty($fecha){
    	$date=DateTime::createFromFormat("Y-m-d H:i:s", $fecha);
        $moth=$date->format("m");
        $day=$date->format("d");
        $array = [$date, $moth, $day];
        return $array;
    }
    //    function verificarSession(){
	// 	$this->session->init();
	// 	if ($this->session->get('user') == null){
	// 		redireccionar('/admin/home');
	// 	}
	// }