<?php
    class V extends Controller{
        public $contentsModel;

        public function __construct(){
            $this->contentsModel =  $this->model('contents');
        }
        public function index(){
            $this->view('common/head');
            $data['categorias'] = $this->contentsModel->getAllCategory();
            $this->view('common/header', $data);
            $data['contents'] = $this->contentsModel->getAllContent();
            $this->view('common/home', $data);
            $this->view('common/footer', $data);
        }
        public function g($id){ #ver contenido por id
            $this->view('common/head');
            $data['categorias'] = $this->contentsModel->getAllCategory();
            $this->view('common/header', $data);
            $data['content'] = $this->contentsModel->getContentForId($id);
            $this->view('common/content', $data);
            $data['contents'] = $this->contentsModel->getAllContentsForCant(5);
            $this->view('common/menu', $data);
            $this->view('common/footer', $data);
        }
        public function c($id){ #ver categorias
            echo "view";
        }
    }
?>