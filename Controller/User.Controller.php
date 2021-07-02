<?php

  class Usr
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

    public function UsuarioExistente()
    {
      $email=$_POST['NombreUser'];
      $pass=$_POST['password'];

      $us=$this->user->BuscarUser($email,$pass);

            if($us->num_rows==1)
            {
              session_start();
              $usuario=mysqli_fetch_assoc($us);

              $_SESSION['user']=$usuario['Correo'];
              $_SESSION['id']=$usuario['id'];
      
             if($usuario['BlogTipoUsuario_idBlogTipoUsuario']==1)
                {
                  $this->smarty->assign('title','Login');
                  $this->smarty->display('Admin.tpl');
                }
              else
                {  
            
                  $this->smarty->assign('title','Login');
                  $this->smarty->display('InicioTrab.tpl');
                }
            }
            else if ($us->num_rows>1)
                {
                  echo "mas de un usuario";
                }
            else 
              {
                $this->smarty->assign('title','Login');
                $this->smarty->display('Login.tpl');
                echo "Usuario o contraseña son incorrectos";
              }
    }

  }
    
?>
