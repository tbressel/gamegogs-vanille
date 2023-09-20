<section class="collection-items__header">

    <div class="collection__topheader">
        <form method="get" action="#">
            <label htmlFor="textField">
                <input id="textField" name="text" type="text" placeholder='Rechercher dans la collection' required />
            </label>
            <button type='submit' formAction="#">
                <img src="./assets/svg/search-solid.svg" alt="search button">
            </button>
        </form>
    </div>
      
    <div class="collection__middleheader">
        <div class="collection__sortlist">
            <label for="trier">Trier
                <select name="trier ">
                    <option value="titleaz">Titre A-Z</option>
                    <option value="titleza">Titre Z-A</option>
                    <option value="year">Année</option>
                    <option value="style">Genre</option>
                    <option value="machine">Plateforme</option>
                    <option value="support">Type de stokage</option>
                    <option value="editor">Editeur</option>
                    <option value="price">Prix</option>
                </select>
            </label>
        </div>
        
        <ul class="viewtype__container">
            <li>
                <img src="./assets/svg/table-cells-large-solid.svg" alt="" data-pathID="collection-view-1" data-css="collection-view"> 
            </li>
            <li>
                <img src="./assets/svg/list-solid.svg" alt=""  data-pathID="collection-view-2" data-css="collection-view">         
            </li>
            <li>         
                <img src="./assets/svg/align-justify-solid.svg" alt="" data-pathID="collection-view-3" data-css="collection-view">         
            </li>
        </ul>
    </div>
    
    
    
    
    
    
    <div class="collection__bottomheader">
        <button class="btn__collection btn__color-green" type='submit' formAction="#">Ajouter à ma collection</button>
    </div>
</section>

