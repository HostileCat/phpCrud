<?php
    


    require_once(__DIR__ . "/../Libs/database.php");
    require_once(__DIR__ . "/../Libs/model.php");

    include_once("../Clases/aprendiz.php");
    
    $database = new Database;
    $connection = $database->getConnection();
    $aprendiz = new Aprendiz($connection);

    if (isset($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $genero = $_POST["genero"];
        $carrera = $_POST["carrera"];
        $cuenta = $_POST["cuenta"];
        $promedio = $_POST["promedio"];
        
        $id = $_POST["id"];


        if (isset($_POST["id"])) {
            $aprendiz->update($id, [
                "nombre"    => $nombre,
                "apellido"  => $apellido,
                "edad"      => $edad,
                "genero"    => $genero,
                "carrera"   => $carrera,
                "cuenta"    => $cuenta,
                "promedio"  => $promedio
            ]);
        }else{
            $aprendiz->store([
                "nombre"    => $nombre,
                "apellido"  => $apellido,
                "edad"      => $edad,
                "genero"    => $genero,
                "carrera"   => $carrera,
                "cuenta"    => $cuenta,
                "promedio"  => $promedio
            ]);
        }

    }

    if (isset($_GET["id"])) {
        
        $id = $_GET["id"];

        $aprendiz->delete($id);
    }
?>