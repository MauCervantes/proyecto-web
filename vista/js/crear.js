let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

const crear = document.getElementById("crear");

crear.addEventListener('click', ()=>{
    window.location.href="../html/forms.php";
})