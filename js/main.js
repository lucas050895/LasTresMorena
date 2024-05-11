// MENU HAMBURGUESA
var menu = document.querySelector('.hamburger');

function toggleMenu (event) {
    this.classList.toggle('is-active');
    document.querySelector( ".menuppal" ).classList.toggle("is_active");
    event.preventDefault();
}

menu.addEventListener('click', toggleMenu, false);


// AGREGAR SOMBRA AL HEADER
window.onscroll = function(){
    let fondo = document.querySelector("header");

    fondo.classList.toggle("sombra", window.scrollY>0);
};


//  SLIDER AUTOMATICO DE INDEX
let slider = document.querySelector(".slider-contenedor")
let sliderIndividual = document.querySelectorAll(".contenido-slider")
let contador = 1;
let width = sliderIndividual[0].clientWidth;
let intervalo = 3000;

window.addEventListener("resize", function(){
    width = sliderIndividual[0].clientWidth;
})

setInterval(function(){
    slides();
},intervalo);

function slides(){
    slider.style.transform = "translate("+(-width*contador)+"px)";
    slider.style.transition = "transform .8s";
    contador++;

    if(contador == sliderIndividual.length){
        setTimeout(function(){
            slider.style.transform = "translate(0px)";
            slider.style.transition = "transform 0s";
            contador=1;
        },1500)
    }
}



// SLIDER HORIZONTAL PARA PRODUCTOS EN INDEX

const rightBtn = document.querySelector(".fa-chevron-circle-right");
const leftBtn = document.querySelector(".fa-chevron-circle-left");
const content = document.querySelector(".scroll");

rightBtn.addEventListener("click", ()=>{
    content.scrollLeft += 100;
})

leftBtn.addEventListener("click", ()=>{
    content.scrollLeft -= 100;
})











var lucas = document.querySelector(".slier-prin");

lucas.innerHTML += slider.innerHTML;










