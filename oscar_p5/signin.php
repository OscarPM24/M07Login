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
            if ($_COOKIE['sel_idioma'] == 'es') {
                echo 'La inserción es correcta. <a href="views/login_es.html">Iniciar sesión</a>';
            } elseif ($_COOKIE['sel_idioma'] == 'en') {
                echo 'Correct insertion. <a href="views/login_en.html">Log in</a>';
            } elseif ($_COOKIE['sel_idioma'] == 'ca') {
                echo 'La inserció es correcte. <a href="views/login_ca.html">Iniciar sessió</a>';
            }
           
        } catch (Exception $e) {
            if ($_COOKIE['sel_idioma'] == 'es') {
                include ("views/signin_es.html");
                echo 'Inserción incorrecta';
            } elseif ($_COOKIE['sel_idioma'] == 'en') {
                include ("views/signin_en.html");
                echo 'Incorrect insertion';
            } elseif ($_COOKIE['sel_idioma'] == 'ca') {
                include ("views/signin_ca.html");
                echo 'Inserció incorrecta';
            }
        }
    }

?>
