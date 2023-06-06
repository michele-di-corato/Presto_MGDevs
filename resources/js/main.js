let navbar = document.querySelector('nav');


window.addEventListener('scroll', ()=> {
    if(window.scrollY > 56)
    {
        navbar.style.height = '100px'
    }else
    {
        navbar.style.height = '75px'
    }
});