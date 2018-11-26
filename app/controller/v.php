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
        public function g($link){ #ver contenido por id
            $this->view('common/head');
            $data['categorias'] = $this->contentsModel->getAllCategory();
            $this->view('common/header', $data);
            $data['content'] = $this->contentsModel->getContentForTitle(_url($link));
            if (!$data['content']){
                $data['mensajeNotFound'] = 'Sin contenido';
                $this->view('common/not-found', $data);
            }else{
                $this->view('common/content', $data);
            }
            $data['contents'] = $this->contentsModel->getAllContentsForCant(6);
            $this->view('common/menu', $data);
            $this->view('common/footer', $data);
        }
        public function c($link){ #ver categorias
            $this->view('common/head');
            $data['categorias'] = $this->contentsModel->getAllCategory();
            $this->view('common/header', $data);
            $data['content'] = $this->contentsModel->getContentForTitle(_url($link));
            if (!$data['content']){
                $data['mensajeNotFound'] = 'Sin contenido';
                $this->view('common/not-found', $data);
            }else{
                $this->view('common/content', $data);
            }
            $data['contents'] = $this->contentsModel->getAllContentsForCant(6);
            $this->view('common/menu', $data);
            $this->view('common/footer', $data);

        }
    }
?>