<?php
    require_once('../config/database.php');
    $id_cita = $_GET['id'];
    $conectar = Conectar::conexion();
    $sql = "DELETE FROM citas where  id='$id_cita'";
    $resultado = $conectar->query($sql);
    header('location: citas.php');
?>