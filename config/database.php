<?php

    class Conectar {

        public static function conexion()  {
            $conexion = new mysqli("localhost","root","","bd_medicos");
            $conexion->set_charset("utf8");
            return $conexion;
        }
    }

?>