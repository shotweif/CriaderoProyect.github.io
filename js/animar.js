let animado = document.querySelectorAll(".animado");

let target1 = document.querySelectorAll(".target1");
let target2 = document.querySelectorAll(".target2");
let target3 = document.querySelectorAll(".target3");


function mostrarScroll(){
    let scrollTop = document.documentElement.scrollTop;
    
    for(var i=0; i<animado.length; i++){
        let alturaAnimacion = animado[i].offsetTop;

        if(alturaAnimacion < scrollTop){
            animado[i].style.position = "fixed";
            animado[i].style.height = "4rem";

        }else{
            animado[i].style.position = "relative";
            animado[i].style.height = "6rem";
        }
    }
}

function mostrarScrollTargrt(){
    let scrollTop = document.documentElement.scrollTop;
    
    for(var i=0; i<target1.length; i++){
        let alturaAnimacion = target1[i].offsetTop;

        if(alturaAnimacion-600 < scrollTop){
            target1[i].style.opacity = 1;
            target2[i].style.opacity = 1;
            target3[i].style.opacity = 1;

            target1[i].classList.add("mostarUp1");
            target2[i].classList.add("mostarUp2");
            target3[i].classList.add("mostarUp3");

        }
    }
}

window.addEventListener("scroll", mostrarScroll);
window.addEventListener("scroll", mostrarScrollTargrt);