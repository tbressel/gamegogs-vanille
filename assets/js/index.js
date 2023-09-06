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
    modulUpdate('./components/newsletter/newsletter.php','./components/newsletter/newsletter.css',"newsletter-module");
    modulUpdate('./components/top-sells/top-sells.php','./components/top-sells/top.css',"top-sells-module");
    modulUpdate('./components/top-search/top-search.php','',"top-search-module");
    modulUpdate('./components/top-search/top-search.php','',"top-search-module");

    modulUpdate(`./components/collection-view-1/collection-view-1.php`, `./components/collection-view-1/collection-view-1.css`, `collection-view-1`);


});


