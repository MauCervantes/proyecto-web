let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

//Objetos necesarios del archivo forms.php
const combo = document.getElementById("Servicios")
const des = document.getElementById("id_des")
const cos = document.getElementById("id_cos")
const med = document.getElementById("id_med")
const suc = document.getElementById("id_sucu")
const anio = document.getElementById("dAño")
const dmes = document.getElementById("dMes")
const ddia = document.getElementById("dDia")
const dhora = document.getElementById("dHora")
const bCancelar = document.getElementById("cancelar")
/*-----------------------------------------------------------------------------------------------*/

//var tipo date
var fecha = new Date()
/*-----------------------------------------------------------------------------------------------*/

//Variables auxiliares
let hola = [0][0]
let horasOcup = [0][0]
let htmlInsert
let max = [0][0]
let i = 0
let l = 1
let k = 0
let m = 0
let n = 0
/*-----------------------------------------------------------------------------------------------*/

//Meses del año
const mes = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]
/*-----------------------------------------------------------------------------------------------*/

//Horas disponibles
const horas = ["09:00", "10:00", "11:00", "12:00", "01:00", "02:00", "03:00", "04:00"]
/*-----------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------------------*/
//Fetch que nos arroja resultados de Api en cestion de servicios y sus datos.
fetch('http://localhost:3000/prueba').then(x => x.json()).then(contenido => hola = contenido)
/*-----------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------------------*/
//fetch que me entrega los servicios que ya existen (para evaluar las horas)
fetch('http://localhost:3000/citas').then(x => x.json()).then(contenido => horasOcup = contenido)
/*-----------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------------------*/
//fetch que me entrega el ultimo id que ya existe en citas (para evaluar las horas)
fetch('http://localhost:3000/id').then(x => x.json()).then(contenido => max = contenido)
/*-----------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------------------*/
//Poner en el combo servicios los servicios y datos dentro de la base de datos
setTimeout(() => {
    while (i < 9) {
        htmlInsert = "<option>" + hola.data[0][i].Nombre + "</option>"
        combo.insertAdjacentHTML("beforeend", htmlInsert)
        htmlInsert = ""
        i++
    }
}, 1500);
/*-----------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------------------*/
//A partir del servicio seleccionado, llenar los campos con datos correspondientes
combo.addEventListener('click', () => {
    if (combo.selectedIndex != 0) {
        des.value = hola.data[0][combo.selectedIndex - 1].Descripcion
        cos.value = hola.data[0][combo.selectedIndex - 1].Costo
        med.value = hola.data[0][combo.selectedIndex - 1].NombreMed
        suc.value = hola.data[0][combo.selectedIndex - 1].Ubicacion
    } else {
        des.value = ""
        cos.value = ""
        med.value = ""
        suc.value = ""
    }

    //Asignamos horas
    m = 0
    while (dHora.options.length > 0) {                
        dHora.remove(0);
    }
    asignarHoras()
})
/*-----------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------------------*/
//Agregar el año 2023 por el momento y los meses restantes. 
htmlInsert = "<option>" + fecha.getFullYear() + "</option>"
anio.insertAdjacentHTML("beforeend", htmlInsert)
htmlInsert = ""
/*-----------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------------------*/
//Agregar meses del año que aun no transcurren
var j = fecha.getMonth()
if (anio.value == "2023") {
    while (j < mes.length) {
        htmlInsert = "<option>" + mes[j] + "</option>"
        dmes.insertAdjacentHTML("beforeend", htmlInsert)
        htmlInsert = ""
        j++
    }
}
/*-----------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------------------*/
//Por defecto mete los días que son en el mes que sale por default...
j = fecha.getMonth()
l = 1
if (dmes.value == "Enero" || dmes.value == "Marzo" || dmes.value == "Mayo" || dmes.value == "Julio" || dmes.value == "Agosto" ||
    dmes.value == "Octubre" || dmes.value == "Diciembre") {
    k = 31
    postDia(k, l)
} else if (dmes.value == "Abril" || dmes.value == "Junio" || dmes.value == "Septiembre" || dmes.value == "Noviembre") {
    k = 30
    postDia(k, l)
}else if(dmes.value == "--"){
    while (ddia.options.length > 0) {                
        ddia.remove(0);
    }   
}else {
    k = 28
    postDia(k, l)
}

