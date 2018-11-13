<?php
  class Home extends Controller{
    public function __construct(){
      
    }
    public function index(){
      $data = [];
      $this->view('common/head');
      $this->view('common/header');
      $this->view('common/menu_left');
      $this->view('home/content', $data);
      $this->view('common/footer', $data);
    }

  }
?>