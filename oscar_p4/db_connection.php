<?php
    $serverBD = "localhost"; // Variable de servidor de la BBDD
    $db_name = "Users"; // Nombre de la base de datos
    $db_user = "root"; // Nombre de usuario
    $db_pwd = ""; // Contraseña

     // Creamos la conexión a la BBDD y comprobamos que haya conectado correctamente
    try {
        $conn = mysqli_connect($serverBD, $db_user, $db_pwd, $db_name);
    } catch (Exception $e) {
        echo "Error de connexió: ". $e->getMessage();
    }
?>