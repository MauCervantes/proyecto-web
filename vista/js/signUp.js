let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');

const form = document.querySelector("form-signup"),
      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password");


const edad = document.getElementById("Edad")
var i = 10;

while (edad.options.length > 0) {                
    edad.remove(0);
}

while(i <= 80){
    htmlInsert = "<option>" + i + "</option>"
    edad.insertAdjacentHTML("beforeend", htmlInsert)
    htmlInsert = ""
    i++
}

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

// js code to show/hide password and change icon
pwShowHide.forEach(eyeIcon =>{
    eyeIcon.addEventListener("click", ()=>{
        pwFields.forEach(pwField =>{
            if(pwField.type === "password"){
                pwField.type = "text";

                pwShowHide.forEach(icon =>{
                    icon.classList.replace("fa-eye-slash", "fa-eye");
                })
            }else{
                pwField.type = "password";

                pwShowHide.forEach(icon =>{
                    icon.classList.replace("fa-eye", "fa-eye-slash");
                })
            }
        })
    })
})