<?php
    session_start();
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
        <h2 class="text-center">login de Médicos</h2>
        <div class="row justify-content-center">
            <div class="col-lg-4 bg-light p-4">
                <form action="../medico/validate_login.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Usuario</label>
                        <input type="text" name="usuario" class="form-control" placeholder="Escriba usuario o email" maxlength="120" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Clave</label>
                        <input type="password" name="clave" class="form-control"  maxlength="10" required>
                    </div>
                    <button type="submit" class="btn btn-secondary">Continuar</button>
                </form>  
            </div>
        </div>
    </div>

    <script src="../assests/js/bootstrap.min.js"></script>
</body>
</html>