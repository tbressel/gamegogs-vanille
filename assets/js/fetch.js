
// this function take php page path, its css path and the id where de module must be sent
export function modulUpdate(path_php, path_css, modulID, type) {
   // Fetching URL of the php module
   fetch(path_php)
      .then(response => {
         if (!response.ok) {
            throw new Error(`Erreur : ${response.status}`);
         }
         // Catch response with a text format
         return response.text();
      })
      .then(data => {
         // Update Module with data
         document.getElementById(modulID).innerHTML = data;
      })
      .catch(error => {
         console.error('Erreur :', error.message);
      });

   // Adding of <link> tag in the head
   console.log("Le chemin CSS récupéré est ", path_css)

   if (!path_css) return;

   // create a <link> tag 
   const tag = document.createElement("link");
   console.log("Création de l'élément ", tag)

   // get an array with all <head> nodes 
   const cssLinks = document.getElementsByTagName("link");
   console.table("Je récupère en tableau tous les élement link", cssLinks)
   let exist = false;

   tag.setAttribute('rel', 'stylesheet');
   tag.setAttribute('data-css', type);
   tag.setAttribute('href', path_css);

   console.log("Le noeud créé donne çà : ", tag)

   for (const link of cssLinks) {
      // cheking if a link element already exists
      console.log("Parcours du tableau cssLinks")
      console.log(link)

      console.log("link en cours est : ", link.getAttribute("href"));
      console.log("tag créé est : ", tag.getAttribute("href"));



      if (link.getAttribute("href") === tag.getAttribute("href")) {
         exist = true;
         break;
      } else {
         console.log('aucun correspondance trouvé')
         // but if it not exists (existe = false) then write the element into the DOM
         if (!exist) {
            console.log("Cet élément n'existe pas dans le DOM on va donc le créer");
            console.log("Mais existe t-il un element different maus du meme type css");

            // and check if there is the same kind of element to replace
            for (const link of cssLinks) {
               console.log("link depuis <head> : ", link.getAttribute("data-css"), "link proposé : ", tag.getAttribute("data-css"))

               if (link.getAttribute("data-css") === tag.getAttribute("data-css")) {
                  console.warn("Une correspondance vient d'être trouvé !");
                  console.log("link depuis <head> : ", link.getAttribute("data-css"), "link proposé : ", tag.getAttribute("data-css"))
                  document.getElementById('head').replaceChild(tag, link)


                  // break;
               }
            }
            document.getElementById("head").append(tag);
         }
      }
   }

}

