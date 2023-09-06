<section class="collection-items__container">


   <div class="collection-items__last-items-container">
      <?php
      try {
         $connexion = new PDO('mysql:host=localhost;dbname=BD_GAMEGOGS', 'zisquier', 'pass');
         //$connexion = new PDO('mysql:host=localhost;dbname=c1509222c_BD_GAMEGOGS', 'c1509222c_zisquier', 'creativeformation');
      } catch (PDOException $getError) {
         echo 'erreur :' . $getError->getMessage();
      }
      $req = 'SELECT * FROM video_games';
      $req_results = $connexion->query($req);



      foreach ($req_results as $result) {
         echo '<div class="collection-item__maincontainer">
   <div class="select__bar">
   <input type="checkbox" name="selected" id=""></div>
   <div class="collection-basicinfos__container">
   <div class="collection-items__title"><h3>' . $result[1] . ($result[2] ? ' - ' : '') . $result[2] . '</h3></div>
   <div class="collection-basicinfos__subcontainer">
   <div class="collection-items__plateform"><p>' . $result[3] . '</p></div>
   <div class="collection-items__editor"><p>' . $result[7] . '</p></div>
   <div class="collection-items__year"><p>' . $result[6] . '</p></div>
   </div>
   </div><div class="arrow"><img src="./assets/svg/chevron-up-solid.svg" alt=""></div>
   </div>
   </div>';
   }
      $connexion = null;
      ?>
      <!-- <div class="collection-items__footer-list">
   <p>
         voir plus d'ajout récents >
      </p>
   </div> -->

</section>