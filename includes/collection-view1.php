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
        
        <div class="viewtype__container">
            <span id="view1">
                <img src="./assets/svg/table-cells-large-solid.svg" alt="">
            </span>
            <span id="view2">
                <img src="./assets/svg/list-solid.svg" alt="">
            </span>
            <span id="view3">
                <img src="./assets/svg/align-justify-solid.svg" alt="">
            </span>
        </div>
    </div>
    
    
    
    
    
    
    <div class="collection__bottomheader">
        <button class="btn__collection btn__color-green" type='submit' formAction="#">Ajouter à ma collection</button>
    </div>
</section>