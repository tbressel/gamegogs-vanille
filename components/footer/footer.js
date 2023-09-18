    // Listener to toggle "hidden" class.
    const footerMenuItems = document.querySelectorAll(".js-footer-menu");
    footerMenuItems.forEach(menuItem => {
        menuItem.addEventListener('click', () => {
            menuItem.nextElementSibling.classList.toggle("hidden")
        });
    });

    