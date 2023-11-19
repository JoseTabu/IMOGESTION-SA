<?php

// Se comprueba que si venga el id del registro como parametro antes de proceder
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
   // desde este archivo se va a acceder a base de datos es necesario incluir la conenfiguracion y conexion a base de datos
    require_once "configuracion.php";    

// Se contruye la sentencia esql en una variable
    $sql = "SELECT * FROM contactos WHERE id = ?";
    //se prepara la sentencia sql
   if($stmt = $pdo -> prepare($sql)){
         
        // se entrega el id copmo parametro
        $param_id = trim($_GET["id"]);
 // Se ejecuta la sentencia para obtener los varoles, si el resultado es true, se contruye la tabla y se pintan los varores
         if($stmt ->execute([$param_id])){ 
             //si el resultado es exitoso se compreuba que si obtengamso registros
            if($stmt ->rowCount() == 1){
                //dado que se obendria solo un registro porque se busca por ID, no es necesario hacer un siclo, el fet devuelve un array asociativo
                $row = $stmt -> fetch();
                // se recuperan los valores en cada variable
                $nombres = $row["nombres"];
                $apellidos = $row["apellidos"];
                $telefonos = $row["telefono"];
                $ciudad = $row["ciudad"];
                $email = $row["email"];
                $pais = $row["pais"];
            } else{
                // si no se encuentra un registro se redirige a la vista de error
                header("location: error.php");
                exit();
            }  
        } else{
            echo "Lo siento! Se ha presentado un error.";
        }
    }
   // cerrrar la variable stmt
    unset($stmt);
    // cerrar la conexion a la base de datos
    unset($mysqli);
} else{
       // si no viene el id se redirige a la vista de error
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Contactos</title>

    <link href="../css/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="../css/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../css/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <link href="../css/morgate.css" rel="stylesheet">
    <script src="../js/contac.js"></script>
</head>


<body>

    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="../views/contacto.php">Formulario Contacto</a>
                </li>
            </ul>
        </div>
        <div class="card-body">


            <div class="mb-3">
                <label for="dnombre" class="form-label">Nombre</label>
                <p class="form-control" id="dnombre"><?php echo $row["nombres"]?></p>
            </div>

            <div class="mb-3 mt-3">
                <label for="dapellidos" class="form-label">Apellidos</label>
                <p class="form-control" id="dapellidos"><?php echo $row["apellidos"]?></p>
            </div>

            <div class="mb-3">
                <label for="dtelefono" class="form-label">Telefono</label>
                <p class="form-control" id="dtelefono" ><?php echo $row["telefono"]?></p>
            </div>

            <div class="mb-3">
                <label for="demail" class="form-label">Correo Electronico</label>
                <p class="form-control" id="demail" ><?php echo $row["email"]?></p>
            </div>

            <div class="mb-3">
                <label for="dpais" class="form-label">Pais</label>
                <p class="form-control" id="dpais" ><?php echo $row["pais"]?></p>
            </div>

            <div class="mb-3">
                <label for="dciudad" class="form-label">Ciudad</label>
                <p class="form-control" id="dciudad" ><?php echo $ciudad?></p>
            </div>

            <a href="../views/contacto.php" class="btn btn-success btn-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                  </svg>
            </a>



        </div>
    </div>


    

</body>



</html>