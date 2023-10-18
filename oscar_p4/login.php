<?php

    include ("../db_connection.php");

    // Variables de login
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(isset($email, $password)) {
        // Sentencia de SELECT
        $select = "SELECT * FROM user WHERE ID=1";

        //Consulta a la BBDD
        try {
            $q_select = mysqli_query($conn, $select);
            $dades = $q_select->fetch_assoc();
            header('Location: ../views/usuari.php');
        } catch (Exception $e) {
            //header('Location: ../views/login.html');
            echo '<p>Login incorrecte</p>';
        }
    }
?>