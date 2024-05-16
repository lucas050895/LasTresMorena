// MENU HAMBURGUESA
var menu = document.querySelector('.hamburger');

function toggleMenu (event) {
    this.classList.toggle('is-active');
    document.querySelector( ".menuppal" ).classList.toggle("is_active");
    event.preventDefault();
}

menu.addEventListener('click', toggleMenu, false);



// VENTANA MODAL DE BUSQUEDA EN EL HEADER
const open = document.getElementById('origina_amen_1');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');

open.addEventListener('click', () => {
    modal_container.classList.add('show');  
});

close.addEventListener('click', () => {
    modal_container.classList.remove('show');
});



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

const cañaRight = document.querySelector(".caña-right");
const cañaLeft = document.querySelector(".caña-left");
const caña = document.querySelector(".scroll-caña");

cañaRight.addEventListener("click", ()=>{
    caña.scrollLeft += 100;
});
cañaLeft.addEventListener("click", ()=>{
    caña.scrollLeft -= 100;
});

const reelRight = document.querySelector(".reel-right");
const reelLeft = document.querySelector(".reel-left");
const reel = document.querySelector(".scroll-reel");

reelRight.addEventListener("click", ()=>{
    reel.scrollLeft += 100;
});
reelLeft.addEventListener("click", ()=>{
    reel.scrollLeft -= 100;
});


const anclaRight = document.querySelector(".ancla-right");
const anclaLeft = document.querySelector(".ancla-left");
const ancla = document.querySelector(".scroll-ancla");

anclaRight.addEventListener("click", ()=>{
    ancla.scrollLeft += 100;
});
anclaLeft.addEventListener("click", ()=>{
    ancla.scrollLeft -= 100;
});

