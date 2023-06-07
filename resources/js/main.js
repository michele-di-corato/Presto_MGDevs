// Animazione Navbar
let navbar = document.querySelector("nav");
let navTitle = document.querySelector(".navTitle");

window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
        navTitle.style.borderLeft = "2px solid var(--text)";
        navTitle.style.borderRight = "2px solid var(--text)";
        navTitle.style.borderRadius = "10px";
        navTitle.style.padding = "2dvh";
    } else {
        navTitle.style.borderLeft = "";
        navTitle.style.borderRight = "";
        navTitle.style.borderRadius = "";
        navTitle.style.padding = "";
    }
});

// Animazione Button Form Create Announce
let icon = document.querySelector(".bi-arrow");
let btnCreate = document.querySelector(".btn-create");

if (icon && btnCreate) {
    // Card Prodotti
    btnCreate.addEventListener("mouseenter", function () {
        icon.style.transform = "rotate(180deg)";
        btnCreate.style.backgroundColor = "white";
    });

    btnCreate.addEventListener("mouseleave", function () {
        icon.style.transform = "";
        btnCreate.style.backgroundColor = "";
    });
}

let carousel = document.querySelector(".carousel");

if (carousel) {
    carousel.addEventListener("mouseenter", function () {
        let carouselControlPrevicon = document.querySelector(".carousel-control-prev-icon");
        if (carouselControlPrevicon ) {
            carouselControlPrevicon.classList.add("d-block");
            carouselControlPrevicon.classList.remove("d-none");
        }
    });

    carousel.addEventListener("mouseleave", function () {
        let carouselControlPrevicon = document.querySelector(".carousel-control-prev-icon");
        if (carouselControlPrevicon) {
            carouselControlPrevicon.classList.add("d-none");
            carouselControlPrevicon.classList.remove("d-block");
        }
    });
}

if (carousel) {
    carousel.addEventListener("mouseenter", function () {
        let carouselControlNexticon = document.querySelector(".carousel-control-next-icon");
        if (carouselControlNexticon) {
            carouselControlNexticon.classList.add("d-block");
            carouselControlNexticon.classList.remove("d-none");
        }
    });

    carousel.addEventListener("mouseleave", function () {
        let carouselControlNexticon = document.querySelector(".carousel-control-next-icon");
        if (carouselControlNexticon) {
            carouselControlNexticon.classList.add("d-none");
            carouselControlNexticon.classList.remove("d-block");
        }
    });
}

// Card Prodotti
// Aggiunge l'effetto di sfocatura all'immagine all'avvio della pagina
window.onload = function () {
    let img = document.querySelector(".card-img-top");
    if (img) {
        img.classList.add("blur");
    }
};

// Rimuove l'effetto di sfocatura all'immagine al passaggio del mouse
let card = document.querySelector(".card");
if (card) {
    card.addEventListener("mouseenter", function () {
        let img = document.querySelector(".card-img-top");
        if (img) {
            img.classList.remove("blur");
        }
    });

    // Aggiunge l'effetto di sfocatura all'immagine al mouseleave della card
    card.addEventListener("mouseleave", function () {
        let img = document.querySelector(".card-img-top");
        if (img) {
            img.classList.add("blur");
        }
    });
}

// Nav Category
// Seleziona il bottone
let button = document.getElementById('bottone-category');
if (button) {
    button.addEventListener('click', function() {
        // Seleziona l'elemento icona
        let icon = document.getElementById('icona-row');
        
        // Cambia la classe dell'icona
        if (icon && icon.classList.contains('bi-arrow-down-short')) {
            icon.classList.remove('bi-arrow-down-short');
            icon.classList.add('bi-arrow-up-short');
        } else {
            icon.classList.remove('bi-arrow-up-short');
            icon.classList.add('bi-arrow-down-short');
        }
    });
}
