const burgerMenu = document.querySelector(".burger");
const profilMenu = document.getElementById("sub-item4");
const arrowElement = document.querySelector(".arrow");
let displayProfilMenu = false;

// Listener rule and toggle burger menu, with its submenu and sub sub-menu items
export function closeMenu() {
    document.getElementById("nav__container").classList.toggle("nav-show");
};

export function closeSubMenu() {
    document.querySelector(".submenu__container").classList.toggle("submenu__show");
    arrowElement.classList.toggle("arrow_change")
    displayProfilMenu = (!displayProfilMenu);
};

export function deleteAllModules(exceptionByID) {
    document.querySelectorAll(".js-modulenode").forEach(node => {
        if (exceptionByID !== node.id) {
            node.textContent = "";
        }
    })
};




export {arrowElement};
export {displayProfilMenu};
export {burgerMenu};
export {profilMenu};