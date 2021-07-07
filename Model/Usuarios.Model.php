<?php
    class Usuarios
    {
        public $con;

        public function __construct()
        {
            $this->con=new Conexion();
        }
            
        public function BuscarUser($user, $pass)
        {
            $this->con=new Conexion();
            $sql="SELECT * FROM `blogusuario` WHERE `Correo` = '$user' AND `Pass`='$pass';";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }

        public function GuardarUser($tipo, $email, $nombre, $apellido, $pass, $fecha, $telefono)
            {
                $this->con=new Conexion();
                $sql="INSERT INTO `blogusuario`(`BlogTipoUsuario_idBlogTipoUsuario`, `Correo`, `Nombre`, `Apellido`, `Pass`, `FechaNac`, `Cel`, `Estado`) VALUES ('$tipo', '$email', '$nombre', '$apellido', '$pass', '$fecha', '$telefono',1);"; 
                $consulta=$this->con->query($sql);
                $this->con->close();
                return $consulta;
            }

        public function BuscarTipoUser()
        {
            $this->con=new Conexion();
            $sql= "SELECT * FROM 'blogtipousuario' WHERE 1 ;";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }


    }

?>
