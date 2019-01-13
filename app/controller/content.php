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
			$this->session = Session::getInstance();
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
				redireccionar('/admin');
			}
		}
		public function insert(){
			$this->verificarSession();
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$icono = $this->contentsModel->getCategoryForId($_POST['id_categoria']);
				if ($data["imagen"]!=NULL){
					$data["imagen"]=subir_imagen(url($data["titulo"]));
					unset($data["file_name"]);
				}
				$data = [
					'titulo'       => $_POST['titulo'],
					'cuerpo'       => $_POST['cuerpo'],
					'creador'      => $_POST['creador'],
					'icono'        => $icono->icono,
					'id_categoria' => $_POST['id_categoria']
				];
				if ($this->contentsModel->insert($data)){
					$mensaje = "Contenido creado";
				}else{
					$mensaje = "Contenido no creado, algo sucedió";
				}
				redireccionar('/content');
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
				$icono = $this->contentsModel->getCategoryForId($_POST['id_categoria']);
				$data = [
					'id_contenido' => $id,
					'titulo'       => $_POST['titulo'],
					'cuerpo'       => $_POST['cuerpo'],
					'creador'      => $_POST['creador'],
					'icono'        => $icono->icono,
					'id_categoria' => $_POST['categoria']
				];
				if ($this->contentsModel->update($data)){
					$mensaje = "Contenido modificado";
				}else{
					$mensaje = "Contenido no modificado, algo sucedió";
				}
				redireccionar('/content');
			}else{ #form
				$content = $this->contentsModel->getContentForId($id);
				$data['dataEditContent'] = [
					'id_contenido'    => $content->id_contenido,
					'content_titulo'  => $content->content_titulo,
					'cuerpo'          => $content->cuerpo,
					'creador'         => $content->creador,
					'id_categoria'    => $content->id_categoria,
					'icono'           => $content->icono
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
			redireccionar('/content');
		}

		public function searchContent(){ //api rest
			header("Access-Control-Allow-Origin: *");
			header("Content-Type: application/json; charset=UTF-8");
			header("Access-Control-Allow-Methods: POST");
			header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
			if (!isset($_POST['busqueda'])){
				echo json_encode("error");
			}else{
				$data = $_POST['busqueda'];
				$result = $this->contentsModel->searchContent($data);
	            echo json_encode($result);
			}
		}
	}
?>