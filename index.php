<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="controllers/aprendiz.php" method="post">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido">
        </div>
        
        <div>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad">
        </div>
            
        <div>
            <label for="genero">Genero:</label>
            <input type="genero" id="genero" name="genero">
        </div>
        
        <div>
            <label for="carrera">Carrera:</label>
            <input type="carrera" id="carrera" name="carrera">
        </div>

        <div>
            <label for="cuenta">Cuenta:</label>
            <input type="cuenta" id="cuenta" name="cuenta">
        </div>

        <div>
            <label for="promedio">Promedio:</label>
            <input type="promedio" id="promedio" name="promedio">
        </div>
        
        <div>
            <button type="submit">Enviar</button>
        </div>
        

    </form> 

</body>
</html> -->

<?php 

$path = dirname($_SERVER['SCRIPT_NAME']);
$url = $_SERVER['REQUEST_URI'];

$b = substr($url, strlen($path));

echo $url, $path, $b;

?>


<?php
    // require_once("services/mail.php");

    // $email = "correo@gmail.com";
    // $message = "Texto para el mensaje";
    // $subject = "Asunto del mensaje";
    // $body = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. ";
    
    // $mail = new Mail($email, $message, $subject, $body);
    // $mail->send();
    
?>