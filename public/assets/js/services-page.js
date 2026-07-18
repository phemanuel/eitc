document.addEventListener("DOMContentLoaded", function () {

    const links = document.querySelectorAll(".service-nav-item");
    const sections = document.querySelectorAll("section[id]");

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if(entry.isIntersecting){

                links.forEach(link => {

                    link.classList.remove("active");

                    if(link.getAttribute("href") === "#" + entry.target.id){

                        link.classList.add("active");

                    }

                });

            }

        });

    },{
        rootMargin:"-45% 0px -45% 0px"
    });

    sections.forEach(section=>{

        observer.observe(section);

    });

});