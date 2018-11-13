<?php
    #para redireccionar pagina
    function redireccionar($pagina){
        header('Location: '.RUTA_URL.$pagina);
    }
    function verificarSession(){
		if ($_SESSION == null){
			redireccionar('/admin');
		}
	}