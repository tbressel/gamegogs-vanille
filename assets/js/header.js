const burgerMenu = document.querySelector(".burger");
const profilMenu = document.getElementById("sub-item4");
const arrowElement = document.querySelector(".arrow")
let displayProfilMenu = false;



// burger menu
burgerMenu.addEventListener('click', () => {
    document.getElementById("nav__container").classList.toggle("nav-show");
    if (displayProfilMenu)
        closeSubMenu();
});

// profil submenu
profilMenu.addEventListener('click', () => {
    closeSubMenu();
});

function closeSubMenu() {
    document.querySelector(".submenu__container").classList.toggle("submenu__show");
    arrowElement.classList.toggle("arrow_change")
    displayProfilMenu = (!displayProfilMenu);
};