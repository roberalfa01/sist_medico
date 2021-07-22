<?php 
    require_once('../config/database.php');
    $conectar = Conectar::conexion();
    $sql= "select * from medicos";
    $resultado_medicos = $conectar->query($sql);
?>