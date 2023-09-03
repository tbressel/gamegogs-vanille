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

  <?php require 'include/header.php'; ?>


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
 
 
 <?php require 'include/items-added.php' ?>
 
 
 
   </main>

 


<?php require 'include/footer.php' ?>





   <script src="./assets/js/index.js"></script>
   <script src="./assets/js/header.js"></script>
   <script src="./assets/js/footer.js"></script>
   <script src="./assets/js/items.js"></script>
</body>

</html>