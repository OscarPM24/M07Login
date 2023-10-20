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
        include ("views/login.html");
        echo 'Login incorrecte';
    }

?>