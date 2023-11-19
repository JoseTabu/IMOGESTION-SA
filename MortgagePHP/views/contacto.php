<?php 

include "create.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> -->
    
    <link href="../css/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="../css/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../css/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <link href="../css/morgate.css" rel="stylesheet">
    
     

</head>
<body>

  <div class="card">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="true" href="../views/calcuota.html">Calculadora de Cuota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../views/contacto.php">Formulario de Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.html" aria-disabled="true">Inicio</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" id="formularioContacto"  method="post" target="_self">

        <div class="mb-3">
            <label for="fnombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="fnombre" placeholder="" name="fnombre" value="<?php echo $nombres?>">
          </div>

        <div class="mb-3 mt-3">
          <label for="fapellidos" class="form-label">Apellidos</label>
          <input type="text" class="form-control" id="fapellidos" placeholder="" name="fapellidos" value="<?php echo $apellidos?>">
        </div>
        
        <div class="mb-3">
            <label for="ftelefono" class="form-label">Telefono</label>
            <input type="tel" class="form-control" id="ftelefono" placeholder="" name="ftelefono" value="<?php echo $telefono?>">
          </div>

          <div class="mb-3">
            <label for="femail" class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" id="femail" placeholder="" name="femail" value="<?php echo $email?>">
          </div>

          <div class="mb-3">
            <label for="fpais" class="form-label">Pais</label>
            <input type="text" class="form-control" id="fpais" placeholder="" name="fpais"value="<?php echo $pais?>">
          </div>

          <div class="mb-3">
            <label for="fciudad" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="fciudad" placeholder="" name="fciudad"value="<?php echo $ciudad?>">
          </div>
        
        <button type="submit" class="btn btn-success btn-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
              </svg>
        </button>

       
    
      </form>

      <div class="table-responsive mt-3">
        
      <?php 
      require_once "read.php";
      ?>

      </div>

      

      </div>

   
    </div>
  </div>
   
    
    
</body>
</html>