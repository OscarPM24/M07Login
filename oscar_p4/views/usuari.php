<?php
    include("../login.php");

    if ($q_select_login ->num_rows > 0) {

        if ($dades["rol"] == 'alumnat') {
            echo "soc un alumne<br>";
            echo "nom: ".$dades["name"]."<br>";
            echo "cognom: ".$dades["surname"],"<br>";
            echo "email: ".$dades["email"]."<br>";
        } elseif ($dades["rol"] == "professorat") {
            echo "Hola ".$dades["name"].", ets professor!<br><br>";
            echo "La llista d'usuaris de la base de dades és:<br>";
            $users = consultaUsers();
            foreach ($users as $user) {
                echo "<br>nom i cognom: ".$user['name']." ".$user['surname'];
            }
        }
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