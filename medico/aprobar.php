<?php
    require_once('../config/database.php');
    $id_cita = $_GET['id'];
    $conectar = Conectar::conexion();
    $sql = "UPDATE citas SET aprobacion='s' WHERE id='$id_cita'";
    $resultado = $conectar->query($sql);
    header('location: citas.php');
?>