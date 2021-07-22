<?php
    session_start();
    if(!isset($_POST['usuario']) or !isset($_POST['clave']) ){
        header("location: ../index.php");
        exit();
    }
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    //Conectarse con la base de datos
    require_once('../config/database.php');
    $conectar = Conectar::conexion();
    $sql= "select * from medicos where clave='$clave' or usuario='$usuario' or correo='$usuario' ";
    $resultado = $conectar->query($sql);

    if($resultado->num_rows){
        while($row = $resultado->fetch_assoc()){
            $_SESSION["user_session"] = $row['usuario'];
            header("location: ../index.php");
        }
    }else{
        header("location: ../medico/login.php");
    }