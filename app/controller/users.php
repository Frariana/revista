<?php
    class Users extends Controller{
        public $contentsModel;
        public $session;
        
        public function __construct(){
			$this->contentsModel =  $this->model('user');
			$this->session = Session::getInstance();
        }
        public function index(){
			$this->verificarSession();
			$this->view('common/head');
			$this->view('admin/header');
			$this->view('admin/menu');
			$data = [
				'users' => $this->contentsModel->getAllUsers()
			];
			$this->view('admin/users', $data);
			$this->view('admin/data');
			$this->view('admin/footer');
		}
        public function add(){
            $this->verificarSession();
			// if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            // }
        }
        public function verificarSession(){
			if (!isset($this->session->user)){
				redireccionar('/admin');
			}
		}
    }
?>