<?php
	session_start();
//Si ya existe una sesion...

//Si creaste sesion mostrar mensaje de sesion creada correctamente
	if(isset($_SESSION['usr']['men'])){
		if($_SESSION['usr']['men'] == "correcto"){
			echo "<script>javascript:alert('Registro completado');</script>";
			$_SESSION['usr']['men'] = "";
		}elseif($_SESSION['usr']['men'] == "borrado"){
			echo "<script>javascript:alert('Eliminación completa');</script>";
			$_SESSION['usr']['men'] = "";
			//Se destruye la sesión (Se cierra)
			session_destroy();
			//Se limpia la variable
			$_SESSION = array();
		}
		elseif($_SESSION['usr']['men'] == "contraUsuMal"){
			echo "<script>javascript:alert('Usuario y/o contraseña incorrecto');</script>";
			$_SESSION['usr']['men'] = "";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

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
                <a href="../../index.php" class="logo"> <img src="../../img/logo1.png"> <span>Dental Love</span></a>
    
                <nav class="nav">
                    <a href="../../index.php">Principal</a>
                </nav>
    
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>
    <!-- header section ends -->

    <!-- login section starts -->
    <section class="login">
        <div class="form-login">
            <img src="../../img/logo.png" alt="">
            <h3 class="heading"> Login </h3>

            <form action="../../controladores/valida.php" method = "POST">

                <div class="input-field">
                    <input type="text" id = "usuarioI" name = "usuarioI" class = "textIn" placeholder = "Ingresa usuario" autocomplete="off" required = "true">
                    <i class="fa-solid fa-user icon"></i>
                </div>

                <div class="input-field">
                    <input type="password" class="password" id = "in-pass" name = "in-pass" required class = "textIn" placeholder = "Ingresa contraseña" autocomplete="off" required = "true">
                    <i class="fa-solid fa-lock icon"></i>
                    <i class="fa-solid fa-eye-slash showHidePw"></i>
                </div>

                <div class="input-field button">
                    <input type="submit" value="Ingresar">
                </div>
            </form>

            <div class="login-signup">
                <span class="text">No estás registrado?
                    <a href="signUp.php" class="text signup-text">Regístrate</a>
                </span>
            </div>
        </div>
    </section>
    <!-- login section ends -->

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/loginStyle.css">

    <!-- custom js file link  -->
    <script src="../js/login.js"></script>
    
</body>
</html>