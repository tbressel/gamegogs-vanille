<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Gamegogs - La chasse aux trésors</title>
   <link rel="shortcut icon" href="favicon.ico">

   <?php
   // foreach(glob("assets/css/*.css") as $cssFile) {
   //    echo  '<link rel="stylesheet" href="' . $cssFile . '">';
   // };
   ?>

   <link rel="stylesheet" href="./assets/css/reset.css">
   <link rel="stylesheet" href="./assets/css/variables.css">
   <link rel="stylesheet" href="./assets/css/global.css">
   <link rel="stylesheet" href="./assets/css/buttons.css">


   <link rel="stylesheet" href="./assets/css/headerv1.css">
   <link rel="stylesheet" href="./assets/css/headermenu.css">
   <link rel="stylesheet" href="./assets/css/logov1.css">
   <link rel="stylesheet" href="./assets/css/searchbarv1.css">


   <!-- <link rel="stylesheet" href="./assets/css/newsletter.css"> -->
   <link rel="stylesheet" href="./assets/css/footerv1.css">
   <link rel="stylesheet" href="./assets/css/social.css">
   <link rel="stylesheet" href="./assets/css/footermenu.css">
   <link rel="stylesheet" href="./assets/css/logov3.css">
   <link rel="stylesheet" href="./assets/css/navigation.css">
   <!-- <link rel="stylesheet" href="./assets/css/top.css"> -->
   <!-- <link rel="stylesheet" href="./assets/css/recentaddeditems.css"> -->
   <link rel="stylesheet" href="./assets/css/collection.css">


</head>

<body>
   <!-- Le header -->
   <?php include('./includes/header.php'); ?>
   <?php include('./includes/collection-view1.php');?>
   <!-- Le main -->
   <main>
      <section class="hidden__container"></section>
      <?php
   include('./includes/items-added.php');
      ?>
    

      <section class="collection-items__container">


      </section>

























   </main>
   <!-- Le footer -->
   <?php include('./includes/footer.php') ?>
   <script src="./assets/js/index.js"></script>
   <script src="./assets/js/header.js"></script>
   <script src="./assets/js/footer.js"></script>
   <script src="./assets/js/items.js"></script>
</body>

</html>