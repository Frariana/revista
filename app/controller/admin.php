<?php
	class Admin extends Controller{
		
		public function __construct(){
			parent::__construct();
			$this->usersModel =  $this->model('user');
			$this->contentModel =  $this->model('content');
		}
		public function index(){
			if ($this->userSession->getSession('user') != null){
				redireccionar('/admin/home');
			}else{
				$this->view('common/head');
				$this->view('common/header');
				$this->view('admin/login');
			}
		}
		public function login(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$datos = [
					'email' => $_POST['email'],
					'password' => $_POST['password']
				];
				$res = $this->usersModel->getUser($datos['email']);
				if (!empty($res)){
					if ($res->password === sha1($datos['password'])){
						$array = [
							'user' => $res->user,
							'rol' => $res->rol
						];
						$this->userSession->setSession($array);
						redireccionar('/admin/home');
					}else{
						$data = [
							'mensaje' => 'Acceso denegado'];
					}
				}else{
					$data = [
						'mensaje' => 'Acceso denegado'];
				} 
				$this->view('common/head');
				$this->view('common/header');
				$this->view('admin/login', $data);
			}
		}
		public function logout(){
			$this->userSession->destroy();
			redireccionar('/admin');
		}
		public function home(){
			verificarSession();
			$this->view('common/head');
			$this->view('admin/header');
			$data = [
				'categorias' => $this->getCategory()
			];
			$this->view('admin/menu',$data);
			$this->view('admin/home');
		}
		public function content($content){
			verificarSession();
			$this->view('common/head');
			$this->view('admin/header');
			$data = [
				'categorias' => $this->getCategory()
			];
			$this->view('admin/menu',$data);
			$data = [
				'content' => $this->contentModel->getAllContent()
			];
			$this->view('admin/content', $data);
		}
		public function categorias(){
			verificarSession();
			$this->view('common/head');
			$this->view('admin/header');
			$data = [
				'categorias' => $this->getCategory()
			];
			$this->view('admin/menu', $data);
			$this->view('admin/category', $data);
		}
		public function getCategory(){
			return $this->contentModel->getAllCategory();
		}
		public function insertCategory(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$data = [
					'titulo' => $_POST['titulo'],
					'icono' => $_POST['icono']
				];
				$res = $this->contentModel->insertCategory($data);
				if ($res){
					$mensaje = "Nueva categoría creada";
				}else{
					$mensaje = "Imposible crear categoría, algo sucedió";
				}
				redireccionar('/admin/categorias');
			}
		}
		public function editCategory($id){
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$data = [
					'id_categoria' => $id,
					'titulo' => $_POST['titulo'],
					'icono' => $_POST['icono']
				];
				if ($this->contentModel->updateCategory($data)){
					$mensaje = "Categoría modificada";	
				}else{
					$mensaje = "Imposible modificar categoría, algo sucedió";
				}
				redireccionar('/admin/categorias');
			}else{
				$categoria = $this->contentModel->getCategoryForId($id);
				$dataEditCategoria = [
					'id_categoria' => $categoria->id_categoria,
					'titulo' => $categoria->titulo,
					'icono' => $categoria->icono 
				];
				$this->view('common/head');
				$this->view('admin/header');
				$data = [
					'categorias' => $this->getCategory(),
					'dataEditCategoria' => $dataEditCategoria
				];
				$this->view('admin/menu', $data);
				$this->view('admin/category', $data);
			}
		}
		public function deleteCategory($id){
			if ($this->contentModel->deleteCategory($id)){
				$mensaje = "Categoria borrada";
			}else{
				$mensaje = "Imposible modificar categoría, algo sucedió";
			}
			redireccionar('/admin/categorias');
		}
	}
?>