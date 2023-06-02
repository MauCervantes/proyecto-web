let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

//creamos variables que sean el objeto dl documento con su ID
const modi = document.getElementById("modificar-user");
const cerrar = document.getElementById("cerrarSesion-user");

//Agregamos funciones para cuando s le haga un clic a estos elementos
//Boton de modificar
modi.addEventListener('click', ()=>{
    window.location.href="../html/modificarM.php";
})

//Boton de cerrar Sesión
cerrar.addEventListener('click', ()=>{
    var c = confirm('¿Seguro que desea cerrar Sesión?');
    if (c == true){
        window.location.href="../../controladores/cerrarSesion.php";
    }else{}
})