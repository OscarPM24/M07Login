<?php

    // Session start
    session_start();

    // Session unset
    session_unset();

    // Regenera la id
    session_regenerate_id();
    
    // Session destroy
    session_destroy();

    header("Location: views/login.html");

?>