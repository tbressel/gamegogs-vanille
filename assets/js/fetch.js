export function modulUpdate(path_php, path_css, modulID) {
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

   // Ajout de balise link dans le header
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

