<?php
	/*
	* getAllContent($cantidad)
	* getAllContentForCategory($categoria, $cantidad)
	*/
	class Content extends Controller{

		public $contentsModel;
		public $session;

		public function __construct(){
			$this->contentsModel =  $this->model('contents');
			$this->session = new Session;
			$this->session->getInstance();
		}
		public function index($paginaActual = 1){
			$this->verificarSession();
			$this->view('common/head');
			$this->view('admin/header');
			$this->view('admin/menu');
			$this->view('admin/content');
			$this->view('admin/footer');
		}
		public function verificarSession(){
			if (!isset($this->session->user)){
				redireccionar('/admin', $mensaje);
			}
		}
		public function getall($page = 1, $cantidadPorPagina = 10, $like = ''){
	      	$this->verificarSession();
	      	$data['contents'] = $this->contentsModel->getContentPaged($page, $cantidadPorPagina, $like);
	      	echo json_encode($data['contents']);
	    }
		public function insert(){
			$this->verificarSession();
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$data = [
					'titulo'       => $_POST['titulo'],
					'cuerpo'       => $_POST['cuerpo'],
					'creador'      => $_POST['creador'],
					'imagen'       => $_POST['image'] ? file_get_contents($_FILES['userfile']['tmp_name']) : NULL,
					'id_categoria' => $_POST['id_categoria'],
					'slider'       => $_POST['slider'] == 'on' ? true  : false,
					'bloque1'      => $_POST['bloque1'] == 'on' ? true  : false,
					'bloque2'      => $_POST['bloque2'] == 'on' ? true  : false,
					'bloque3'      => $_POST['bloque3'] == 'on' ? true  : false
				];
				if ($this->contentsModel->insert($data)){
					$mensaje = "Contenido creado";
				}else{
					$mensaje = "Contenido no creado, algo sucedió";
				}
				redireccionar('/content', $mensaje);
			}else{
				#form
				$this->view('common/head');
				$this->view('admin/header');
				$data['categorias'] =  $this->contentsModel->getAllCategory();
				$this->view('admin/form_content', $data);
			}
		}
		public function edit($id){
			$this->verificarSession();
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				if ($_FILES['userfile']['tmp_name']){
					$imagen = file_get_contents($_FILES['userfile']['tmp_name']);
					$dataImg = [
						'id' => $id,
						'imagen'       => $imagen
					];
					$this->contentsModel->updateImagen($dataImg);
				}
				$icono = $this->contentsModel->getCategoryForId($_POST['id_categoria']);
				$data = [
					'id' => $id,
					'titulo'       => $_POST['titulo'],
					'cuerpo'       => $_POST['cuerpo'],
					'creador'      => $_POST['creador'],
					// 'imagen'       => $imagen,
					'id_categoria' => $_POST['id_categoria'],
					'slider'       => $_POST['slider'] == 'on' ? true  : false,
					'bloque1'      => $_POST['bloque1'] == 'on' ? true  : false,
					'bloque2'      => $_POST['bloque2'] == 'on' ? true  : false,
					'bloque3'      => $_POST['bloque3'] == 'on' ? true  : false
				];
				if ($this->contentsModel->update($data)){
					$mensaje = "Contenido modificado";
				}else{
					$mensaje = "Contenido no modificado, algo sucedió";
				}
				redireccionar('/content', $mensaje);
			}else{ #form
				$content = $this->contentsModel->getContentForId($id);
				$data['dataEditContent'] = [
					'id'    => $content->id,
					'content_titulo'  => $content->content_titulo,
					'cuerpo'          => $content->cuerpo,
					'creador'         => $content->creador,
					'id_categoria'    => $content->id_categoria,
					'userfile'        => $content->imagen,
					'slider'          => $content->slider,
					'bloque1'         => $content->bloque1,
					'bloque2'         => $content->bloque2,
					'bloque3'         => $content->bloque3
				];
				$this->view('common/head');
				$this->view('admin/header');
				$data['categorias'] =  $this->contentsModel->getAllCategory();
				$this->view('admin/form_content', $data);
			}
		}
		public function delete($id){
			if ($this->contentsModel->delete($id)){
				$mensaje = "Contenido eliminado";
			}else{
				$mensaje = "Contenido no eliminado, algo sucedió";
			}
			redireccionar('/content', $mensaje);
		}
	}
?>