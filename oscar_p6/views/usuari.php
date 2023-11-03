<?php

    include("../authentication.php");
    echo "<h1>Sessió iniciada</h1>";

    if ($_SESSION["rol"] == 'alumnat') { // Mostramos datos del alumno
        echo "<h3>Benvingut alumne ".$_SESSION["name"]." ".$_SESSION["surname"]."</h3><br>";
        echo "nom: ".$_SESSION["name"]."<br>";
        echo "cognom: ".$_SESSION["surname"],"<br>";
        echo "email: ".$_SESSION["email"]."<br>";
    } elseif ($_SESSION["rol"] == "professorat") { // Mostramos datos del profesor
        echo "<h3>Benvingut professor ".$_SESSION["name"]." ".$_SESSION["surname"]."<br>";
        echo "La llista d'usuaris de la base de dades és:</h3>";
        
        $users = consultaUsers(); // Llamada a la función que consulta todos los usuarios
        foreach ($users as $user) {
            echo "<br>nom i cognom: ".$user['name']." ".$user['surname'];
        }
    }

    // Enlace de cierre de sesión
    echo "<h3><br><a href=../delete_session.php>Cerrar sesión</a></h3>";

    
    // Función que hace la consulta de todos los usuarios a la BBDD
    function consultaUsers() {
        include("../db_connection.php");

        $select_users = "SELECT * FROM user";
        
        // Consulta a la BBDD (users)
        $q_select_users = mysqli_query($conn, $select_users);
        if ($q_select_users -> num_rows > 0) {
            // Guardamos los resultados del select en una variable como un array associativo
            $lista_users = $q_select_users -> fetch_all(MYSQLI_ASSOC);
            return $lista_users;
        }
    }
?>