<?php

  class User
  {
    public $user;
    public $smarty;
    public $post;

    public function __construct()
    {
      $this->user=new Usuarios();
      $this->smarty=new Smarty();
      $this->post=new Post();
    }

    public function Inicio()
    {
      $this->smarty->assign('title','Login');
      $this->smarty->display('Inicial.tpl');
    }

  }
    
?>
