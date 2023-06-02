<?php
    session_start();
    include("../persistencia/UsuarioDAO.php");
    include("../modelo/Usuario.php");
    include("../persistencia/MedicoDAO.php");
    include("../modelo/Medico.php");

    //recuperar datos del forms
    $alias = $_POST["usuarioI"];
    $contra = $_POST["in-pass"];

    //validamos si es medico o paciente 
    //Ventaja. Los médicos son unicamente tres.
    if($alias == "doc_he" || $alias == "karlita" || $alias == "moni"){
        //objeto DAO
        $medicoDAO = new MedicoDAO();

        //metodo buscar
        $medico = $medicoDAO->buscar($alias, $contra);

        if($medico != null){
            $siguiente = '../vista/html/indexMedico.php'; //PrincipalMedico
            $_SESSION['usr']['id'] = $medico->getId();
            $_SESSION['usr']['idSuc'] = $medico->getIdSuc();
            $_SESSION['usr']['usu'] = $medico->getAlias();
            $_SESSION['usr']['contra'] = $medico->getContrasena();
            $_SESSION['usr']['nombre'] = $medico->getNombre();
            $_SESSION['usr']['tel'] = $medico->getTel();
            $_SESSION['usr']['corre'] = $medico->getCorreo();
        }else{
            $siguiente = "../vista/html/login.php";
        }
    }else{
        //Objeto DAO
        $usuarioDAO = new UsuarioDAO();

        //Método buscar con alias y contraseña
        $usuario = $usuarioDAO->buscar($alias, $contra);

        //validación
        if($usuario != null){
            $siguiente = '../vista/html/indexPaciente.php'; //PacientePrincipal
            $_SESSION['usr']['id'] = $usuario->getId();
            $_SESSION['usr']['usu'] = $usuario->getAlias();
            $_SESSION['usr']['contra'] = $usuario->getContrasena();
            $_SESSION['usr']['nombre'] = $usuario->getNombre();
            $_SESSION['usr']['tel'] = $usuario->getTel();
            $_SESSION['usr']['corre'] = $usuario->getCorreo();
            $_SESSION['usr']['edad'] = $usuario->getEdad();
        }else{
            $siguiente = "../vista/html/login.php"; //PaginaLogin
            $_SESSION['usr']['men'] = "contraUsuMal";
        }
    }

    //requiere_once();
    header("Location: {$siguiente}");
?>