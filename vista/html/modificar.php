<?php
	session_start();
    $usr_sesion = $_SESSION['usr']['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Perfil Paciente</title>

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

    <!-- profile section starts -->
    <section class="modificar">
        <div class="form-modificar">
            <h2 class="heading"> Modifique los datos necesarios </h2>

            <div class="content">
                <form action="../../controladores/modificarUsu.php" id = "form_modi" method = "POST">
                    <div class="user-details">
                        
                        <div class="input-box">
                            <span class="details">Nombre de usuario</span>
                            <input type="text" id="per-nombre" name = "per-nombre" class = "textIn" value = "<?php echo $usr_sesion;?>">
                        </div>
                        
                        <div class="input-box">
                            <span class="details">User Name</span>
                            <input type="text" id="per-alias" name = "per-alias" class = "textIn" value = <?php echo $_SESSION['usr']['usu']?>>
                        </div>

                        <div class="input-box">
                            <span class="details">Teléfono</span>
                            <input type="text" id="per-tel" name = "per-tel" class = "textIn" value = <?php echo $_SESSION['usr']['tel']?>>
                        </div>

                        <div class="input-box">
                            <span class="details">Correo</span>
                            <input type="text" id="per-correo" name = "per-correo" class = "textIn" value = <?php echo $_SESSION['usr']['corre']?>>
                        </div>

                        <div class="input-box">
                            <span class="details">Edad</span>
                            <input type="text" id="per-edad" name = "per-edad" class = "textIn" value = <?php echo $_SESSION['usr']['edad']?>>
                        </div>
                    </div>
                    <div class="button">
                        <input name = "aceptar" id = "aceptar" type = "submit" value="Aceptar">
                    </div>
                    <div class="button">
                        <input name = "cancelar" id = "cancelar" value="Cancelar">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- profile section ends -->

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/modificarStyle.css">

    <!-- custom js file link  -->
    <script src="../js/modificarPac.js"></script>
    
</body>
</html>