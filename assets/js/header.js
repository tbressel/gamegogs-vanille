const burgerMenu = document.querySelector(".burger");
const profilMenu = document.getElementById("sub-item4");
const arrowElement = document.querySelector(".arrow")
let displayProfilMenu = false;

// burger menu
burgerMenu.addEventListener('click', () => {
    closeMenu();
    if (displayProfilMenu)
        closeSubMenu();
});

// profil submenu
profilMenu.addEventListener('click', () => {
    closeSubMenu();
});

function closeMenu() {
    document.getElementById("nav__container").classList.toggle("nav-show");
};

function closeSubMenu() {
    document.querySelector(".submenu__container").classList.toggle("submenu__show");
    arrowElement.classList.toggle("arrow_change")
    displayProfilMenu = (!displayProfilMenu);
};

function deleteAllModules(exceptionByID) {
    document.querySelectorAll(".js-modulenode").forEach(node => {
        if (exceptionByID !== node.id) {
            node.textContent = "";
        }
    })
}

// profil submenu choix 
document.querySelectorAll(".js-submenu__item").forEach(item => {
    item.addEventListener('click', () => {
        closeSubMenu();
        closeMenu();
        deleteAllModules();
        let pathItem = item.getAttribute("data-pathID");
        modulUpdate(`./components/${pathItem}/${pathItem}.php`, `./components/${pathItem}/${pathItem}.css`, `${pathItem}`);
        pathItem = item.getAttribute("data-headerID");
        modulUpdate(`./components/${pathItem}/${pathItem}.php`, `./components/${pathItem}/${pathItem}.css`, `${pathItem}`);
    })
});


document.getElementById("collection-header").addEventListener('click', (event) => {
    const target = event.target;
    if(target.getAttribute("data-pathID") === null) {
        return;
    }
    deleteAllModules("collection-header");
    let pathItem = target.getAttribute("data-pathID");
    modulUpdate(`./components/${pathItem}/${pathItem}.php`, `./components/${pathItem}/${pathItem}.css`, `${pathItem}`);
})