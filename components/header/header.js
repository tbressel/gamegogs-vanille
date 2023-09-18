import * as navigation from './navigation.js';
import * as fetch from '../../assets/js/fetch.js';

// Listen to burger menu and close submenu if is opened
navigation.burgerMenu.addEventListener('click', () => {
    navigation.closeMenu();
    if (navigation.displayProfilMenu)
    navigation.closeSubMenu();
});

// toggle submenu
navigation.profilMenu.addEventListener('click', () => {
    navigation.closeSubMenu();
});

// profil submenu choix 
document.querySelectorAll(".js-submenu__item").forEach(item => {
    item.addEventListener('click', () => {
        navigation.closeSubMenu();
        navigation.closeMenu();
        navigation.deleteAllModules();
        let pathItem = item.getAttribute("data-pathID");
        fetch.modulUpdate(`./components/${pathItem}/${pathItem}.php`, `./components/${pathItem}/${pathItem}.css`, `${pathItem}`);
        pathItem = item.getAttribute("data-headerID");
        fetch.modulUpdate(`./components/${pathItem}/${pathItem}.php`, `./components/${pathItem}/${pathItem}.css`, `${pathItem}`);
    })
});


document.getElementById("collection-header").addEventListener('click', (event) => {
    const target = event.target;
    if(target.getAttribute("data-pathID") === null) {
        return;
    }
    navigation.deleteAllModules("collection-header");
    let pathItem = target.getAttribute("data-pathID");
    fetch.modulUpdate(`./components/${pathItem}/${pathItem}.php`, `./components/${pathItem}/${pathItem}.css`, `${pathItem}`);
})


 document.getElementById('connexion').addEventListener('click', () => {  
     navigation.deleteAllModules("collection-header");
     fetch.modulUpdate('./components/session/session.php','./components/session/session.css',"session-module");
 })

