<?php
    //Aqui genera la cita
    session_start();
    include("../persistencia/CitaDAO.php");
    include("../persistencia/ServicioDAO.php");

    //recuperar datos del forms de citas
    
    $anio = $_POST["dAño"];
    $mes = $_POST["dMes"];
    $dia = $_POST["dDia"];
    $hora = $_POST["dHora"];
    $s = $_POST["Servicios"];
    $i = 1;

    if($s == "--" || $hora == "--"){
        $_SESSION['usr']['men'] = "mal";
        $siguiente = "../vista/html/forms.php";
    }else{
        $cita = new CitaDAO();
        $idC = $cita->maxCita();
        $i = $idC + $i;
        $idServicio = new ServicioDAO();
        $idSer = $idServicio->idServicio($s);

        $result = $cita->registrarCita($i, $_SESSION['usr']['id'], $idSer, $hora, $anio, $mes, $dia, "pendiente");
        if($result){
            $siguiente = "../vista/html/menucitas.php"; //modificado 31/05/2023
            $_SESSION['usr']['men'] = "correcto";
        }else{
            $siguiente = "../vista/html/forms.php";
            $_SESSION['usr']['men'] = "mal";
        }

    }
    header("Location: {$siguiente}");
?>