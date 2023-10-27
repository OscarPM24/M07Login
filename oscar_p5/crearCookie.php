<?php

    setcookie("sel_idioma",$_GET['idioma']); // Crea la cookie con una duración de 1 dia
    header('Location: verCookie.php'); // Redirige al archivo que selecciona la view correspondiente
?>