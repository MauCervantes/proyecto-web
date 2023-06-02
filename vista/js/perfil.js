let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

//creamos variables que sean el objeto dl documento con su ID
const modi = document.getElementById("modificar-user");
const cerrar = document.getElementById("cerrarSesion-user");
const eliminar = document.getElementById("eliminar");

//Agregamos funciones para cuando s le haga un clic a estos elementos
//Boton de modificar
modi.addEventListener('click', ()=>{
    window.location.href="../html/modificar.php";
})

//Boton de cerrar Sesión
cerrar.addEventListener('click', ()=>{
    var c = confirm('¿Seguro que desea cerrar Sesión?');
    if (c == true){
        window.location.href="../../controladores/cerrarSesion.php";
    }else{}
})

//Boton de eliminar
eliminar.addEventListener('click', ()=>{
    var d = confirm('¿Seguro que desea eliminar la cuenta?');
    if (d == true){
        window.location.href="../../controladores/borrarUsu.php";
    }else{}
})