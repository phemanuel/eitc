document.addEventListener("DOMContentLoaded", function(){


const sections = document.querySelectorAll("section[id]");

const links = document.querySelectorAll(".page-dot");



window.addEventListener("scroll",()=>{


let current="";


sections.forEach(section=>{


const sectionTop = section.offsetTop - 150;


if(window.scrollY >= sectionTop){

    current = section.getAttribute("id");

}


});



links.forEach(link=>{


link.classList.remove("active");


if(link.dataset.section === current){

    link.classList.add("active");

}


});


});


});
