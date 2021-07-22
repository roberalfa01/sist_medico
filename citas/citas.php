<?php
    require_once('../citas/leer_datos_medicos.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Médico</title>
    <link rel="stylesheet" href="../assests/css/bootstrap.min.css">
</head>
<body>
    <?=include '../menu.php'?>
    <div class="container mt-4">
        <h2 class="text-center">Cita Médica</h2>
        <div class="row justify-content-center">
            <div class="col-lg-4 bg-light p-4">
                <form action="../citas/validate_add.php" method="post">
                    <?php foreach($resultado_medicos as $resul): ?>
                        <div class="mb-3">
                            <label class="form-label">Seleccione Médico</label>
                            <select name="medico">
                                <option value="<?=$resul['usuario']?>"><?=$resul['nombre']?></option>
                            </select>
                        </div>
                    <?php endforeach ?>
                    <div class="mb-3">
                        <label class="form-label">Fecha requerida de cita</label>
                        <input type="date" name="fecha_cita" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">hora</label>
                        <input type="text" name="hora" class="form-control" maxlength="10" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Motivo Cita</label>
                        <input type="text" name="motivo" class="form-control" maxlength="25" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre paciente</label>
                        <input type="text" name="paciente" class="form-control" maxlength="30" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teléfono para contactarlo</label>
                        <input type="text" name="telefono_contacto" class="form-control" maxlength="15" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Su Correo</label>
                        <input type="email" name="correo" class="form-control" maxlength="30" required>
                    </div>
                    <button type="submit" class="btn btn-secondary">Grabar</button>
                    <div id="emailHelp" class="form-text">Una vez pedida su  cita se le contactara</div>
                </form>  
            </div>
        </div>
    </div>

    <script src="../assests/js/bootstrap.min.js"></script>
</body>
</html>