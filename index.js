let ham = document.querySelector('#menu-btn');
let nav = document.querySelector('.header .navbar');

ham.onclick = () => {
    ham.classList.toggle('change');
    nav.classList.toggle('change');
}

const swiper = new Swiper('.swiper', {
    loop: true,
    speed: 4000,
    autoplay:{
        enabled:true,
        delay:5000,
    },

    effect: "cube",
    grabCursor: true,
    cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});