<?php
	class Admin extends Controller{
		public $session;
		public function __construct(){
			$this->usersModel =  $this->model('user');
			$this->contentsModel =  $this->model('contents');
			$this->session = new Session;
			$this->session->getInstance();
		}
		public function index(){ 
			if ($this->session->user){
				redireccionar('/admin/home', $mensaje);
			}else{
				$this->view('common/head');
				// $this->view('common/header');
				$this->view('admin/login');	
				$this->view('admin/footer');
			}
		}
		public function verificarSession(){
			if (!isset($this->session->user)){
				redireccionar('/admin', $mensaje);
			}
		}
		public function home(){
			$this->verificarSession();
			$this->view('common/head');
			$this->view('admin/header');
			$this->view('admin/menu');
			$this->view('admin/home');
			$this->view('admin/footer');
		}
		public function login(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$datos = [
					'email' => $_POST['email'],
					'password' => $_POST['password']
				];
				$res = $this->usersModel->getUserForEmail($datos['email']);
				if (!empty($res)){
					if ($res->password === sha1($datos['password'])){
						$array = [
							'user' => $res->user,
							'rol' => $res->rol
						];
						$this->session->user = $array['user'];
						redireccionar('/admin/home', $mensaje);
					}else{
						$data = [
							'mensaje' => 'Acceso denegado1'];
					}
				}else{
					$data = [
						'mensaje' => 'Acceso denegado2'];
				}
				$this->view('common/head');
				// $this->view('common/header');
				$this->view('admin/login', $data);
			}
		}
		public function logout(){
			$this->session->destroy();
			redireccionar('/admin', $mensaje);
		}
		public function categorias(){
			$this->verificarSession();
			$this->view('common/head');
			$this->view('admin/header');
			$data = [
				'categorias' => $this->contentsModel->getAllCategory()
			];
			$this->view('admin/menu');
			$this->view('admin/category', $data);
			$this->view('admin/footer');
		}
		public function insertCategory(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$data = [
					'titulo' => $_POST['titulo'],
					'icono' => $_POST['icono']
				];
				$res = $this->contentsModel->insertCategory($data);
				if ($res){
					$mensaje = "Nueva categoría creada";
				}else{
					$mensaje = "Imposible crear categoría, algo sucedió";
				}
				redireccionar('/admin/categorias', $mensaje);
			}
		}
		public function editCategory($id){
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$data = [
					'id' => $id,
					'titulo' => $_POST['titulo'],
					'icono' => $_POST['icono']
				];
				if ($this->contentsModel->updateCategory($data)){
					$mensaje = "Categoría modificada";	
				}else{
					$mensaje = "Imposible modificar categoría, algo sucedió";
				}
				redireccionar('/admin/categorias', $mensaje);
			}else{
				$categoria = $this->contentsModel->getCategoryForId($id);
				$dataEditCategoria = [
					'id_categoria' => $categoria->id,
					'category_titulo' => $categoria->category_titulo,
					'icono' => $categoria->icono 
				];
				$data = [
					'categorias' => $this->contentsModel->getAllCategory(),
					'dataEditCategoria' => $dataEditCategoria
				];
				$this->view('common/head');
				$this->view('admin/header');
				$this->view('admin/menu', $data);
				$this->view('admin/category', $data);
			}
		}
		public function deleteCategory($id){
			if ($this->contentsModel->deleteCategory($id)){
				$mensaje = "Categoria borrada";
			}else{
				$mensaje = "Imposible modificar categoría, algo sucedió";
			}
			redireccionar('/admin/categorias', $mensaje, $mensaje);
		}
	}
?>