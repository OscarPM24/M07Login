<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idioma</title>
</head>
<body>
<?php
    // Código PHP que envía a la view del login dependiendo del idioma seleccionado
    if (isset($_COOKIE['sel_idioma'])) {
        if ($_COOKIE['sel_idioma'] == 'es') {
            header('Location: login_es.html');
        } elseif ($_COOKIE['sel_idioma'] == 'en') {
            header('Location: login_en.html');
        } elseif ($_COOKIE['sel_idioma'] == 'ca') {
            header('Location: login_ca.html');
        }
    }
?>
    <table>
        <tr> 
            <td><a href="../crearCookie.php?idioma=es"><img src="../img/es.png" width="90" height="60" /></a><h1>ESPAÑOL</h1></td>
            <td><a href="../crearCookie.php?idioma=en"><img src="../img/en.png" width="90" height="60" /></a><h1>ENGLISH</h1></td>
            <td><a href="../crearCookie.php?idioma=ca"><img src="../img/ca.png" width="90" height="60" /></a><h1>CATALÀ</h1></td>
        </tr>
    </table>
</body>
</html>