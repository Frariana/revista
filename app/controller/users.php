<?php
    class Users extends Controller{
        public $contentsModel;
        public $session;
        
        public function __construct(){
			$this->usersModel =  $this->model('user');
			$this->session = Session::getInstance();
        }
        public function index(){
			$this->verificarSession();
			$this->view('common/head');
			$this->view('admin/header');
			$this->view('admin/menu');
			$data = [
				'users' => $this->usersModel->getAllUsers()
			];
			$this->view('admin/users', $data);
			$this->view('admin/footer');
		}
        public function insert(){
            $this->verificarSession();
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$data = [
					'email'    => $_POST['email'],
					'rol'      => $_POST['rol'],
					'user'     => $_POST['user'],
					'password' => $_POST['password']
				];
				if ($this->usersModel->insert($data)){
					$mensaje = "Usuario creado";
				}else{
					$mensaje = "Usuario no creado, algo sucedió";
				}
				redireccionar('/users');
			}else{
				#form
				$this->view('common/head');
				$this->view('admin/header');
				$this->view('admin/form_user');
			}
		}
		public function edit($id){
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$data = [
					'id_user' => $id,
					'user' => $_POST['user'],
					'email' => $_POST['email'],
					'rol' => $_POST['rol'],
					'password' => $_POST['password']
				];
				if ($this->usersModel->update($data)){
					$mensaje = "Usuario modificado";	
				}else{
					$mensaje = "Imposible modificar usuario, algo sucedió";
				}
				redireccionar('/users');
			}else{
				$user = $this->usersModel->getUserForId($id);
				$data = [
					'id_user'  => $user->id_user,
					'user'     => $user->user,
					'email'    => $user->email,
					'rol'      => $user->rol,
					'password' => $user->password
				];
				$this->view('common/head');
				$this->view('admin/header');
				$this->view('admin/form_user', $data);
			}
		}
		public function delete($id){
			if ($this->usersModel->delete($id)){
				$mensaje = "Usuario borrada";
			}else{
				$mensaje = "Imposible borrar usuario, algo sucedió";
			}
			redireccionar('/users');
		}
        public function verificarSession(){
			if (!isset($this->session->user)){
				redireccionar('/admin');
			}
		}
    }
?>