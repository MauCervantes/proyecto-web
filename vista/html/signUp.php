<?php
    session_start();
    // Validar si ya hay una sesion iniciada
    if(isset($_SESSION['usr']['men'])){
        if($_SESSION['usr']['men'] == "incorrecto"){
            echo "<script>javascript:alert('Registro incorrecto');</script>";
            $_SESSION['usr']['men'] = "";
        }elseif($_SESSION['usr']['men'] == "mal"){
            echo "<script>javascript:alert('Registro ya existente');</script>";
            $_SESSION['usr']['men'] = "";
        }
    }else{
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

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

    <!-- signup section starts -->
    <section class="signUp">
        <div class="form-signup">
            <div class="imagen">
                    <img src="../../img/logo.png" alt="">
            </div>
            <h3 class="heading"> Registro </h3>

            <div class="content">
                <form action="../../controladores/registra.php" id = "form_signup" method = "POST">
                    <div class="user-details">

                        <div class="input-box">
                            <span class="details">User Name</span>
                            <input type="text" placeholder="Ingrese usuario" id="in-user-name" name = "in-user-name" class = "textIn" required autocomplete="off">
                        </div>

                        <div class="input-box">
                            <span class="details">Contraseña</span>
                            <input type="password" class="password" placeholder="Ingrese contraseña" id="in-pass" name = "in-pass" required autocomplete="off">
                            <i class="fa-solid fa-eye-slash showHidePw"></i>
                        </div>

                        <div class="input-box">
                            <span class="details">Nombre</span>
                            <input type="text" placeholder="Ingrese nombre" id="in-nombre" name = "in-nombre" class = "textIn" required autocomplete="off">
                        </div>

                        <div class="input-box">
                            <span class="details">Teléfono</span>
                            <input type="number" placeholder="Ingrese teléfono" id="in-tel" name = "in-tel" class = "textIn" required autocomplete="off">
                        </div>

                        <div class="input-box">
                            <span class="details">Correo</span>
                            <input type="email" placeholder="Ingrese correo" id="in-Corre" name = "in-Corre" class = "textIn" required autocomplete="off">
                        </div>

                        <div class="input-box">
                            <span class="details">Edad</span>
                            <select name="Edad" id="Edad" class = "Edad" required>
                                    <!-- se llena con js-->
                            </select>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" name = "create-user" value="Registrar">
                    </div>
                    <div class="button">
                        <input onclick="location.href='login.php'" type="submit" value="Cancelar">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- signup section ends -->

    <!-- custom js file link  -->
    <script src="../js/signUp.js"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/signUpStyle.css">
    
</body>
</html>