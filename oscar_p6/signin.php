<?php

    include ("db_connection.php");

    // Variables de la tabla user
    $id = $_POST['id'];
    $rol = $_POST['rol'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $active = $_POST['active'];
    $active = ($active = 'on') ? true : false;


    if(isset($id, $rol, $name, $surname, $password, $email, $active)) {
        // Sentencia de INSERT
        $insert = "INSERT INTO user VALUES($id,'$rol','$name','$surname','$password','$email',$active)";

        //Consulta a la BBDD
        try {
            $q_insert = mysqli_query($conn, $insert); 
            echo 'La inserció es correcte. <a href="views/login.html">Iniciar sessió</a>';
        } catch (Exception $e) {
            include ("views/signin.html");
            echo 'Inserció incorrecta';
        }
    }

?>
