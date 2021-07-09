<?php

  class User
  {
    public $user;
    public $smarty;

    public function __construct()
    {
      $this->user=new Usuarios();
      $this->smarty=new Smarty();
    }

    public function Inicio()
    {
      $this->smarty->assign('title','Login');
      $this->smarty->display('Inicial.tpl');
    }

    public function IrLogin()
    {
      $this->smarty->assign('title','Login');
      $this->smarty->display('Login.tpl');
    }

    public function IrRegistro()
    {
      $this->smarty->assign('title','Registro');
      $this->smarty->display('Registro.tpl');
    }

    public function RegresoJefe()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('VistaJefe.tpl');
    }

    public function Cerrar()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('Home.tpl');
    }

    public function Anterior()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('Bienvenida.tpl');
    }

    public function BuscarUsuario()
    {
      $numUs=$_POST['DPI'];
      $pass=$_POST['pass'];

      $us=$this->user->BuscarUser($numUs,$pass);

            if($us->num_rows==1)
            {
              session_start();
              $usuario=mysqli_fetch_assoc($us);

              ///$_SESSION['DPI']=$numUs[`Codigo_u`];
              $_SESSION['id']=$usuario['Departamento_Depto'];
      
             if($usuario['Departamento_Depto']==1)
                {
                  $this->smarty->assign('title','Login');
                  $this->smarty->display('SalaVentas.tpl');
                }
              else if($usuario['Departamento_Depto']==2)
                {  
            
                  $this->smarty->assign('title','Login');
                  $this->smarty->display('DtpAdmon.tpl');
                }
                else
                {  
            
                  $this->smarty->assign('title','Login');
                  $this->smarty->display('VistaJefe.tpl');
                }
            }
            else 
              {
                $this->smarty->assign('title','Login');
                $this->smarty->display('Login.tpl');
                echo "Usuario o contraseña son incorrectos";
              }
    }

    public function GuardarUsuario()
      {
        $correonew=$_POST['email'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $contraseña=$_POST['pass'];
        $dep=$_POST['depto'];
        $telefono=$_POST['cel'];
        

        $user=$this->user->GuardarUser($correonew,$nombre,$apellido,$contraseña,$dep,$telefono,0,0,0,0,0,0,0);

        $this->smarty->assign('title','Login');
        $this->smarty->display('Login.tpl');
      }

      public function CrearCodigo()
      {
        $CodigoU=$_POST['codPer'];
        $correo=$_POST['correoUs'];

        $user=$this->user->CrearCodigo($CodigoU, $correo);

        $this->smarty->assign('title','Login');
        $this->smarty->display('VistaJefe.tpl');
      }

      
    public function Sueldo()
    {
      $this->smarty->assign('title','Sueldo');
      $this->smarty->display('SueldoVista.tpl');
    }

    public function CodigoNew()
    {
      $this->smarty->assign('title','Login');
      $this->smarty->display('CrearCodigo.tpl');

    }

    public function Pagosueldo()
    {
      $CodigoUs=$_POST['codigoUser'];
      $fecha=$_POST['fechapago'];
      $hora=$_POST['horapago'];
      $noCheque=$_POST['nocheque'];
      $valorcheque=$_POST['valcheque'];
      
      $userPago=$this->user->Pagosueldo($CodigoUs,$fecha,$hora,$noCheque,$valorcheque);

      $this->smarty->assign('title','Login');
      $this->smarty->display('SueldoVista.tpl');

    }


  }
    
?>
