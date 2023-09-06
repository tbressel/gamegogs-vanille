
   <?php
   try {
       $connexion = new PDO('mysql:host=localhost;dbname=BD_GAMEGOGS', 'zisquier', 'pass');

   } catch (PDOException $getError) {
      echo 'erreur :' . $getError->getMessage();
   }

   ?>