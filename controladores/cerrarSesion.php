<?php
    session_start();
    //Se destruye la sesión (Se cierra)
    session_destroy();
    //Se limpia la variable
    $_SESSION = array();
    //Se redirige al inicio de sesión
    header('Location: ../vista/html/login.php');
?>