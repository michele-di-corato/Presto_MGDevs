// Animazione Navbar
let navbar = document.querySelector("#nav");
let navTitle = document.querySelector(".navTitle");
let navLink = document.querySelectorAll(".nav-link");

if (window.innerWidth > 992) {
    window.addEventListener("scroll", () => {
        if (window.scrollY > 100) {
            navTitle.style.borderRadius = "10px";
            navbar.style.marginTop = "3dvh";
            navbar.style.marginRight = "15dvh";
            navbar.style.marginLeft = "15dvh";
            navbar.style.borderRadius = "1rem";
            navbar.style.backgroundColor = "var(--elem)";
        } else {
            navbar.style.marginTop = "0px";
            navbar.style.marginRight = "0px";
            navbar.style.marginLeft = "0px";
            navbar.style.borderRadius = "0rem";
            navbar.style.backgroundColor = "";
        }
    });
}

// Animazione Button Form Create Announce
let icon = document.querySelector(".bi-arrow");
let btnCreate = document.querySelector("#btn-create");
let btnEdit = document.querySelector("#btn-edit");

if (icon && btnCreate) {
    // Card Prodotti
    btnCreate.addEventListener("mouseenter", function () {
        icon.style.transform = "rotate(180deg)";
    });

    btnCreate.addEventListener("mouseleave", function () {
        icon.style.transform = "";
        btnCreate.style.backgroundColor = "";
        btnEdit.style.backgroundColor = "";
    });
}

if (icon && btnEdit) {
    // Card Prodotti
    btnEdit.addEventListener("mouseenter", function () {
        icon.style.transform = "rotate(180deg)";
        icon.style.color = "white";
    });

    btnEdit.addEventListener("mouseleave", function () {
        icon.style.transform = "";
    });
}

let carousel = document.querySelector(".carousel");

if (carousel) {
    carousel.addEventListener("mouseenter", function () {
        let carouselControlPrevicon = document.querySelector(
            ".carousel-control-prev-icon"
        );
        if (carouselControlPrevicon) {
            carouselControlPrevicon.classList.add("d-block");
            carouselControlPrevicon.classList.remove("d-none");
        }
    });

    carousel.addEventListener("mouseleave", function () {
        let carouselControlPrevicon = document.querySelector(
            ".carousel-control-prev-icon"
        );
        if (carouselControlPrevicon) {
            carouselControlPrevicon.classList.add("d-none");
            carouselControlPrevicon.classList.remove("d-block");
        }
    });
}

// Button Carousel

if (carousel) {
    carousel.addEventListener("mouseenter", function () {
        let carouselControlNexticon = document.querySelector(
            ".carousel-control-next-icon"
        );
        if (carouselControlNexticon) {
            carouselControlNexticon.classList.add("d-block");
            carouselControlNexticon.classList.remove("d-none");
        }
    });

    carousel.addEventListener("mouseleave", function () {
        let carouselControlNexticon = document.querySelector(
            ".carousel-control-next-icon"
        );
        if (carouselControlNexticon) {
            carouselControlNexticon.classList.add("d-none");
            carouselControlNexticon.classList.remove("d-block");
        }
    });
}

// Button Global 

let buttonGlobal = document.querySelector('#buttonGlobal');

if (buttonGlobal) {
    window.addEventListener('scroll', () => {
        let scrolled = window.scrollY;
        if (scrolled > 350) {
            buttonGlobal.classList.add('animationFadeWhite');
            buttonGlobal.classList.remove('animationFadeAway');
            buttonGlobal.style.opacity = '1';
        } else {
            buttonGlobal.classList.add('animationFadeAway');
            buttonGlobal.classList.remove('animationFadeWhite');
            buttonGlobal.style.opacity = '0';
        }
    })
}



// Nav Category
// Seleziona il bottone
let button = document.getElementById("bottone-category");
if (button) {
    button.addEventListener("click", function () {
        // Seleziona l'elemento icona
        let icon = document.getElementById("icona-row");

        // Cambia la classe dell'icona
        if (icon && icon.classList.contains("bi-arrow-down-short")) {
            icon.classList.remove("bi-arrow-down-short");
            icon.classList.add("bi-arrow-up-short");
        } else {
            icon.classList.remove("bi-arrow-up-short");
            icon.classList.add("bi-arrow-down-short");
        }
    });
}


// Navbar Toggler 

let navTog = document.querySelector('#bars')
let faBars = document.querySelector('.fa-bars')
let isClicked = true;

navTog.innerHTML = '<i class="fa-solid fa-bars"></i>';

navTog.addEventListener('click', () => {
    if (isClicked == true) {
        navTog.innerHTML = '<i class="fa-solid fa-xmark"></i>';
        navTog.style.transform = 'rotate(-180deg)';
        navTog.style.fontSize = '2rem'
        isClicked = false;
    } else {
        navTog.innerHTML = '<i class="fa-solid fa-bars"></i>';
        navTog.style.transform = '';
        navTog.style.fontSize = '2rem'
        isClicked = true;
    }
})


let cardBg = document.querySelector('.card-bg-1');
let enter = document.querySelector('.enter');
let img1 = document.querySelector('.img-1');


if (window.innerWidth > 992) {
    
cardBg.addEventListener('mouseenter', () => {
    enter.classList.remove('opacity-0');
    enter.classList.add('opacity-1');
    enter.classList.add('animationFadeInBottom');
    img1.style.marginTop = '-4dvh';
    cardBg.style.backgroundColor = 'var(--elem)';
    cardBg.style.height = "375px";
    img1.style.transition = '.6s';
})

cardBg.addEventListener('mouseleave', () => {
    enter.classList.add('opacity-0');
    enter.classList.remove('opacity-1');
    enter.classList.remove('animationFadeInBottom');
    enter.classList.add('animationFadeAwayt');
    img1.style.marginTop = '';
    cardBg.style.backgroundColor = '';
})

let cardBg2 = document.querySelector('.card-bg-2');
let enter2 = document.querySelector('.enter-2');
let img2 = document.querySelector('.img-2');

cardBg2.addEventListener('mouseenter', () => {
    enter2.classList.remove('opacity-0');
    enter2.classList.add('opacity-1');
    enter2.classList.add('animationFadeInBottom');
    img2.style.marginTop = '-4dvh';
    cardBg2.style.backgroundColor = 'var(--elem)';
    cardBg2.style.height = "375px";
    img2.style.transition = '.6s';

})

cardBg2.addEventListener('mouseleave', () => {
    enter2.classList.add('opacity-0');
    enter2.classList.remove('opacity-1');
    enter2.classList.remove('animationFadeInBottom');
    enter2.classList.add('animationFadeAwayt');
    img2.style.marginTop = '';
    cardBg2.style.backgroundColor = '';
})

let cardBg3 = document.querySelector('.card-bg-3');
let enter3 = document.querySelector('.enter-3');
let img3 = document.querySelector('.img-3');

cardBg3.addEventListener('mouseenter', () => {
    enter3.classList.remove('opacity-0');
    enter3.classList.add('opacity-1');
    enter3.classList.add('animationFadeInBottom');
    img3.style.marginTop = '-4dvh';
    cardBg3.style.backgroundColor = 'var(--elem)';
    cardBg3.style.height = "375px";
    img3.style.transition = '.6s';

})

cardBg3.addEventListener('mouseleave', () => {
    enter3.classList.add('opacity-0');
    enter3.classList.remove('opacity-1');
    enter3.classList.remove('animationFadeInBottom');
    enter3.classList.add('animationFadeAwayt');
    img3.style.marginTop = '';
    cardBg3.style.backgroundColor = '';
})
}