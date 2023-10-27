<?php

    setcookie("sel_idioma","", time() -1); // Borra la cookie sel_idioma
    header("Location: views/index.php"); // Redirige a la página de selección de idioma

?>