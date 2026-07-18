document.addEventListener("DOMContentLoaded", function(){


    const button = document.getElementById("scrollTopBtn");


    if(!button) return;


    window.addEventListener("scroll", function(){


        if(window.scrollY > 400){

            button.classList.add("show");

        }else{

            button.classList.remove("show");

        }


    });



    button.addEventListener("click", function(){


        window.scrollTo({

            top:0,

            behavior:"smooth"

        });


    });


});