if(dmes.value == mes[fecha.getUTCMonth()-1]){
    l = fecha.getDate() + 1
    postDia(k, l)
}
/*-----------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------------------*/
//Evento en el combo mes (al darle click) para dar los días correspondientes 30, 31 o 28
dmes.addEventListener('click', () => {
    j = fecha.getMonth()
    l = 1
    if (dmes.value == "Enero" || dmes.value == "Marzo" || dmes.value == "Mayo" || dmes.value == "Julio" || dmes.value == "Agosto" ||
        dmes.value == "Octubre" || dmes.value == "Diciembre") {
        k = 31
        postDia(k, l)
    } else if (dmes.value == "Abril" || dmes.value == "Junio" || dmes.value == "Septiembre" || dmes.value == "Noviembre") {
        k = 30
        postDia(k, l)
    }else if(dmes.value == "--"){
        while (ddia.options.length > 0) {                
            ddia.remove(0);
        }   
    }else {
        k = 28
        postDia(k, l)
    }

    //console.log(fecha.getUTCMonth()-1);
    //console.log(mes[fecha.getUTCMonth()-1])
    if(dmes.value == mes[fecha.getUTCMonth()-1]){
        l = fecha.getDate() + 1
        postDia(k, l)
    }
    //Asignamos horas
    m = 0
    while (dHora.options.length > 0) {                
        dHora.remove(0);
    }

    asignarHoras()
})
/*-----------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------------------*/
//Combobox de horas... 9 am - 5pm pero si una hora ya registrada, no esta disponible no ponerla.
//Api de citas

//validacion ahoras ocupadas y disponibles
asignarHoras()
/*
setTimeout(() => {
    console.log(max.data[0][0].Max)
    while(m < horas.length){
        n = 0
        while(n < max.data[0][0].Max){
            if(dmes.value == horasOcup.data[0][n].mes && ddia.value == horasOcup.data[0][n].dia && horas[m] == horasOcup.data[0][n].Hora && med.value == horasOcup.data[0][n].NombreMed){
                m++
            }
            n++
        }
        htmlInsert = "<option>" + horas[m] + "</option>"
        dhora.insertAdjacentHTML("beforeend", htmlInsert)
        htmlInsert = ""
        m++
    }
}, 1500);*/
/*-----------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------------------*/
//Agrega las horas disponibles al día seleccionado (acction en el objeto ddia)
ddia.addEventListener('click', () => {
    m = 0
    while (dHora.options.length > 0) {                
        dHora.remove(0);
    }

    asignarHoras()
})
/*-----------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------------------*/
//Funcion para meter los días correspondientes al mes elegido.
//Quita los días que han pasado del mes. 
function postDia(num, num2) {
    l = num2
    while (ddia.options.length > 0) {                
        ddia.remove(0);
    }        

    while (l <= num) {
        htmlInsert = "<option>" + l + "</option>"
        ddia.insertAdjacentHTML("beforeend", htmlInsert)
        htmlInsert = ""
        l++
    }
}
/*-----------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------------------*/
//Funcion para asignar las horas adecuadas segun el servicio solicitado, el mes, día y hora
function asignarHoras(){
    setTimeout(() => {
        while(m < horas.length){
            n = 0
            while(n < max.data[0][0].Max){
                if(dmes.value == horasOcup.data[0][n].mes && ddia.value == horasOcup.data[0][n].dia && horas[m] == horasOcup.data[0][n].Hora && med.value == horasOcup.data[0][n].NombreMed){
                    m++
                }
                n++
            }
            htmlInsert = "<option>" + horas[m] + "</option>"
            dhora.insertAdjacentHTML("beforeend", htmlInsert)
            htmlInsert = ""
            m++
        }
    }, 1500);
}
/*-----------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------------------*/
//Si se le da al boton de cancelar
bCancelar.addEventListener('click', ()=>{
    var d = confirm('¿Seguro que desea cancelar la solicitud?');
    if (d == true){
        window.location.href="../html/menucitas.php"; //Aqui debe de llevar a la pagina principal de paciente
    }else{}
})
/*-----------------------------------------------------------------------------------------------*/