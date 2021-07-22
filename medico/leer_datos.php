<?php
    require_once('../config/database.php');
    $conectar = Conectar::conexion();
    $usuario_logeado = $_SESSION['user_session'];
    $sql= "select * from citas where  usuario_medico='$usuario_logeado'";
    $resultado = $conectar->query($sql);
?>