<?php
    class Usuarios
    {
        public $con;

        public function __construct()
        {
            $this->con=new Conexion();
        }
            
        public function BuscarUser($numUs, $pass)
        {
            $this->con=new Conexion();
            $sql="SELECT * FROM `trabajador` WHERE `Codigo_u` = '$numUs' AND `Contraseña`='$pass';";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }

        public function GuardarUser($correonew,$nombre,$apellido,$contraseña,$dep,$telefono)
            {
                $this->con=new Conexion();
                $sql="INSERT INTO `trabajador`(`Correo`, `Nombre`, `Apellido`, `Contraseña`, `Departamento_Depto`, `Telefono`,`Codigo_u`,`Pago_de_Sueldo_idPago_de_Sueldos`,`Total_Liquido_idTotalLiquido`,`Estado_idEstado`,`Pago_de_Sueldo_idPago_de_Sueldo`,`TotalLiquido_idTotalLiquido`,`Beneficio_idBeneficios`) VALUES ('$correonew','$nombre','$apellido','$contraseña','$dep','$telefono',0,0,0,0,0,0,0);"; 
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

        public function CrearCodigo($CodigoU, $correo)
        {
            $this->con=new Conexion();
            $sql="UPDATE `trabajador` SET `Codigo_u`= '$CodigoU' WHERE `Correo`='$correo';";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }

        public function Pagosueldo($CodigoUs,$fecha,$hora,$noCheque,$valorcheque)
        {
            $this->con=new Conexion();
            $sql="INSERT INTO `pago_de_sueldo`(`Trabajador_Usuario`, `Fecha`, `Hora`, `Cheque`, `ValordeCheque`) VALUES ('$CodigoUs','$fecha','$hora','$noCheque','$valorcheque');";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }

        public function CrearBoni($CodUs,$ValBoni)
        {
            $this->con=new Conexion();
            $sql="INSERT INTO `bonificaciondevengados`(`id_Codigo_u`, `BonificacionDevengados`) VALUES ('$CodUs','$ValBoni');";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }

        public function CrearBeneficio($CodUsBen,$ValBene,$MotivoBene)
        {
            $this->con=new Conexion();
            $sql="INSERT INTO `beneficio`(`Trabajador_Usuario`, `Valor_Beneficio`, `Productividad`) VALUES ('$CodUsBen','$ValBene','$MotivoBene');";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }

        public function CrearComision($CodUsBoni,$ValBoni)
        {
            $this->con=new Conexion();
            $sql="INSERT INTO `comisiones`(`id_Codigo_u`, `Comisiones`) VALUES ('$CodUsBoni','$ValBoni');";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }

        public function CrearHorasExtras($CodUsHrsExtra,$ValHrsExtra)
        {
            $this->con=new Conexion();
            $sql="INSERT INTO `horeasextras`(`id_Codigo_u`, `Total`) VALUES ('$CodUsHrsExtra','$ValHrsExtra');";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }

        public function CrearJudiciales($codUsJud,$valJud)
        {
            $this->con=new Conexion();
            $sql="INSERT INTO `judiciales`(`id_Codigo_u`, `Judiciales`) VALUES ('$codUsJud','$valJud');";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }
    }

?>
