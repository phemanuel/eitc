document.addEventListener("DOMContentLoaded", function(){


    const navbar = document.querySelector(".main-header");


    if(!navbar) return;


    window.addEventListener("scroll", function(){


        if(window.scrollY > 40){

            navbar.classList.add("scrolled");

        }else{

            navbar.classList.remove("scrolled");

        }


    });


});