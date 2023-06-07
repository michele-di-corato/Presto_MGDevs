let navbar = document.querySelector('nav');

let navTitle = document.querySelector('.navTitle');

window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        navbar.style.height = '100px'
        navTitle.style.borderLeft = '2px solid var(--text)'
        navTitle.style.borderRight = '2px solid var(--text)'
        navTitle.style.borderRadius = '10px'
        navTitle.style.padding = '2dvh'
    } else {
        navbar.style.height = '73px'
        navTitle.style.borderLeft = ''
        navTitle.style.borderRight = ''
        navTitle.style.borderRadius = ''
        navTitle.style.padding = ''
    }
});


let icon = document.querySelector('.bi-arrow');

let btnCreate = document.querySelector('.btn-create')


    btnCreate.addEventListener("mouseover", (event) => {
        icon.style.transform = 'rotate(10deg)'
        btnCreate.style.backgroundColor = 'white'
    });

    btnCreate.addEventListener("click", (event) => {
        icon.style.transform = 'rotate(165deg)'
        icon.style.backgroundColor = 'white'
        icon.style.color = 'white)'
        icon.style.padding = '0px'
    });
