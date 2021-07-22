<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Consulta_médica</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto me-auto">
        <a class="nav-link active me-4" href="index.php">Inicio</a>
        <a class="nav-link active me-4" href="citas/citas.php">Pedir cita</a>
        <?php if(isset($_SESSION['user_session'])){?>
          <a class="nav-link active me-4" href="medico/citas.php">Mis Citas</a>
        <?php } ?>
        <a class="nav-link active me-4" href="medico/medico.php">Médicos</a>
        <?php
          if(!isset($_SESSION['user_session'])){
              echo '<a class="nav-link active me-4" href="medico/login.php">Login</a>';
          }else{
              echo '<a class="nav-link active me-4" href="medico/cerrar_sesion.php">Salir</a>';
          }
         ?>
      </div>
    </div>
  </div>
</nav>
<?php if(isset($_SESSION['user_session'])){?>
  <div class="text-end p-2"><?= $_SESSION['user_session'] ?></div>
<?php } ?>
