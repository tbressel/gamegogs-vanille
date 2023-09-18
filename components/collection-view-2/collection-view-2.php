<section class="collection-items__container">


   <div class="collection-items__last-items-container">
      <?php
      include('../../includes/dbconnect.php');
      $req = 'SELECT * FROM video_games';
      $req_results = $connexion->query($req);



      foreach ($req_results as $result) {
         echo '<div class="collection-item__maincontainer">
                  <div class="top-informations">
                     <div class="select__bar">
                        <input type="checkbox" name="selected" id="">
                     </div>
                     <div class="collection-items__coverimage">
                        <img src="./assets/' . $result[5] . '" alt="">
                     </div>

                     <div class="collection-basicinfos__container">
                           <div class="collection-items__title">
                              <h3>' . $result[1] . ($result[2] ? ' - ' : '') . $result[2] . '</h3>
                           </div>
                        <div class="collection-basicinfos__subcontainer">
                           <div class="collection-items__plateform">
                              <p>' . $result[3] . '</p>
                           </div>
                           <div class="collection-items__editor">
                                 <p>' . $result[7] . '</p>
                           </div>
                           <div class="collection-items__year">
                                 <p>' . $result[6] . '</p>
                           </div>
                        </div>
                     </div>
                     <div class="arrow">
                        <img id="arrow-img" src="./assets/svg/chevron-up-solid.svg" alt="">
                     </div>
                  </div>
                  <div id="collection-items-bot" class="bot-informations hidden">
                     <div class="select__bar"></div>
                        <div class="bot-items__subcontainer">
                           <div class="bot-items__prices">
                              <h4>Minimuim<span>€100,50</span></h4>
                              <h4>Moyen<span>€60,78</span></h4>
                              <h4>Maximum<span>€345,78</span></h4>
                           </div>

                           <div class="bot-items__date-state">
                              <h5>Ajouté <span>il y a 1 ans et 6 mois</span></h5>
                              <p>Très bon état - presque Mint</p>
                           </div>
                           <div>
                              <h4>Notes <span id="edit-notes"> Editer les notes </span></h4>
                           </div>
                        </div>
                     </div>
                  <div id="collection-notes" class="note-informations hidden">
                     <div class="select__bar"></div>
                        <form class="form-notes" method="get" action="#" name"text-notes">
                           <label htmlfor="input-notes">
                              <input id="input-notes" class="input-notes" name="notes" type="text">
                           </label>
                        </form>
                     </div>
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