<section class="collection-items__container">


   <div class="collection-items__last-items-container">
      <?php
      include('../../includes/dbconnect.php');
      $req = 'SELECT * FROM video_games';
      $req_results = $connexion->query($req);



      foreach ($req_results as $result) {
         echo '<div class="collection-item__maincontainer">
   <div class="select__bar">
   <input type="checkbox" name="selected" id=""></div>
   <div class="collection-items__coverimage">
   <img src="./assets/' . $result[5] . '" alt=""></div>
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