<?php

    // Session start
    session_start();

    include("db_connection.php");

    // Variables del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (isset($email) && isset($password)) {

        // Sentencia de SELECT
        $select_login = "SELECT * FROM user WHERE email = '$email' and password = '$password'";

        // Consulta a la BBDD (login)
        $q_select_login = mysqli_query($conn, $select_login);
        if ($q_select_login ->num_rows > 0) {
        
            // Guardamos el resultado del select en una variable como un array associativo
            $dades = $q_select_login->fetch_assoc();

            // Guardamos las variables del usuario en la session
            $_SESSION['name'] = $dades['name'];
            $_SESSION['surname'] = $dades['surname'];
            $_SESSION['email'] = $dades['email'];
            $_SESSION['rol'] = $dades['rol'];
        } else {
            header("Location: login.html");
            echo 'Login incorrecte';
        }
    }
?>