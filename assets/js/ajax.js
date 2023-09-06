function modulUpdate(path_php,path_css,modulID) {
      // On Créer une instance de l'objet XMLHttpRequest 
      let xhr = new XMLHttpRequest();
      // Configurez la requête AJAX. (requette asynchrone)
      xhr.open('GET', path_php, true);
      // Définissez une fonction de rappel pour gérer la réponse.
      xhr.onload = function() {
         if (xhr.status === 200) {
            // Mettez à jour le contenu du module avec la réponse reçue.
            document.getElementById(modulID).innerHTML = xhr.responseText;
         }
      };
      // Envoyez la requête.
      xhr.send();





      // ajout de balise link dans le header
      if (!path_css) return;

      const tag = document.createElement("link");
      const cssLinks = document.getElementsByTagName("link");
      let exist = false;
      
      tag.setAttribute('rel','stylesheet');
      tag.setAttribute('href',path_css);
      
      for (const link of cssLinks) {
         if (link.getAttribute("href") === tag.getAttribute("href")) {
            exist = true;
            break;
         }
      }

      if (!exist) {
         document.getElementById("head").append(tag);
      }

   }
