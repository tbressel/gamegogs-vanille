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
});
