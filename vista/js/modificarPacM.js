let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

//creamos variables que sean el objeto dl documento con su ID
const cancel = document.getElementById("cancelar");

//Boton cancelar
cancel.addEventListener('click', ()=>{
    var d = confirm('¿Seguro que desea cancelar los cambios?');
    if (d == true){
        window.location.href="../html/perfilMdico.php";
    }else{}
})