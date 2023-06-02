let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');

let preveiwContainer = document.querySelector('.services-preview');
let previewBox = preveiwContainer.querySelectorAll('.preview');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

document.querySelectorAll('.servicios .box-container .box a').forEach(service =>{
    service.onclick = () =>{
      preveiwContainer.style.display = 'flex';
      let name = service.getAttribute('data-name');
      previewBox.forEach(preview =>{
        let target = preview.getAttribute('data-target');
        if(name == target){
          preview.classList.add('active');
        }
      });
    };
  });

  previewBox.forEach(close =>{
    close.querySelector('.fa-times').onclick = () =>{
      close.classList.remove('active');
      preveiwContainer.style.display = 'none';
    };
  });