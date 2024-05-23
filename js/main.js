/*MENU DE NAVEGACION*/
let boton = document.getElementById("icono");
let enlaces = document.getElementById("enlaces");
let conta = 0;


boton.addEventListener("click",function(){
    if(conta == 0){
        enlaces.className = ('enlaces dos');
        conta=1;
    }else{
        enlaces.classList.remove('dos');
        enlaces.className = ('enlaces uno');
        conta = 0;
    }
})

window.addEventListener('resize', function(){
    if(screen.width > 750){
        conta=0;
        enlaces.classList.remove('dos');
        enlaces.className = ('enlaces uno');

    }
})


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

