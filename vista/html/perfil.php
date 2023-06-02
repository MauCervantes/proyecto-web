<?php
	session_start();
    // Validar si ya hay una sesion iniciada
    if(!isset($_SESSION['usr'])){
        header("Location: login.php");
    }else{
        if(isset($_SESSION['usr']['men'])){
            if($_SESSION['usr']['men'] == "borraMal"){
                echo "<script>javascript:alert('No se borro correctamente');</script>";
			    $_SESSION['usr']['men'] = "";
            } 
        }
        $usr_sesion = $_SESSION['usr']['nombre'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>

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
                </nav>
    
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>
    <!-- header section ends -->

    <!-- profile section starts -->
    <section class="profile">
        <div class="form-profile">
            <div class="imagen">
                    <img src="../../img/user.png" alt="">
            </div>
            <h3 class="heading"> <?php echo $usr_sesion?> </h3>

            <div class="content">
                <form action="">
                    <div class="user-details">
                        
                        <div class="input-box">
                            <span class="details">User Name</span>
                            <input type="text" readonly id="per-user-name" name = "per-user-name" class = "textOut" value = <?php echo $_SESSION['usr']['usu']?>>
                        </div>

                        <div class="input-box">
                            <span class="details">Teléfono</span>
                            <input type="text" readonly id="per-tel" name = "per-tel" class = "textOut" value = <?php echo $_SESSION['usr']['tel']?>>
                        </div>

                        <div class="input-box">
                            <span class="details">Correo</span>
                            <input type="text" readonly id="per-correo" name = "per-correo" class = "textOut" value = <?php echo $_SESSION['usr']['corre']?>>
                        </div>

                        <div class="input-box">
                            <span class="details">Edad</span>
                            <input type="text" readonly id="per-edad" name = "per-edad" class = "textOut" value = <?php echo $_SESSION['usr']['edad']?>>
                        </div>
                    </div>
                    <div class="button">
                        <input name = "modificar-user" id = "modificar-user" value="Modificar">
                    </div>
                    <div class="button">
                        <input name = "cerrarSesion-user" id = "cerrarSesion-user" value="Cerrar Sesión">
                    </div>
                    <div class="button">
                        <input name = "eliminar" id = "eliminar" value="Eliminar Cuenta">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- profile section ends -->

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/perfilStyle.css">

    <!-- custom js file link  -->
    <script src="../js/perfil.js"></script>
    
</body>
</html>