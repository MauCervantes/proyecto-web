<?php
    session_start();
    if(!isset($_SESSION['usr'])){
        header("Location: login.php");
    }else{        
        $usr_sesion = $_SESSION['usr']['nombre'];
        if(isset($_SESSION['usr']['men'])){
            if($_SESSION['usr']['men'] == "mal"){
                echo "<script>javascript:alert('No se completo el registro. Intentelo nuevamente');</script>";
                $_SESSION['usr']['men'] = "";
            }elseif($_SESSION['usr']['men'] == "correcto"){
                echo "<script>javascript:alert('Registro completo');</script>";
                $_SESSION['usr']['men'] = "";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>  <!--Llamada a boostrap-->
    <title>Lista de citas</title>

    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
</head>

<body>
    <!-- header section starts -->
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="indexMedico.php" class="logo"> <img src="../../img/logo1.png"> <span>Dental Love</span></a>
    
                <nav class="nav">
                    <a href="indexMedico.php">Principal</a>
                    <a href="perfilMdico.php">Perfil</a>
                </nav>
    
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>
    <!-- header section ends -->

    <br>
    <div class="container is-fluid">
        <div class="col-xs-12">
            <h1>Bienvenido <?php echo $_SESSION['usr']['nombre']; ?></h1>
            <br>
            <h1>Mis Citas</h1>
            <br>
            <br>
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th>Paciente</th>
                        <th>Edad</th>
                        <th>Telefono</th>
                        <th>Servicio</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Costo</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
    <?php
        $conn = new PDO("sqlsrv:Server=DESKTOP-HOTSFIC;Database=dental_love", "dent", "123456");    
        $SQL = "select 
                    citas.ID_citas,
                    paciente.NombrePac,
                    paciente.Edad,
                    paciente.Telefono,
                    servicios.Nombre,
                    citas.dia, 
                    citas.mes,
                    citas.anio, 
                    citas.Hora, 
                    servicios.Costo,
                    citas.estatus
                from citas inner join paciente on citas.ID_paciente = paciente.ID_paciente 
                           inner join servicios on citas.ID_servicio = servicios.ID_servicios
                           inner join medico on servicios.ID_medico = medico.ID_medico and servicios.ID_medico = " . $_SESSION['usr']['id'] ."
                           inner join sucursal on medico.ID_sucursal = sucursal.ID_sucursal";
        $dato = $conn->prepare($SQL);
        $dato->setFetchMode(PDO::FETCH_ASSOC);
        $dato->execute();

        if(isset($dato)){
            while($row = $dato->fetch()){
        ?>
                    <tr>
                        <td><?php echo $row['NombrePac']; ?></td>
                        <td><?php echo $row['Edad']; ?></td>
                        <td><?php echo $row['Telefono']; ?></td>
                        <td><?php echo $row['Nombre']; ?></td>
                        <td><?php echo $row['dia'] . "/" . $row['mes'] . "/" . $row["anio"]; ?></td>
                        <td><?php echo $row['Hora']; ?></td>
                        <td><?php echo $row['Costo']; ?></td>
                        <td><?php echo $row['estatus']; ?></td>
                        <?php
                            if($row['estatus'] == "pendiente"){
                        ?>
                            <td>
                                <a class="btn btn-success" href="../../controladores/aceptarCita.php?id=<?php echo $row['ID_citas']?> ">
                                Aceptar </a>
                                <a class="btn btn-danger"  href="../../controladores/cancelarCita.php?id=<?php echo $row['ID_citas']?>">
                                Rechazar</a>
                            </td>
                        <?php
                            }elseif($row['estatus'] == "Rechazada"){
                        ?>
                            <td>
                                <a class="btn btn-success" href="../../controladores/aceptarCita.php?id=<?php echo $row['ID_citas']?> ">
                                Aceptar </a>
                            </td>
                        <?php
                            }else{
                        ?>
                            <td>
                                <a class="btn btn-danger"  href="../../controladores/cancelarCita.php?id=<?php echo $row['ID_citas']?>">
                                Rechazar</a>
                            </td>
                        <?php
                            }
                        ?>
                    </tr>
                    
    <?php
            }
            }else{
    ?>
                    <tr class="text-center">
                        <td colspan="16">No existen registros</td>
                    </tr>
    <?php
            }
    ?>
            </table>

            <!-- custom css file link  -->
            <link rel="stylesheet" href="../css/agendaStyle.css">

            <!-- custom js file link  -->
            <script defer src="../js/crear.js"></script>
</body>
</html>