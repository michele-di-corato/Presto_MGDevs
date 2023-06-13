// Animazione Navbar
let navbar = document.querySelector("#nav");
let navTitle = document.querySelector(".navTitle");
let navLink = document.querySelectorAll(".nav-link");

if (window.innerWidth > 992) {
    window.addEventListener("scroll", () => {
        if (window.scrollY > 100) {
            navTitle.style.borderLeft = "2px solid var(--text)";
            navTitle.style.borderRight = "2px solid var(--text)";
            navTitle.style.borderRadius = "10px";
            navbar.style.marginTop = "3dvh";
            navbar.style.marginRight = "18dvh";
            navbar.style.marginLeft = "18dvh";
            navbar.style.borderRadius = "1rem";
            navbar.style.backgroundColor = "var(--elemtransp)";
            navbar.style.border = "0px solid var(--elemlighttransp)";
        } else {
            navTitle.style.borderLeft = "";
            navTitle.style.borderRight = "";
            navTitle.style.borderRadius = "";
            navbar.style.marginTop = "0px";
            navbar.style.marginRight = "0px";
            navbar.style.marginLeft = "0px";
            navbar.style.borderRadius = "0rem";
            navbar.style.backgroundColor = "";
            navbar.style.border = ""
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

window.addEventListener('scroll', () => {
    let scrolled = window.scrollY;

    if (scrolled > 350) {
        buttonGlobal.classList.remove('opacity-0');
        buttonGlobal.classList.remove('d-none');
        buttonGlobal.classList.add('d-block');
    } else {
        buttonGlobal.classList.add('opacity-0');
        buttonGlobal.classList.add('d-none');
        buttonGlobal.classList.remove('d-block');
    }
})


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
        navTog.style.transform = 'rotate(180deg)';
        navTog.style.fontSize = '2rem'
        navTog.style.borderRight = '2px solid var(--bglight)'
        navTog.style.borderLeft = '2px solid var(--bglight)'
        isClicked = false;
    } else {
        navTog.innerHTML = '<i class="fa-solid fa-bars"></i>';
        navTog.style.transform = '';
        navTog.style.fontSize = '2rem'
        navTog.style.border = ''
        isClicked = true;
    }
})


//Observer last card 

let lastCard = document.querySelectorAll('.last-card');
let Pointer = document.querySelector('.point');

let observerCard = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            lastCard.forEach((card, i) => {
                card.classList.remove('opacity-0');
                card.classList.add('animationUp');
                card.style.animationDelay = `${i * 0.5}s`
            })
        }
    })
})

observerCard.observe(Pointer);
