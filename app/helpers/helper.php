<?php
    #para redireccionar pagina
    function redireccionar($pagina){
        header('Location: '.RUTA_URL.$pagina);
    }
 //    function verificarSession(){
	// 	$this->session->init();
	// 	if ($this->session->get('user') == null){
	// 		redireccionar('/admin/home');
	// 	}
	// }