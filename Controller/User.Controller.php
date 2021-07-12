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
      $this->smarty->display('VistasJefe/VistaJefe.tpl');
    }

    public function Cerrar()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('Home.tpl');
    }

    public function Regreso()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('Cabeceras/Inicio.tpl');
    }

    public function Sueldo()
    {
      $this->smarty->assign('title','Sueldo');
      $this->smarty->display('VistasJefe/SueldoVista.tpl');
    }

    public function VerSueldo()
    {
      $this->smarty->assign('title','Sueldo');
      $this->smarty->display('VistasAdmon/VerSueldoAd.tpl');
    }

    public function VerSueldoVen()
    {
      $this->smarty->assign('title','Sueldo');
      $this->smarty->display('VistasVentas/VistaSueldosVen.tpl');
    }

    public function CodigoNew()
    {
      $this->smarty->assign('title','Login');
      $this->smarty->display('VistasJefe/CrearCodigo.tpl');
    }

    public function Boni()
    {
      $this->smarty->assign('title','Login');
      $this->smarty->display('VistasJefe/CrearBoni.tpl');
    }

    public function VerBoniAd()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('VistasAdmon/VistaBoni.tpl');
    }

    public function VerBoniVen()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('VistasVentas/VerBoni.tpl');
    }

    public function RegresoVentas()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('VistasVentas/SalaVentas.tpl');
    }

    public function RegresoAdmin()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('VistasAdmon/DtpAdmon.tpl');
    }

    public function Beneficio()
    {
      $this->smarty->assign('title','Beneficio');
      $this->smarty->display('VistasJefe/Beneficio.tpl');
    }

    public function VerBenAd()
    {
      $this->smarty->assign('title','Beneficio');
      $this->smarty->display('VistasAdmon/Beneficio.tpl');
    }

    public function VerBenVen()
    {
      $this->smarty->assign('title','Beneficio');
      $this->smarty->display('VistasVentas/Beneficio.tpl');
    }

    public function Comisiones()
    {
      $this->smarty->assign('title','Comisiones');
      $this->smarty->display('VistasJefe/Comisiones.tpl');
    }

    public function VerComi()
    {
      $this->smarty->assign('title','Comisiones');
      $this->smarty->display('VistasVentas/Comisiones.tpl');
    }

    public function HorasExtras()
    {
      $this->smarty->assign('title','Horas Extras');
      $this->smarty->display('VistasJefe/HorasExtras.tpl');
    }

    public function HorasExtrasAd()
    {
      $this->smarty->assign('title','Horas Extras');
      $this->smarty->display('VistasAdmon/HorasExtras.tpl');
    }

    public function HorasExtrasVen()
    {
      $this->smarty->assign('title','Horas Extras');
      $this->smarty->display('VistasVentas/HorasExtras.tpl');
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
                  $this->smarty->display('VistasVentas/SalaVentas.tpl');
                }
              else if($usuario['Departamento_Depto']==2)
                {  
            
                  $this->smarty->assign('title','Login');
                  $this->smarty->display('VistasAdmon/DtpAdmon.tpl');
                }
                else
                {  
                  $this->smarty->assign('title','Login');
                  $this->smarty->display('VistasJefe/VistaJefe.tpl');
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

      $this->smarty->assign('title','Codigo');
      $this->smarty->display('VistasJefe/VistaJefe.tpl');
    }

    public function Pagosueldo()
    {
      $CodigoUs=$_POST['codigoUser'];
      $fecha=$_POST['fechapago'];
      $hora=$_POST['horapago'];
      $noCheque=$_POST['nocheque'];
      $valorcheque=$_POST['valcheque'];
      
      $userPago=$this->user->Pagosueldo($CodigoUs,$fecha,$hora,$noCheque,$valorcheque);

      $this->smarty->assign('title','Sueldo');
      $this->smarty->display('VistasJefe/SueldoVista.tpl');

    }

    public function CrearBoni()
    {
      $CodUs=$_POST['codUsBoni'];
      $ValBoni=$_POST['valboni'];
      
      $userBoni=$this->user->CrearBoni($CodUs,$ValBoni);

      $this->smarty->assign('title','Bonificación');
      $this->smarty->display('VistasJefe/CrearBoni.tpl');

    }

    public function CrearBeneficio()
    {
      $CodUsBen=$_POST['codUsBene'];
      $ValBene=$_POST['valbene'];
      $MotivoBene=$_POST['motivo'];
      
      $userBebe=$this->user->CrearBeneficio($CodUsBen,$ValBene,$MotivoBene);

      $this->smarty->assign('title','Bonificación');
      $this->smarty->display('VistasJefe/Beneficio.tpl');
    }

    public function CrearComision()
    {
      $CodUsBoni=$_POST['codUsComi'];
      $ValBoni=$_POST['valcomi'];
      
      $userBebe=$this->user->CrearComision($CodUsBoni,$ValBoni);

      $this->smarty->assign('title','Comisioes');
      $this->smarty->display('VistasJefe/Comisiones.tpl');

    }

    public function CrearHorasExtras()
    {
      $CodUsHrsExtra=$_POST['codUsHrs'];
      $ValHrsExtra=$_POST['valHrs'];
      
      $userBebe=$this->user->CrearHorasExtras($CodUsHrsExtra,$ValHrsExtra);

      $this->smarty->assign('title','Comisioes');
      $this->smarty->display('VistasJefe/HorasExtras.tpl');

    }

   


  }
    
?>
