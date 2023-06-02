<?php
    session_start();
    include("../persistencia/UsuarioDAO.php");
    include("../persistencia/MedicoDAO.php");
    include("../modelo/Usuario.php");
    include("../modelo/Medico.php");

    $alias_modificar = $_SESSION['usr']['usu'];

//--------------------------------------------------------------------------------------------------------------//
    //Lineas agregadas el 31 de mayo del 2023
    //modificar medico
    if ($alias_modificar == "moni" || $alias_modificar == "doc_he" ||$alias_modificar == "karlita" ){
        $medicoDao = new MedicoDAO();

        //recuperamos datos del forms
        $usuario = $_POST["per-alias"];
        $nombre = $_POST["per-nombre"];
        $tel = $_POST["per-tel"];
        $correo = $_POST["per-correo"];
        $mediconew = $medicoDao->modificarMed($alias_modificar, $nombre, $tel, $correo);

        if($mediconew != null){
            $siguiente = '../vista/html/perfilMdico.php'; //medico
            $_SESSION['usr']['id'] = $mediconew->getId();
            $_SESSION['usr']['idSuc'] = $mediconew->getIdSuc();
            $_SESSION['usr']['usu'] = $mediconew->getAlias();
            $_SESSION['usr']['contra'] = $mediconew->getContrasena();
            $_SESSION['usr']['nombre'] = $mediconew->getNombre();
            $_SESSION['usr']['tel'] = $mediconew->getTel();
            $_SESSION['usr']['corre'] = $mediconew->getCorreo();
        }else{
            $siguiente = "../vista/html/login.php";
            $_SESSION['usr']['men'] = "contraUsuMal";
        }
    }
//------------------------------------------------------------------------------------------------------------------//
//Solo se agrega el apartado de else (cuando no es sesion tipo medico)
    else{
        $usuarioDao = new UsuarioDAO();

        //recuperar datos del forms modificar.php
        $usuario = $_POST["per-alias"];
        $nombre = $_POST["per-nombre"];
        $tel = $_POST["per-tel"];
        $correo = $_POST["per-correo"];
        $edad = $_POST["per-edad"];
        $usuarionew = $usuarioDao->modificarUsu($alias_modificar, $usuario, $nombre, $tel, $correo, $edad);
        
        if($usuarionew != null){
            $siguiente = '../vista/html/perfil.php'; //principal usuario
            $_SESSION['usr']['id'] = $usuarionew->getId();
            $_SESSION['usr']['usu'] = $usuarionew->getAlias();
            $_SESSION['usr']['contra'] = $usuarionew->getContrasena();
            $_SESSION['usr']['nombre'] = $usuarionew->getNombre();
            $_SESSION['usr']['tel'] = $usuarionew->getTel();
            $_SESSION['usr']['corre'] = $usuarionew->getCorreo();
            $_SESSION['usr']['edad'] = $usuarionew->getEdad();
        }else{
            $siguiente = "../vista/html/login.php";
            $_SESSION['usr']['men'] = "contraUsuMal";
        }
    }
    

    header("Location: {$siguiente}");
?>