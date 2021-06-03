<?php
    class Conexion extends mysqli
    {
        function __construct()
        {
        $servidor="localhost";
        $pass="root";
        $user="root";
        $BaseDatos="blogtablas";
        $port = 3307;

        parent:: __construct($servidor,$user,$pass,$BaseDatos,$port);
        $this->query("SET NAMES 'utf8';");
        $this-> connect_errno ? die('Error en la conexion'): $error='</br> Conectado';
        //echo $error;
        unset($error);

        }
        
    }
?>