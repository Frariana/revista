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
			$data = [
				'contents' => $this->contentsModel->getContentPaged($paginaActual)
			];
			$this->view('admin/content', $data);
			$this->view('admin/footer');
		}
		public function verificarSession(){
			if (!isset($this->session->user)){
				redireccionar('/admin', $mensaje);
			}
		}
		public function insert(){
			$this->verificarSession();
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$imagen = file_get_contents($_FILES['userfile']['tmp_name']);
				$icono = $this->contentsModel->getCategoryForId($_POST['id_categoria']);
				$data = [
					'titulo'       => $_POST['titulo'],
					'cuerpo'       => $_POST['cuerpo'],
					'creador'      => $_POST['creador'],
					'icono'        => $icono->icono,
					'imagen'       => $imagen,
					'id_categoria' => $_POST['id_categoria'],
					'slider'       => $_POST['slider'],
					'bloque1'      => $_POST['bloque1'],
					'bloque2'      => $_POST['bloque2'],
					'bloque3'      => $_POST['bloque3']
				];
				var_dump($data); exit();
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
				$imagen = file_get_contents($_FILES['userfile']['tmp_name']);
				$icono = $this->contentsModel->getCategoryForId($_POST['id_categoria']);
				$data = [
					'id_contenido' => $id,
					'titulo'       => $_POST['titulo'],
					'cuerpo'       => $_POST['cuerpo'],
					'creador'      => $_POST['creador'],
					'icono'        => $icono->icono,
					'imagen'       => $imagen,
					'id_categoria' => $_POST['categoria'],
					'slider'       => $_POST['slider'],
					'bloque1'      => $_POST['bloque1'],
					'bloque2'      => $_POST['bloque2'],
					'bloque3'      => $_POST['bloque3']
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
					'id_contenido'    => $content->id_contenido,
					'content_titulo'  => $content->content_titulo,
					'cuerpo'          => $content->cuerpo,
					'creador'         => $content->creador,
					'id_categoria'    => $content->id_categoria,
					'icono'           => $content->icono,
					'userfile'        => $content->imagen,
					'slider'          => $content->slider,
					'bloque1'         => $content->bloque1,
					'bloque2'         => $content->bloque2,
					'bloque3'         => $content->bloque3
				];
				var_dump($data['dataEditContent']);
				exit();
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