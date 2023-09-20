import * as fetch from './fetch.js';
import '../../components/footer/footer.js';
import '../../components/header/header.js';
import '../../components/collection-view-1/collection-view-1.js';
import '../../components/collection-view-2/collection-view-2.js';
import '../../components/collection-view-3/collection-view-3.js';

document.addEventListener("DOMContentLoaded", () => {
      // chargement aléatoir des wallpaper
    const listWallpaper = [
        "battle.png",
        "mario-luigi.jpg",
        "minecraft.png",
        "monstre.jpg"
    ] 

    const imageSrc = listWallpaper[Math.floor(Math.random() * listWallpaper.length)];
    document.body.style.backgroundImage = `url("assets/img/wallpapers/${imageSrc}")`;

    // chargement des module d'index par défault
// 'chemin .php','chemin .css','id de l'élement DOM destination','data-id'

    fetch.modulUpdate('./components/newsletter/newsletter.php','./components/newsletter/newsletter.css',"newsletter-module",'newsletter');
    fetch.modulUpdate('./components/top-sells/top-sells.php','./components/top-sells/top.css',"top-sells-module",'topsell');
    fetch.modulUpdate('./components/top-search/top-search.php','',"top-search-module",'topsearch');
    fetch.modulUpdate(`./components/collection-view-1/collection-view-1.php`, `./components/collection-view-1/collection-view-1.css`, `collection-view-1`,'collection-view');
});



