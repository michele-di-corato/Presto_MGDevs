// Card Prodotti
// Aggiunge l'effetto di sfocatura all'immagine all'avvio della pagina
window.onload = function () {
    var img = document.querySelector('.card-img-top');
    img.classList.add('blur');
};

// Rimuove l'effetto di sfocatura all'immagine al passaggio del mouse
document.querySelector('.card').addEventListener('mouseenter', function () {
    var img = document.querySelector('.card-img-top');
    img.classList.remove('blur');
});

// Aggiunge l'effetto di sfocatura all'immagine al mouseleave della card
document.querySelector('.card').addEventListener('mouseleave', function () {
    var img = document.querySelector('.card-img-top');
    img.classList.add('blur');
});
