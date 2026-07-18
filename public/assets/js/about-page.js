document.addEventListener("DOMContentLoaded", function(){


    const counters = document.querySelectorAll('.counter');


    counters.forEach(counter => {


        let target = +counter.dataset.count;

        let current = 0;


        let increment = target / 80;


        function updateCounter(){


            current += increment;


            if(current < target){

                counter.innerText = Math.ceil(current);

                requestAnimationFrame(updateCounter);

            }
            else {

                counter.innerText = target + "+";

            }


        }


        updateCounter();


    });



});