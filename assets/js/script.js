
document.addEventListener("DOMContentLoaded", () => {
// burger menu
    const burgerMenu = document.querySelector(".burger");
    burgerMenu.addEventListener('click', () => {
        document.getElementById("nav__container").classList.toggle("nav-show")
    })






// Footer menu 
    const footerMenuItems = document.querySelectorAll(".js-footer-menu");
    footerMenuItems.forEach(menuItem => {
        menuItem.addEventListener('click', () => {
            menuItem.nextElementSibling.classList.toggle("hidden")
        });
    });
});
