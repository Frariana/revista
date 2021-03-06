<?php

    class V extends Controller{

        public $contentsModel;

        public function __construct(){
            $this->contentsModel =  $this->model('contents');
        }

        public function index(){
            $this->view('common/head');
            $data['bloque1'] = $this->contentsModel->getBloque1();
            $data['bloque2'] = $this->contentsModel->getBloque2();
            $data['bloque3'] = $this->contentsModel->getBloque3();
            $data['categorias'] = $this->contentsModel->getAllCategory();
            $this->view('common/header', $data);
            $data['sliders'] = $this->contentsModel->getSliders();
            $this->view('common/sliders', $data);
            $data['contents'] = $this->contentsModel->getAllContentsForCant(20);
            $res = $this->contentsModel->revisarIp($_SERVER['REMOTE_ADDR']);
            if (count($res) == 0){
                $this->contentsModel->agregarVisita($_SERVER['REMOTE_ADDR']);
            }else{
                $this->contentsModel->sumarVisita($res[0]->id, $res[0]->numero);
            }
            $this->view('common/home', $data);
        }

        public function g($link){ #ver contenido por titulo
            $this->view('common/head');
            $data['bloque1'] = $this->contentsModel->getBloque1();
            $data['bloque2'] = $this->contentsModel->getBloque2();
            $data['bloque3'] = $this->contentsModel->getBloque3();
            $data['categorias'] = $this->contentsModel->getAllCategory();
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

        public function c($id_categoria){ #ver categorias
            $this->view('common/head');
            $data['bloque1'] = $this->contentsModel->getBloque1();
            $data['bloque2'] = $this->contentsModel->getBloque2();
            $data['bloque3'] = $this->contentsModel->getBloque3();
            $data['categorias'] = $this->contentsModel->getAllCategory();#ver si existe contenido para la cat
            $this->view('common/header', $data);
            // $data['contents'] = $this->contentsModel->getContentForCategory(_url($link), 10);
            $data['contents'] = $this->contentsModel->getContentForCategoryId($id_categoria);
            $data['categoria'] = $this->contentsModel->getCategoryForId($id_categoria);
            $data['categoria'] = $data['categoria']->category_titulo;
            if (!$data['contents']){
                $data['mensajeNotFound'] = 'Error 404 | Contenido no encontrado';
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