<!DOCTYPE html>
<html lang="fr">

<head id="head">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Gamegogs - La chasse aux trésors</title>
   <link rel="shortcut icon" href="favicon.ico">
   <!-- Global CSS -->
   <link rel="stylesheet" href="./assets/css/reset.css">
   <link rel="stylesheet" href="./assets/css/variables.css">
   <link rel="stylesheet" href="./assets/css/global.css">
   <link rel="stylesheet" href="./assets/css/buttons.css">

   <!-- Header Menu -->
   <link rel="stylesheet" href="./components/header/headerv1.css">
   <link rel="stylesheet" href="./components/header/headermenu.css">
   <link rel="stylesheet" href="./components/header/logov1.css">
   <link rel="stylesheet" href="./components/header/searchbarv1.css">
   <link rel="stylesheet" href="./components/header/navigation.css">

   <!-- Footer Menu -->
   <link rel="stylesheet" href="./components/footer/footerv1.css">
   <link rel="stylesheet" href="./components/footer/social.css">
   <link rel="stylesheet" href="./components/footer/footermenu.css">
   <link rel="stylesheet" href="./components/footer/logov3.css">





</head>

<body>
   <!-- Le header -->
   <?php include('./components/header/header.php'); ?>

   <section class="hidden__container"></section>
   <main id="modules-content">


      <div id="collection-header" class="js-modulenode"></div>
      <div id="collection-view-1" class="js-modulenode"></div>
      <div id="collection-view-2" class="js-modulenode"></div>
      <div id="collection-view-3" class="js-modulenode"></div>

      <div id="top-search-module" class="js-modulenode"></div>
      <div id="top-sells-module" class="js-modulenode"></div>
      <div id="session-module" class="js-modulenode"></div>
      <div id="newsletter-module" class="js-modulenode"></div>
   </main>

   <!-- Le footer -->
   <?php include('./components/footer/footer.php'); ?>

<!-- 
   <button onclick="actualiserModule()">Actualiser le Module</button>

   <div id="module"></div> 


   </div>-->


   <!-- Javascript -->
   <script type="module" src="./assets/js/index.js"></script>
</body>

</html>