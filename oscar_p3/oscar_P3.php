<?php
    $serverBD = "localhost"; // Variable de servidor de la BBDD
    $db_name = "Users"; // Nombre de la base de datos
    $db_user = "root";
    $db_pwd = "";

    // Variables de la tabla user
    $id = $_POST['id'];
    $rol = $_POST['rol'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $active = $_POST['active'];

    // Creamos la conexión a la BBDD y comprobamos que haya conectado correctamente
    $conn = mysqli_connect($serverBD, $db_user, $db_pwd, $db_name);
    if (mysqli_ping($conn)) {
        echo "Conectado a la base de datos correctamente \n";

        if(isset($id, $rol, $name, $surname, $password, $email, $active)) {
            echo "Insertando datos... \n";
            // Sentencia de INSERT
            $con_insert = "INSERT INTO user VALUES($id,'$rol','$name','$surname','$password','$email',$active)";

            //Consulta a la BBDD
            $q_insert = mysqli_query($conn, $con_insert);
            echo "Datos insertados correctamente! \n";
        }
        // Cerramos la conexión
        mysqli_close($conn);
    }
?>