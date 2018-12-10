<?php
    class V extends Controller{
        public $contentsModel;

        public function __construct(){
            $this->contentsModel =  $this->model('contents');
        }
        public function index(){
            $this->view('common/head');
            $data['categorias'] = $this->contentsModel->getAllCategoryWithContent();
            $this->view('common/header', $data);
            $data['contents'] = $this->contentsModel->getAllContentsForCant(20);
            $this->view('common/home', $data);
            $this->view('common/footer', $data);
        }
        public function g($link){ #ver contenido por titulo
            $this->view('common/head');
            $data['categorias'] = $this->contentsModel->getAllCategoryWithContent();
            $this->view('common/header', $data);
            $data['content'] = $this->contentsModel->getContentForTitle(_url($link));
            if (!$data['content']){
                $data['mensajeNotFound'] = 'Contenido no encontrado';
                $this->view('common/not-found', $data);
            }else{
                $this->view('common/content', $data);
            }
            $data['contents'] = $this->contentsModel->getAllContentsForCant(6);
            $this->view('common/aside', $data);
            $this->view('common/footer', $data);
        }
        public function c($link){ #ver categorias
            $this->view('common/head');
            $data['categorias'] = $this->contentsModel->getAllCategoryWithContent();#ver si existe contenido para la cat
            $this->view('common/header', $data);
            $data['elementos'] = $this->contentsModel->getContentForCategory(_url($link), 10);
            $data['categoria'] = _url(ucwords($link));
            if (!$data['elementos']){
                $data['mensajeNotFound'] = 'Sin contenido';
                $this->view('common/not-found', $data);
            }else{
                $this->view('common/list', $data);
            }
            $data['contents'] = $this->contentsModel->getAllContentsForCant(6);
            $this->view('common/aside', $data);
            $this->view('common/footer', $data);
        }
    }
?>