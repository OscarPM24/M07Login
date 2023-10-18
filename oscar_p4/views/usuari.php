<?php
    include("../login.php");

    echo "hola";

    var_dump($dades);

    if ($dades["rol"] == 'alumnat') {
        echo "soc un alumne\n";
        echo "nom: ".$dades["name"]."\n";
        echo "cognom: ".$dades["surname"],"\n";
        echo "email: ".$dades["email"]."\n";
    } elseif ($dades["rol"] == "professorat") {
        echo "Hola ".$dades["name"].", ets professor!\n";
        echo "La llista d'usuaris de la base de dades és:";
    }
?>