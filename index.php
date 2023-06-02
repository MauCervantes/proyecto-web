<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dental Love</title>

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
                <a href="#principal" class="logo"> <img src="img/logo1.png"> <span>Dental Love</span></a>

                <nav class="nav">
                    <a href="#principal">Principal</a>
                    <a href="#servicios">Servicios</a>
                    <a href="#sobre">Sobre Nosotros</a>
                    <a href="#doctores">Doctores</a>
                    <a href="vista/html/perfil.php">Perfil</a>
                </nav>

                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>
    <!-- header section ends -->



    <!-- home section starts -->
    <section class="principal" id="principal">
        <div class="image">
            <img src="img/home-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>Déjanos alegrar tu sonrisa</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore 
                magna aliqua.</p>
            <a href="#footer" class="btn"> Contáctanos <span class="fas fa-chevron-right"></span></a>
        </div>
    </section>
    <!-- home section ends -->



    <!-- icons section starts -->
    <section class="icons-container">
        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>Dentistas</h3>
            <p>Con diferentes especialidades</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>+500</h3>
            <p>Pacientes satisfechos</p>
        </div>

        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>3</h3>
            <p>Clínicas disponibles</p>
        </div>
    </section>
    <!-- icons section ends -->



    <!-- services section starts -->
    <section class="servicios" id="servicios">
        <h1 class="heading"> nuestros <span>servicios</span></h1>
        <div class="box-container">
            <div class="box" data-name="s-1">
                <i class="fas fa-teeth-open"></i>
                <h3>Puente Dental</h3>
                <p>Prótesis dental que reemplaza uno o varios dientes faltantes.</p>
                <a data-name="s-1" class="btn">Leer más <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box" data-name="s-2">
                <i class='fas fa-tooth'></i>
                <h3>Ortodoncia</h3>
                <p>Se encarga de los problemas de los dientes y la mandíbula.</p>
                <a data-name="s-2" class="btn">Leer más <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box" data-name="s-3">
                <i class="fas fa-teeth"></i>
                <h3>Blanqueamiento Dental</h3>
                <p>Tratamiento de estética dental que se aplica a los dientes oscurecidos..</p>
                <a data-name="s-3" class="btn">Leer más <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box" data-name="s-4">
                <i class='fas fa-tooth'></i>
                <h3>Extracción de Dientes</h3>
                <p>Procedimiento que realiza el odontólogo para extraer un diente de la encía.</p>
                <a data-name="s-4" class="btn">Leer más <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box" data-name="s-5">
                <i class="fas fa-teeth-open"></i>
                <h3>Limpieza Dental</h3>
                <p>Retirar el sarro acumulado de los dientes para evitar enfermedades que puedan dañarlos..</p>
                <a data-name="s-5" class="btn">Leer más <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box" data-name="s-6">
                <i class="fas fa-syringe"></i>
                <h3>Procedimientos de Obturación</h3>
                <p>Restauración de una pieza dental que ha sido dañado por caries.</p>
                <a data-name="s-6" class="btn">Leer más <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box" data-name="s-7">
                <i class="fas fa-file-medical"></i>
                <h3>Examen Bucodental Inicial</h3>
                <p>Revisión de los dientes y las encías.</p>
                <a data-name="s-7" class="btn">Leer más <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box" data-name="s-8">
                <i class="fas fa-teeth"></i>
                <h3>Carillas Dentales</h3>
                <p>Aplicación de una pequeña y fina lámina de porcelana.</p>
                <a data-name="s-8" class="btn">Leer más <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box" data-name="s-9">
                <i class="fas fa-file-medical"></i>
                <h3>Examen de Rutina</h3>
                <p>Higiene oral completa, valoración clínica de todos los dientes.</p>
                <a data-name="s-9" class="btn">Leer más <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>


        <div class="services-preview">
            <div class="preview" data-target="s-1">
                <i class="fas fa-times"></i>
                <i class="fas fa-teeth-open"></i>
                <h3>Puente Dental</h3>
                <p>Un puente dental es una prótesis dental 
                    que reemplaza uno o varios dientes que 
                    faltan. Hace de «puente» entre dos o 
                    más piezas dentales, que pueden ser 
                    naturales o implantes dentales, y los 
                    huecos que han quedado tras la pérdida 
                    del diente original.</p>
            </div>
    
            <div class="preview" data-target="s-2">
                <i class="fas fa-times"></i>
                <i class='fas fa-tooth'></i>
                <h3>Ortodoncia</h3>
                <p>La ortodoncia es la rama de la odontología 
                    que se encarga de los problemas de los 
                    dientes y la mandíbula. La atención dental 
                    con ortodoncia incluye el uso de dispositivos, 
                    tales como los aparatos (frenos), para: 
                    Enderezar los dientes. Corregir problemas con 
                    la mordida.</p>
            </div>
    
            <div class="preview" data-target="s-3">
                <i class="fas fa-times"></i>
                <i class="fas fa-teeth"></i>
                <h3>Blanqueamiento Dental</h3>
                <p>El blanqueamiento dental es un tratamiento de 
                    estética dental que se aplica a los dientes 
                    oscurecidos, por la pérdida de la capa de 
                    esmalte. Consiste en eliminar las manchas 
                    intrínsecas y extrínsecas en la superficie 
                    dentaria.</p>
            </div>
    
            <div class="preview" data-target="s-4">
                <i class="fas fa-times"></i>
                <i class='fas fa-tooth'></i>
                 <h3>Extracción de Dientes</h3>
                 <p>La extracción dental es el procedimiento que 
                     realiza el odontólogo para extraer un diente 
                    de la encía. Este procedimiento se lleva a 
                    cabo cuando un diente no se puede recuperar, 
                    teniendo en cuenta la situación la cavidad 
                    bucal de cada persona.</p>
            </div>
    
            <div class="preview" data-target="s-5">
                <i class="fas fa-times"></i>
                <i class="fas fa-teeth-open"></i>
                <h3>Limpieza Dental</h3>
                <p>La limpieza dental es que se retire el sarro 
                    acumulado de tus dientes para evitar 
                    enfermedades que puedan dañarlos a largo plazo, 
                    ésta se realiza en una clínica dental y dura 
                    aproximadamente 45 minutos.</p>
            </div>
    
            <div class="preview" data-target="s-6">
                <i class="fas fa-times"></i>
                <i class="fas fa-syringe"></i>
                <h3>Obturación Dental</h3>
                <p>Una obturación dental es una restauración de una 
                    pieza dental que ha sido dañado por caries, lo 
                    que comúnmente se conoce como «empastar», 
                    consiste en limpiar la cavidad dental resultante 
                    de una caries para luego rellenarla con algún 
                    material.</p>
            </div>
    
            <div class="preview" data-target="s-7">
                <i class="fas fa-times"></i>
                <i class="fas fa-file-medical"></i>
                <h3>Examen Bucodental</h3>
                <p>Un examen dental es una revisión de los dientes y
                     las encías. La mayoría de los niños y los adultos
                      se deben hacer un examen dental cada seis meses. 
                      Estos exámenes son importantes para la salud bucal.</p>
            </div>
    
            <div class="preview" data-target="s-8">
                <i class="fas fa-times"></i>
                <i class="fas fa-teeth"></i>
                <h3>Carillas Dentales</h3>
                <p>La carilla dental es un pequeña y fina lámina de 
                    porcelana generalmente, aunque también puede ser 
                    de otros materiales como el composite, que se 
                    adhiere a la parte frontal del diente para enmascarar 
                    o tapar problemas.</p>
            </div>
    
            <div class="preview" data-target="s-9">
                <i class="fas fa-times"></i>
                <i class="fas fa-file-medical"></i>
                <h3>Examen de Rutina</h3>
                <p>Un examen clínico dental se realiza con el fin de 
                    revisar el estado de salud de tus dientes y encías, 
                    es muy importante realizarlo cada 4-6 meses según el 
                    caso, con el fin de prevenir o sanar a tiempo problemas 
                    dentales. En este examen se debe hacer una higiene oral 
                    completa, valoración clínica de todos tus dientes y 
                    revisión de estudios radiográficos en caso de 
                    necesitarlo.</p>
            </div>
        </div>
    </section>
    <!-- services section ends -->



    <!-- about section starts -->
    <section class="sobre" id="sobre">
        <h1 class="heading"><span>sobre</span> nosotros </h1>
        <div class="row">
            <div class="image">
                <img src="img/logotipo.png" alt="">
            </div>

            <div class="content">
                <h3>Nosotros amamos tu sonrisa</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Ad autem qui iste inventore quasi expedita aliquam deleniti 
                    maiores officiis incidunt adipisci quia numquam ullam obcaecati 
                    amet, nulla quam deserunt?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Deserunt laborum, quasi laudantium cupiditate debitis 
                    obcaecati laboriosam illo praesentium harum at?</p>
            </div>
        </div>
    </section>
    <!-- about section ends -->



    <!-- doctors section starts -->
    <section class="doctores" id="doctores">
        <h1 class="heading"> nuestros <span>doctores</span></h1>
        <div class="box-container">

            <div class="box">
                <img src="img/perfil-mujer.jpg" alt="">
                <h3>DMD. Karla María González Reveles</h3>
                <span>Ortodoncista</span>
                <div class="share">
                    <a href="https://es-la.facebook.com/" class="fab fa-facebook-f"></a>
                    <a href="https://twitter.com/?lang=es" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                    <a href="https://mx.linkedin.com/" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="img/perfil-hombre.jpg" alt="">
                <h3>DMD. Helio Rafael Navejas García</h3>
                <span>Médico General</span>
                <div class="share">
                    <a href="https://es-la.facebook.com/" class="fab fa-facebook-f"></a>
                    <a href="https://twitter.com/?lang=es" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                    <a href="https://mx.linkedin.com/" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="img/perfil-mujer.jpg" alt="">
                <h3>DDS. Mónica Rincón Gallardo Nava</h3>
                <span>Maxilofacial</span>
                <div class="share">
                    <a href="https://es-la.facebook.com/" class="fab fa-facebook-f"></a>
                    <a href="https://twitter.com/?lang=es" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                    <a href="https://mx.linkedin.com/" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- doctors section ends -->


    <!-- footer section starts -->
    <section class="footer" id="footer">
        <div class="box-container">
            <div class="box">
                <h3>Links rápidos</h3>
                <a href="#principal"><i class="fas fa-chevron-right"></i> Principal </a>
                <a href="#servicios"><i class="fas fa-chevron-right"></i> Servicios </a>
                <a href="#sobre"><i class="fas fa-chevron-right"></i> Sobre Nosotros </a>
                <a href="#doctores"><i class="fas fa-chevron-right"></i> Doctores </a>
                <a href="vista/html/perfil.php"><i class="fas fa-chevron-right"></i> Perfil </a>
            </div>

            <div class="box">
                <h3>Nuestros servicios</h3>
                <a href="#servicios"><i class="fas fa-chevron-right"></i> Puente Dental </a>
                <a href="#servicios"><i class="fas fa-chevron-right"></i> Orotodoncia </a>
                <a href="#servicios"><i class="fas fa-chevron-right"></i> Blanqueamiento Dental </a>
                <a href="#servicios"><i class="fas fa-chevron-right"></i> Extracción Dental </a>
                <a href="#servicios"><i class="fas fa-chevron-right"></i> Limpieza Dental </a>
                <a href="#servicios"><i class="fas fa-chevron-right"></i> Obturación Dental </a>
                <a href="#servicios"><i class="fas fa-chevron-right"></i> Examen Bucudental </a>
                <a href="#servicios"><i class="fas fa-chevron-right"></i> Carillas Dentales </a>
                <a href="#servicios"><i class="fas fa-chevron-right"></i> Examen de Rutina </a>
            </div>

            <div class="box">
                <h3>Información de contacto</h3>
                <a ><i class="fas fa-phone"></i> +123-456-7890 </a>
                <a ><i class="fas fa-phone"></i> +111-222-3333 </a>
                <a ><i class="fas fa-phone"></i> +333-222-1111 </a>
                <a ><i class="fas fa-envelope"></i> dentallove@gmail.com </a>
                <a ><i class="fas fa-map-marker-alt"></i> dirección 12345, sucursal 1 </a>
                <a ><i class="fas fa-map-marker-alt"></i> dirección 12345, sucursal 2 </a>
                <a ><i class="fas fa-map-marker-alt"></i> dirección 12345, sucursal 3 </a>
            </div>

            <div class="box">
                <h3>Síguenos</h3>
                <a href="https://es-la.facebook.com/"><i class="fab fa-facebook-f"></i> Facebook </a>
                <a href="https://twitter.com/?lang=es"><i class="fab fa-twitter"></i> Twitter </a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i> Instagram </a>
                <a href="https://mx.linkedin.com/"><i class="fab fa-linkedin"></i> Linkedin </a>
                <a href="https://www.pinterest.com.mx/"><i class="fab fa-pinterest"></i> Pinterest </a>
            </div>
        </div>

        <div class="creditos"> Creado por <span> Karla, Mauricio, Helio y Mónica</span></div>
    </section>
    <!-- footer section ends -->

    <!-- custom css file link  -->
    <link rel="stylesheet" href="vista/css/style.css">

    <!-- custom js file link  -->
    <script src="vista/js/script.js"></script>
    
</body>
</html>