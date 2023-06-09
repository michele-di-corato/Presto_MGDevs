// Dropdown Navbar
let dropdown = document.querySelector(".drop-menu");
if (dropdown) {

    if (window.innerWidth > 767) {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 100) {
                dropdown.style.backgroundColor = "var(--elemdarktransp)";
                dropdown.style.border = "0px solid var(--elemlighttransp)";
            } else {
                dropdown.style.backgroundColor = "var(--elemdarktransp)";
                dropdown.style.border = "0px solid var(--elemlighttransp)";
            }
        });
    }
    
    dropdown.addEventListener("mouseover", () => {
        if (window.scrollY > 100) {
            dropdown.style.backgroundColor = "var(--bgdarktransp)";
            dropdown.style.border = "0px solid var(--bglighttransp)";
        } else {
            dropdown.style.backgroundColor = "var(--bgdarktransp)";
            dropdown.style.border = "0px solid var(--bglighttransp)";
        }
    });
    
    dropdown.addEventListener("mouseout", () => {
        if (window.scrollY > 100) {
            dropdown.style.backgroundColor = "var(--elemdarktransp)";
            dropdown.style.border = "0px solid var(--elemlighttransp)";
        } else {
            dropdown.style.backgroundColor = "var(--elemdarktransp)";
            dropdown.style.border = "0px solid var(--elemlighttransp)";
        }
    });
}
