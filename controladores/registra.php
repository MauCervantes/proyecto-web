<?php
    session_start();
    include("../persistencia/UsuarioDAO.php");
    include("../modelo/Usuario.php");
    $_SESSION['usr']['men'] = "correcto";

    //recuperar datos del forms SignUp.php
    $usuario = $_POST["in-user-name"];
    $contra = $_POST["in-pass"];
    $nombre = $_POST["in-nombre"];
    $tel = $_POST["in-tel"];
    $correo= $_POST["in-Corre"];
    $edad = $_POST["Edad"];
    $i = 1;


    //valide que el registro no exista
    if($usuario != "doc_he" and $usuario != "karlita" and $usuario != "moni"){

        //Construimos objeto DAO
        $usuarioDAO = new UsuarioDAO();
        $usuarioO = $usuarioDAO->buscarNombre($usuario);

        if($usuarioO->getID() == null){
            //Obtenemos el valor maximo en id
            $val = $usuarioDAO->MaxValue();
            $i  = $val + $i;

            //Realizamos la consulta insert
            $result = $usuarioDAO->registraUsu($i, $usuario, $contra, $nombre, $tel, $correo, $edad);

            if($result){
                $siguiente = '../vista/html/login.php';
                $_SESSION['usr']['men'] = "correcto";
            }else{
                $siguiente="../vista/html/signUp.php";
                $_SESSION['usr']['men'] = "incorrecto";
            }
        }else{
            $siguiente="../vista/html/signUp.php";
            $_SESSION['usr']['men'] = "mal";
        }
        
    }else{
        $siguiente="../vista/html/signUp.php";
        $_SESSION['usr']['men'] = "mal";
    }
    header("Location: {$siguiente}");
?>