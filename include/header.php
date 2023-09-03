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