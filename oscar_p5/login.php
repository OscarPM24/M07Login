<?php

    include ("db_connection.php");

    // Variables de login
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sentencia de SELECT
    $select_login = "SELECT * FROM user WHERE email = '$email' and password = '$password'";

    // Consulta a la BBDD (login)
    $q_select_login = mysqli_query($conn, $select_login);
    if ($q_select_login ->num_rows > 0) {
        // Guardamos el resultado del select en una variable como un array associativo
        $dades = $q_select_login->fetch_assoc();
    } else {
        if ($_COOKIE['sel_idioma'] == 'es') {
            include ("views/login_es.html");
            echo 'Login incorrecto';
        } elseif ($_COOKIE['sel_idioma'] == 'en') {
            include ("views/login_en.html");
            echo 'Incorrect login';
        } elseif ($_COOKIE['sel_idioma'] == 'ca') {
            include ("views/login_ca.html");
            echo 'Login incorrecte';
        }
    }

?>