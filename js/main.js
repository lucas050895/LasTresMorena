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
const imgs = document.querySelectorAll(".container img");
const dots = document.querySelectorAll(".dot i");
const leftArrow = document.querySelector(".arrow-left");
const rightArrow = document.querySelector(".arrow-right");

let currentIndex = 0;
let time = 5000; // default time for auto slideshow

const defClass = (startPos, index) => {
for (let i = startPos; i < imgs.length; i++) {
    imgs[i].style.display = "none";
    dots[i].classList.remove("fa-dot-circle");
    dots[i].classList.add("fa-circle");
}
    imgs[index].style.display = "block";
    dots[index].classList.add("fa-dot-circle");
};

defClass(1, 0);

leftArrow.addEventListener("click", function(){
    currentIndex <= 0 ? currentIndex = imgs.length-1 : currentIndex--;
    defClass(0, currentIndex);
});

rightArrow.addEventListener("click", function(){
    currentIndex >= imgs.length-1 ? currentIndex = 0 : currentIndex++;
    defClass(0, currentIndex);
});

const startAutoSlide = () => {
    setInterval(() => {
        currentIndex >= imgs.length-1 ? currentIndex = 0 : currentIndex++;
        defClass(0, currentIndex);
    }, time);
};

startAutoSlide();



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
