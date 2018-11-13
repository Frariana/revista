<?php /* Controlador/metodo/parametro */
  
  class Core {
    protected $controllerActual = CONTROLLER_ACTUAL;
    protected $metodoActual = 'index';
    protected $parametros = [];

    public function __construct(){
      $url = $this->getUrl();
      if (file_exists('../app/controller/'.$url['0'].'.php')){
        $this->controllerActual = $url[0];
        unset($url[0]);
      }
      //controller
      require_once '../app/controller/'.$this->controllerActual.'.php';
      $this->controllerActual = new $this->controllerActual;
      //metodo
      if (isset($url[1])){
        if (method_exists($this->controllerActual, $url[1])){
          $this->metodoActual = $url[1];
          unset($url[1]);
        }
      }
      // echo $this->metodoActual;
      //parametros
      $this->parametros = $url ? array_values ($url) : [];
      call_user_func_array([$this->controllerActual, $this->metodoActual], $this->parametros);
    }

    public function getUrl(){
      if (isset($_GET['url'])){
        $url = rtrim($_GET['url'], '/');//limpia espacios
        $url = filter_var($url, FILTER_SANITIZE_URL);//limpia de caracteres especiales
        $url = explode('/', $url);//divide string en array
        return $url;
      }
    }

  } 
?>