<?php 

require_once "configuracion.php";


$sql = "SELECT * FROM contactos";

if($resultado = $pdo -> query($sql)){

    if($resultado->rowCount()){

    

    echo '<table class ="table table-striped">';

    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Nombre</th>";
    echo"<th>Apellidos</th>";
    echo "<th>Telefono</th>";
    echo "<th>Email</th>";
    echo"<th>Ver</th>";
    echo"<th>Actualizar</th>";
    echo"<th>Eliminar</th>";


    echo "</tr>";


    



    while ($row = $resultado->fetch()) {


        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["nombres"]."</td>";
        echo "<td>".$row["apellidos"]."</td>";
        echo "<td>".$row["telefono"]."</td>";
        echo "<td>".$row["email"]."</td>";
        

        echo "<td>";
        echo "<a href=../views/detalles.php?id=".$row["id"]. ">Ver</a>";
        echo"</td>";
        echo "<td>";
        echo "<a href=../views/create.php?id=".$row["id"].">Editar</a>";
        echo"</td>";
        echo "<td>";
        echo "<a href=../views/delete.php?id=".$row["id"].">Eliminar</a>";
        echo"</td>";
        // echo "<td>";
        // echo '<a href="javascript:editarContacto(' + personaObjeto.id + ');">Editar</a>';
        // echo "</td>";
        // echo "<td>";
        // echo '<a href="javascript:eliminarContacto(' + personaObjeto.id + ');">Eliminar</a>';
        echo "</td>";


        echo"</tr>";


    

}




    echo"</table>";
    unset($resultado);
}else{


    echo '<div class="alert alert-danger"><em>No tuvimos resultados</em></div>'; 
}



}else{

    echo "Algo a salido mal";
}

    



    



?>