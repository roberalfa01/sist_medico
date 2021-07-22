<?php
    if(!isset($_POST['licencia']) or !isset($_POST['nombre']) or !isset($_POST['especialidad']) ){
        header("location: ../index.php");
        exit();
    }
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $clave1 = $_POST['clave1'];
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $especialidad = $_POST['especialidad'];
    $licencia = $_POST['licencia'];

    if($clave  != $clave1){
        header("location: medico.php");
        exit();
    }   
    
    //Conectarse con la base de datos
    require_once('../config/database.php');
    $conectar = Conectar::conexion();
    $sql= "select * from medicos where licencia='$licencia' or usuario='$usuario' or correo='$correo' ";
    $resultado = $conectar->query($sql);
    if($resultado->num_rows < 1){
        //grabar en la tabla
        $sql="insert into medicos (usuario, clave, correo, nombre, especialidad, licencia) value ('$usuario', '$clave', '$correo', '$nombre',  '$especialidad', '$licencia')";
        $conectar->query($sql);
        $conectar->close();
    }
   header('location: ../index.php');
?>