// Dropdown Navbar
let dropdown = document.querySelector(".dropdown-menu");
if (dropdown) {

    if (window.innerWidth > 767) {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 100) {
                dropdown.style.backgroundColor = "var(--elem)";
            } else {
                dropdown.style.backgroundColor = "var(--elemdarktransp)";
            }
        });
    }
    
    dropdown.addEventListener("mouseover", () => {
        if (window.scrollY > 100) {
            dropdown.style.backgroundColor = "var(--bg)";
        } else {
            dropdown.style.backgroundColor = "var(--bgdarktransp)";
        }
    });
    
    dropdown.addEventListener("mouseout", () => {
        if (window.scrollY > 100) {
            dropdown.style.backgroundColor = "var(--elem)";
        } else {
            dropdown.style.backgroundColor = "var(--elemdarktransp)";
        }
    });
}
