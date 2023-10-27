<?php
    include("../login.php");

    if ($q_select_login ->num_rows > 0) {

        if ($dades["rol"] == 'alumnat') {
            echo "I'm a student<br>";
            echo "name: ".$dades["name"]."<br>";
            echo "surname: ".$dades["surname"],"<br>";
            echo "email: ".$dades["email"]."<br>";
        } elseif ($dades["rol"] == "professorat") {
            echo "Hi ".$dades["name"].", you are a teacher!<br><br>";
            echo "The database list of users is:<br>";
            $users = consultaUsers();
            foreach ($users as $user) {
                echo "<br>name and surname: ".$user['name']." ".$user['surname'];
            }
        }
        echo "<br><a href='../deleteCookie.php'>Delete cookie</a>";
        echo "<br><a href='index.php'>Back to language selection</a>";
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