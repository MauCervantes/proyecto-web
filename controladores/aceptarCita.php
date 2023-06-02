<?php
    include("../persistencia/citaDAO.php");
    session_start();

    $id= $_GET['id'];

    $cita = new CitaDAO();
    $m = "Aceptar";

    $result = $cita->anCita($id, $m);
    $siguiente = "../vista/html/vistaMedico.php";
    header("Location: {$siguiente}");
?>