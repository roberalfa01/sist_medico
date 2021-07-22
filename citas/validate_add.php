<?php
    if(!isset($_POST['fecha_cita']) or !isset($_POST['hora']) or !isset($_POST['motivo']) ){
        header("location: ../index.php");
        exit();
    }
    $medico = $_POST['medico'];
    $fecha_cita = $_POST['fecha_cita'];
    $hora = $_POST['hora'];
    $motivo = $_POST['motivo'];
    $paciente = $_POST['paciente'];
    $telefono_contacto = $_POST['telefono_contacto'];
    $correo = $_POST['correo'];
    //Conectarse con la base de datos
    require_once('../config/database.php');
    $conectar = Conectar::conexion();
    //grabar en la tabla la cita
    $sql="insert into citas (usuario_medico, fecha_cita, hora, motivo, paciente, telefono_contacto, correo) value ('$medico', '$fecha_cita', '$hora', '$motivo', '$paciente', '$telefono_contacto', '$correo')";
    $conectar->query($sql);
    $conectar->close();
    header('location: ../index.php');
?>