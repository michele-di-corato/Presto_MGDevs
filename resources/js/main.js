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

// Card Prodotti
    btnCreate.addEventListener("mouseenter", function () {
        icon.style.transform = 'rotate(180deg)';
        btnCreate.style.backgroundColor = 'white';
    });

    btnCreate.addEventListener("mouseleave", function () {
        icon.style.transform = '';
        btnCreate.style.backgroundColor = '';
    });

    // Card Prodotti
// Aggiunge l'effetto di sfocatura all'immagine all'avvio della pagina
window.onload = function () {
    let img = document.querySelector('.card-img-top');
    img.classList.add('blur');
};


// Rimuove l'effetto di sfocatura all'immagine al passaggio del mouse
document.querySelector('.card').addEventListener('mouseenter', function () {
    let img = document.querySelector('.card-img-top');
    img.classList.remove('blur');
});

// Aggiunge l'effetto di sfocatura all'immagine al mouseleave della card
document.querySelector('.card').addEventListener('mouseleave', function () {
    let img = document.querySelector('.card-img-top');
    img.classList.add('blur');
});