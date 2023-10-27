<?php
    include("../login.php");

    if ($q_select_login ->num_rows > 0) {

        if ($dades["rol"] == 'alumnat') {
            echo "Soy un alumno<br>";
            echo "nombre: ".$dades["name"]."<br>";
            echo "apellido: ".$dades["surname"],"<br>";
            echo "email: ".$dades["email"]."<br>";
        } elseif ($dades["rol"] == "professorat") {
            echo "Hola ".$dades["name"].", eres profesor!<br><br>";
            echo "La lista de usuarios de la base de datos es:<br>";
            $users = consultaUsers();
            foreach ($users as $user) {
                echo "<br>nombre y apellido: ".$user['name']." ".$user['surname'];
            }
        }
        echo "<br><a href='../deleteCookie.php'>Borrar cookie</a>";
        echo "<br><a href='index.php'>Volver a selección de idioma</a>";
    }

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