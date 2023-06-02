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
                <a href="indexPaciente.php" class="logo"> <img src="../../img/logo1.png"> <span>Dental Love</span></a>
    
                <nav class="nav">
                    <a href="indexPaciente.php">Principal</a>
                    <a href="perfil.php">Perfil</a>
                </nav>
    
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>
    <!-- header section ends -->

    
    <div class="container is-fluid">
        <div class="col-xs-12">
            <h1>Bienvenido <?php echo $_SESSION['usr']['nombre']; ?></h1>
            <br>
            <h1>Mis Citas</h1>
            <br>
            <button class = "btn btn-light" name = "enviar" id = "crear">Crear cita</button>
            <br>
            <br>
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th>Servicio</th>
                        <th>Médico</th>
                        <th>Sucursal</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Costo</th>
                        <th>Estatus</th>
                    </tr>
                </thead>
                <tbody>
    <?php
        $conn = new PDO("sqlsrv:Server=DESKTOP-HOTSFIC;Database=dental_love", "dent", "123456");              
        $SQL = "select 
                    paciente.NombrePac,
                    servicios.Nombre,
                    medico.NombreMed,
                    sucursal.Ubicacion,
                    citas.dia, 
                    citas.mes,
                    citas.anio, 
                    citas.Hora, 
                    servicios.Costo,
                    citas.estatus
                from citas inner join paciente on citas.ID_paciente = paciente.ID_paciente and citas.ID_paciente =" . $_SESSION['usr']['id'] ."
                        inner join servicios on citas.ID_servicio = servicios.ID_servicios
                        inner join medico on servicios.ID_medico = medico.ID_medico
                        inner join sucursal on medico.ID_sucursal = sucursal.ID_sucursal";
        $dato = $conn->prepare($SQL);
        $dato->setFetchMode(PDO::FETCH_ASSOC);
        $dato->execute();

        if(isset($dato)){
            while($row = $dato->fetch()){
        ?>
                    <tr>
                        <td><?php echo $row['Nombre']; ?></td>
                        <td><?php echo $row['NombreMed']; ?></td>
                        <td><?php echo $row['Ubicacion']; ?></td>
                        <td><?php echo $row['dia'] . "/" . $row['mes'] . "/" . $row["anio"]; ?></td>
                        <td><?php echo $row['Hora']; ?></td>
                        <td><?php echo $row['Costo']; ?></td>
                        <td><?php echo $row['estatus']; ?></td>
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
            <link rel="stylesheet" href="../css/citasStyle.css">

            <!-- custom js file link  -->
            <script defer src="../js/crear.js"></script>
</body>
</html>