import * as navigation from './navigation.js';
import * as fetch from '../../assets/js/fetch.js';

// Listen to burger menu and close submenu if is opened
navigation.burgerMenu.addEventListener('click', () => {

    // main menu closing
    navigation.closeMenu();

    // if submenu is open, then close it
    if (navigation.displayProfilMenu)
    navigation.closeSubMenu();
});




// Lisenting to submenu state and toggle
navigation.profilMenu.addEventListener('click', () => {
    navigation.closeSubMenu();
});



// User submenu links redirection en configuration 
document.querySelectorAll(".js-submenu__item").forEach(item => {
    item.addEventListener('click', () => {

        // closing sub menu
        navigation.closeSubMenu();

        // closing main menu
        navigation.closeMenu();

        // delete all modules
        navigation.deleteAllModules();

        // get data-pathID and typeCssItem on the actuel clicked item
        let pathItem = item.getAttribute("data-pathID");
            console.log ("pathItem : ",pathItem);
            let typeCssItem = item.getAttribute("data-typeCSS");
            console.log ("pathItem : ",typeCssItem);

        // calling function with the fetched url inside to create main page
        fetch.modulUpdate(`./components/${pathItem}/${pathItem}.php`, `./components/${pathItem}/${pathItem}.css`, `${pathItem}`,`${typeCssItem}`);
        
        // calling function to create header
        pathItem = item.getAttribute("data-headerID");
        fetch.modulUpdate(`./components/${pathItem}/${pathItem}.php`, `./components/${pathItem}/${pathItem}.css`, `${pathItem}`,`${pathItem}`);
    })
});


document.getElementById("collection-header").addEventListener('click', (event) => {
    const target = event.target;
    if(target.getAttribute("data-pathID") === null) {
        return;
    }
    navigation.deleteAllModules("collection-header");
    let pathItem = target.getAttribute("data-pathID");
    let typeItem = target.getAttribute("data-css");
    fetch.modulUpdate(`./components/${pathItem}/${pathItem}.php`, `./components/${pathItem}/${pathItem}.css`, `${pathItem}`, `${typeItem}`);
})


 document.getElementById('connexion').addEventListener('click', () => {  
     navigation.deleteAllModules("collection-header");
     fetch.modulUpdate('./components/session/session.php','./components/session/session.css',"session-module");
 })

