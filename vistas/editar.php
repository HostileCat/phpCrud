<?php

require_once(__DIR__ . "/../Libs/database.php");
require_once(__DIR__ . "/../Libs/model.php");

include_once("../Clases/aprendiz.php");


$database = new Database;
$connection = $database->getConnection();
$objeto = new Aprendiz($connection);


$id = $_GET['id'];
if (isset($id)) {
    $usuario = $objeto-> getById($id);

?>
 
    <form action="../controllers/aprendiz.php" method="post">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $usuario['nombre']; ?>">
        </div>
        
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="<?php echo $usuario['apellido']; ?>">
        </div>
        
        <div>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" value="<?php echo $usuario['edad']; ?>">
        </div>
            
        <div>
            <label for="genero">Genero:</label>
            <input type="genero" id="genero" name="genero" value="<?php echo $usuario['genero']; ?>">
        </div>
        
        <div>
            <label for="carrera">Carrera:</label>
            <input type="carrera" id="carrera" name="carrera" value="<?php echo $usuario['carrera']; ?>">
        </div>

        <div>
            <label for="cuenta">Cuenta:</label>
            <input type="cuenta" id="cuenta" name="cuenta" value="<?php echo $usuario['cuenta']; ?>">
        </div>

        <div>
            <label for="promedio">Promedio:</label>
            <input type="promedio" id="promedio" name="promedio" value="<?php echo $usuario['promedio']; ?>">
        </div>
        
        <div>
            <input type="hidden" id="id" name="id" value="<?php echo $usuario['id']; ?>">
            <button type="submit">Actualizar</button>
        </div>
        

    </form>  
 
<?php   
}
?>



    
