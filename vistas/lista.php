<?php

require_once(__DIR__ . "/../Libs/database.php");
require_once(__DIR__ . "/../Libs/model.php");

include_once("../Clases/aprendiz.php");

$database = new Database;
$connection = $database->getConnection();
$objeto = new Aprendiz($connection);
$usuarios = $objeto-> getAll();

// echo "<pre>";
// print_r($usuarios);
// echo "</pre>";

?>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Genero</th>
            <th>Carrera</th>
            <th>Cuenta</th>
            <th>Promedio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php

        for ($i = 0; $i < count($usuarios); $i++){
    ?>      
        



        
        <tr>
            <td><?php echo $usuarios[$i]['id']; ?></td>
            <td><?php echo $usuarios[$i]['nombre']; ?></td>
            <td><?php echo $usuarios[$i]['apellido']; ?></td>
            <td><?php echo $usuarios[$i]['edad']; ?></td>
            <td><?php echo $usuarios[$i]['genero']; ?></td>
            <td><?php echo $usuarios[$i]['carrera']; ?></td>
            <td><?php echo $usuarios[$i]['cuenta']; ?></td>
            <td><?php echo $usuarios[$i]['promedio']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $usuarios[$i]['id']; ?>">Editar</a>
                <a href="../controllers/aprendiz.php?id=<?php echo $usuarios[$i]['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php
        }
        ?>

    </tbody>
</table>