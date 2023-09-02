<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Gamegogs - La chasse aux trésors</title>
   <link rel="shortcut icon" href="favicon.ico">
   <link rel="stylesheet" href="./assets/css/reset.css">
   <link rel="stylesheet" href="./assets/css/variables.css">
   <link rel="stylesheet" href="./assets/css/global.css">
   <link rel="stylesheet" href="./assets/css/headerv1.css">
   <link rel="stylesheet" href="./assets/css/headermenu.css">
   <link rel="stylesheet" href="./assets/css/logov1.css">
   <link rel="stylesheet" href="./assets/css/buttons.css">
   <link rel="stylesheet" href="./assets/css/searchbarv1.css">
   <link rel="stylesheet" href="./assets/css/newsletter.css">
   <link rel="stylesheet" href="./assets/css/footerv1.css">
   <link rel="stylesheet" href="./assets/css/social.css">
   <link rel="stylesheet" href="./assets/css/footermenu.css">
   <link rel="stylesheet" href="./assets/css/logov3.css">
   <link rel="stylesheet" href="./assets/css/navigation.css">
   <link rel="stylesheet" href="./assets/css/top.css">
   <link rel="stylesheet" href="./assets/css/recentaddeditems.css">


</head>

<body>

   <header class="header__container">

      <div class="header__topcontainer">

         <div class="logov1">
            <div class="logo__container">
               <div class="logo__subcontainer">
                  <div class="logo__image">
                     <img src="./assets/logo-gamgogs.png" alt="logo-gamgogs">
                  </div>
                  <div class="logo__title">
                     <h3>gamegogs</h3>
                  </div>
               </div>
               <div class="logo__hook">
                  <p>
                     &quot;la chasse aux trésors&quot;
                  </p>
               </div>
            </div>
         </div>


         <div class=" buttons">
            <span class="btn btn__color-empty">Connexion</span>
            <span class="btn btn__color-orange">Inscription</span>
         </div>
      </div>


      <div class="header__bottomcontainer">
         <form class="searchbar" method="get" action="#" name="searchgg" autoComplete='on'>
            <label htmlFor="searchInGamegogs">
               <input id="searchInGamegogs" name="search" type="search" placeholder='Votre recherche dans GameGogs' />
            </label>

            <button type='submit' formAction="#">
               <img src="./assets/svg/search-solid.svg" alt="search button">
            </button>
         </form>

         <img class="burger" src="./assets/svg/bars-solid.svg" alt="menu burger" width="25px" height="25px">
      </div>

      <div class="submenu__container">
         <ul>
            <li>
               <a href="#"><img src="./assets/svg/bookshelf.svg" alt="">Collection</a>
            </li>
            <li>
               <a href="#"><img src="./assets/svg/star-solid.svg" alt="">Favoris</a>
            </li>
            <li>
               <a href="#"><img src="./assets/svg/cog.svg" alt="">Paramètres</a>
            </li>
            <li>
               <a href="#"><img src="./assets/svg/power.svg" alt="">Déconnexion</a>
            </li>
         </ul>
      </div>


      <nav id="nav__container" class="navigation">
         <ul>
            <li>
               <a class="js-icon" href="#">
                  <img src="./assets/svg/view-dashboard.svg" alt="">
               </a>
            </li>
            <li>
               <a class="js-icon" href="#">
                  <img src="./assets/svg/email.svg" alt="">
               </a>
            </li>
            <li>
               <a class="js-icon" href="#">
                  <img src="./assets/svg/cart.svg" alt="">
               </a>
            </li>
            <li id="sub-item4">
               <a class="js-icon" href="#">
                  <div class="item__container">
                     <img src="./assets/svg/account-box.svg" alt="">
                     <span class="arrow">
                        <img src="./assets/svg/chevron-up-solid.svg" alt="">
                     </span>
                  </div>
               </a>

            </li>
         </ul>
      </nav>

   </header>

   <main>
      <section class="hidden__container">

      </section>



      <section class="top__container top__image-1">
         <div class="bottom__text">
            <p>
               Le TOP 10 des jeux les plus vendus
            </p>
         </div>
      </section>


      <section class="top__container top__image-2">
         <div class="bottom__text">
            <p>
               Le TOP 10 des jeux les plus recherchés
            </p>
         </div>
      </section>


      <section class="newsletter__container">
         <!-- <div id="body-top"></div> -->
         <div class="newsletter__text">
            <p>
               Inscrivez-vous aux newsletter GameGogs - Restez à la page avec des nouvelles références, articles et plus
               encore !
            </p>
         </div>
         <form class="newsletter__subcontainer" method="get" action="#">
            <label htmlFor="emailField">E-mail* :
               <input id="emailField" name="email" type="email" placeholder='Votre adresse mail' required />
            </label>
            <button class="btn btn__color-green" type='submit' formAction="#">Suscribe</button>
         </form>
      </section>
   </main>

   <section class="recent-added-items__container">

      <div class="recent-added-items__maintitle">
         <h2>Explorer les ajouts récents</h2>
      </div>

      <div class="recent-added-items__last-items-container">
         <?php
         try {
            $connexion = new PDO('mysql:host=localhost;dbname=BD_GAMEGOGS', 'zisquier', 'pass');
        
         } catch (PDOException $getError) {
            echo 'erreur :' . $getError->getMessage();
         }
         $req = 'SELECT * FROM video_games';
         $req_results = $connexion->query($req);

         foreach ($req_results as $result) {
            echo  ' <div class="recent-added-items__last-items">';
            echo  '<div class="recent-added-items__coverimage">';
            echo  '<img src="./assets/' . $result[4] . '" alt=""></div>';
            echo  '<div class="recent-added-items__title"><h3>' . $result[1] . '</h3></div>';
            echo  '<div class="recent-added-items__subtitle"><h4>' . $result[2] . '</h4></div>';
            echo  '<div class="recent-added-items__plateform"><p>' . $result[3] . '</p></div>';
            echo  ' </div>';
         } 
         $connexion = null; 
         ?>
      </div>
      <div class="recent-added-items__footer-list">
         <p>
            voir plus d'ajout récents >
         </p>
      </div>

   </section>


   <footer class="footer__container">
      <div class="social__container">
         <div class="btn__socialfb">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
               <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
            </svg>
         </div>

         <div class="btn__applestore">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
               <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z" />
            </svg>
         </div>

         <div class="btn__googleplay">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
               <path d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.53,12.9 20.18,13.18L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z" />
            </svg>
         </div>

         <div class="btn__twitter">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
               <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
            </svg>

         </div>
      </div>


      <div class="footer__menuContainer">
         <ul class="footer__menu_ul">
            <li class="footer__menu_li">
               <span class="js-footer-menu">A propos de Gamegogs</span>
               <ul class="submenu hidden">
                  <li>
                     <a href="#">L'histoire de gamegogs</a>
                  </li>
                  <li>
                     <a href="#">Emplois</a>
                  </li>
                  <li>
                     <a href="#">API</a>
                  </li>
               </ul>
            </li>
         </ul>
         <ul class="footer__menu_ul">
            <li class="footer__menu_li">
               <span class="js-footer-menu">Voici de l'aide</span>
               <ul class="submenu hidden">
                  <li>
                     <a href="#">Aide & support</a>
                  </li>
                  <li>
                     <a href="#">Laisser une évaluation</a>
                  </li>
                  <li>
                     <a href="#">Raccourcis clavier</a>
                  </li>
                  <li>
                     <a href="#">Guide d'utilisation de la base de données</a>
                  </li>
               </ul>
            </li>
         </ul>
         <ul class="footer__menu_ul">
            <li class="footer__menu_li">
               <span class="js-footer-menu">Rejoignez-nous</span>
               <ul class="submenu hidden">
                  <li>
                     <a href="#">Démarrer</a>
                  </li>
                  <li>
                     <a href="#">S'abonner</a>
                  </li>
                  <li>
                     <a href="#">Revendeurs</a>
                  </li>
                  <li>
                     <a href="#">Contribuer</a>
                  </li>
                  <li>
                     <a href="#">Ajouter une référence</a>
                  </li>
                  <li>
                     <a href="#">Liste des contributeurs</a>
                  </li>
                  <li>
                     <a href="#">Faites de la publicité avec nous</a>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
      <div class="logo__container--footer">
         <div class="logo__title--footer">
            <h3>gamegogs</h3>
         </div>
         <div class="logo__image--footer">
            <img src="./assets/logo-gamgogs.png" alt="logo-gamgogs" width="200px" height="200px" />
         </div>
         <div class="logo__hook--footer">
            <p>
               ©2023 Gamegogs®
            </p>
         </div>
      </div>
   </footer>





   <script src="./assets/js/index.js"></script>
   <script src="./assets/js/header.js"></script>
   <script src="./assets/js/footer.js"></script>
</body>

</html>