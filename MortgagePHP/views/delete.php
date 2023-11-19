<?php



if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["id"])) {
    $id = $_POST["id"];
    delete($id);
}



function delete($id)
{


    //Estamos usando la variable session para almacenar los valores que recupera es necesario limpiarla antes de ir a busar datos.
    // desde este archivo se va a acceder a base de datos es necesario incluir la conenfiguracion y conexion a base de datos
    require_once "configuracion.php";
    // Se contruye la sentencia esql en una variable
    $sql = "DELETE FROM contactos WHERE id=:idpar";
    //se prepara la sentencia sql
    if ($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam("idpar",  $id);
        // Se ejecuta la sentencia para obtener los varoles, si el resultado es true, se contruye la tabla y se pintan los varores
        if ($stmt->execute([$id])) {
            header("location: contacto.php");
            // cerrrar la variable stmt
            exit();
        } else {
            // si no viene el id se redirige a la vista de error
            header("location: error.php");
            exit();
        }
    } else {
        echo "Lo siento! Se ha presentado un error.";
    }

    // cerrar la conexion a la base de datos
    unset($pdo);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de confirmacion</title>

    <link href="../css/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../css/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../css/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <style>
        .wrapper {

            width: 600px;
            margin: 0 auto;

        }
    </style>
</head>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <h2 class="mt-5 mb-3">Eliminar cliente</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>" />
                            <p>Desea eliminar el cliente?</p>
                            <p>
                                <input type="submit" value="SI" class="btn btn-danger">
                                <a href="../views/contacto.php" class="btb btn-secondary">NO</a>
                            </p>
                        </div>

                </div>
            </div>
        </div>
    </div>
    </form>
</body>

</html>