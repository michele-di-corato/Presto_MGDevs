// Card Prodotti
// Aggiunge l'effetto di sfocatura all'immagine all'avvio della pagina
window.onload = function () {
    let img = document.querySelector('.card-img-top');
    img.classList.add('blur');
};

// Rimuove l'effetto di sfocatura all'immagine al passaggio del mouse
document.querySelector('.card-add').addEventListener('mouseenter', function () {
    let img = document.querySelector('.card-img-top');
    img.classList.remove('blur');
});

// Aggiunge l'effetto di sfocatura all'immagine al mouseleave della card
document.querySelector('.card-add').addEventListener('mouseleave', function () {
    let img = document.querySelector('.card-img-top');
    img.classList.add('blur');
});
