// Animazione Navbar

let navbar = document.querySelector('nav');
let navTitle = document.querySelector('.navTitle');

window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        navbar.style.height = '100px';
        navTitle.style.borderLeft = '2px solid var(--text)';
        navTitle.style.borderRight = '2px solid var(--text)';
        navTitle.style.borderRadius = '10px';
        navTitle.style.padding = '2dvh';
    } else {
        navbar.style.height = '73px';
        navTitle.style.borderLeft = '';
        navTitle.style.borderRight = '';
        navTitle.style.borderRadius = '';
        navTitle.style.padding = '';
    }
});


 // Animazione Button Form Create Announce
let icon = document.querySelector('.bi-arrow');
let btnCreate = document.querySelector('.btn-create');

btnCreate.addEventListener("mouseover", () => {
    icon.style.transform = 'rotate(180deg)';
    btnCreate.style.backgroundColor = 'white';
});

btnCreate.addEventListener("click", () => {
    icon.style.transform = 'rotate(180deg)';
    icon.style.color = 'white';
    icon.style.padding = '0px';
});

// Card Prodotti
    btnCreate.addEventListener("mouseenter", function () {
        icon.style.transform = 'rotate(10deg)';
        btnCreate.style.backgroundColor = 'white';
    });

    btnCreate.addEventListener("mouseleave", function () {
        icon.style.transform = '';
        btnCreate.style.backgroundColor = '';
    });

    btnCreate.addEventListener("click", (event) => {
        icon.style.transform = 'rotate(180deg)';
        icon.style.padding = '0px';
    });

// Card Prodotti
// Aggiunge l'effetto di sfocatura all'immagine all'avvio della pagina
window.onload = function() {
    var img = document.querySelector('.card-img-top');
    if (img !== null) {
        img.classList.add('blur');
    }
};

let cardElement = document.querySelector('.card');
if (cardElement !== null) {

    cardElement.addEventListener('mouseenter', function() {
        let img = document.querySelector('.card-img-top');
        img.classList.add('blur');
    });

    cardElement.addEventListener('mouseleave', function () {
        let img = document.querySelector('.card-img-top');
        img.classList.add('blur');
    });
    
}