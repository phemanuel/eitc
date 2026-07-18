AOS.init({
    duration:800,
    once:true
});

const navbar = document.querySelector('.main-navbar');

window.addEventListener('scroll', function () {

    if (window.scrollY > 80) {

        navbar.classList.add('sticky');

    } else {

        navbar.classList.remove('sticky');

    }

});