<?php
    session_start();
    include("../persistencia/UsuarioDAO.php");
    //Recuperar datos del formulario
    $alias_eliminar = $_SESSION['usr']['usu'];

    $usuarioDao = new UsuarioDAO();
    $result = $usuarioDao->borrarUsu($alias_eliminar);

     // Validamos para hacer el siguiente salto de pagina
    if($result){
        $siguiente = '../vista/html/login.php';
        $_SESSION['usr']['men'] = "borrado";
    } else{
        $siguiente = '../vista/html/perfil.php';
        $_SESSION['usr']['men'] = "borraMal";
    }

    header("Location: {$siguiente}");
?>