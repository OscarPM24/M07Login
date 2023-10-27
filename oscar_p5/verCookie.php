<?php
    // Condicional que envia a la view correspondiente dependiendo del idioma seleccionado
    if ($_COOKIE['sel_idioma']) { 
        header('Location: views/index.php');
    } elseif ($_COOKIE['sel_idioma'] == 'es') {
        header('Location: views/login_es.html');
    } elseif ($_COOKIE['sel_idioma'] == 'en') {
        header('Location: views/login_en.html');
    } elseif ($_COOKIE['sel_idioma'] == 'ca') {
        header('Location: views/login_ca.html');
    }

?>