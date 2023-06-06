let navbar = document.querySelector('nav');

let navTitle = document.querySelector('.navTitle');

window.addEventListener('scroll', ()=> {
    if(window.scrollY > 100)
    {
        navbar.style.height = '100px'
        navTitle.style.borderLeft = '2px solid var(--text)'
        navTitle.style.borderRight = '2px solid var(--text)'
        navTitle.style.borderRadius = '10px'
        navTitle.style.padding = '2dvh'
    }else
    {
        navbar.style.height = '73px'
        navTitle.style.borderLeft = ''
        navTitle.style.borderRight = ''
        navTitle.style.borderRadius = ''
        navTitle.style.padding = ''
    }
});

// let icon = document.querySelector('.bi-arrow');

// if (icon == 'hover' ()=> {
//     icon.addEventListener("mouseover", (event) => {
//         icon.style.transform = 'rotate(10deg)'
//     })
// };else{
//     icon.style.transform = 'rotate(10deg)'
// });
