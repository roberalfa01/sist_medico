<?php 
    session_start();
    if(!isset($_SESSION['user_session'])){
        header('location: ../index.php');
        exit();
    }
    require_once('../medico/leer_datos.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mis Citas</title>
        <link rel="stylesheet" href="../assests/css/bootstrap.min.css">
    </head>
    <body>
        <?=include '../menu.php'?>
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Fecha Cita</th>
                        <th scope="col">Paciente</th>
                        <th scope="col">Motivo</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($resultado as $resul): ?>
                        <tr>
                            <td><?=date("d-m-Y",strtotime($resul['fecha_cita']))?></td>
                            <td><?=$resul['paciente']?></td>
                            <td><?=$resul['motivo']?></td>
                            <td><?=$resul['hora']?></td>
                            <td>
                                <?php if($resul['aprobacion'] != 's'){?>
                                    <a href="aprobar.php?id=<?=$resul['id']?>" class="me-2">Aprobar</a>
                                    <a href="eliminar.php?id=<?=$resul['id']?>">Eliminar</a>
                                <?php }else {?>
                                    Aprobado
                                <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </body>
</html>