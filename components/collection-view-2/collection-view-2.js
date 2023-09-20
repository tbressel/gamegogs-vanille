
let globalbotInfoContainer = null;
let globalNotesInfoContainer = null;

// Listen if any arrow-img is clicked
document.getElementById("collection-view-2").addEventListener('click', (event) => {
   if (event.target.getAttribute("id") === "arrow-img") {
      
      // switch class to change arrow direction
      event.target.classList.toggle("arrow_change");

      // And sibling top-information and then bot-informations to toggle hidden class
      let botInfoContainer = event.target.closest(".top-informations").nextElementSibling;
      console.log('Element ciblé : ',botInfoContainer);
      botInfoContainer.classList.toggle('hidden');
      globalbotInfoContainer = botInfoContainer;
      closeNotesContainer(botInfoContainer)
   }
   // Lisen if inside this event the element edit-note is clicked
      if (event.target.getAttribute("id") === "edit-notes") {
      
      // The sibling parent element 
      let notesInfoContainer = event.target.closest('.bot-informations').nextElementSibling;
      console.log('Element ciblé : ',notesInfoContainer);
      notesInfoContainer.classList.toggle('hidden');
   };

      if (event.target.getAttribute('id') === 'textarea-erase') {
         event.preventDefault();
        eraseTextareaContent(event.target);
        closeNotesContainer(globalbotInfoContainer);
      }
})




function eraseTextareaContent(target) {
   target.parentElement.firstElementChild.firstElementChild.value="";
   console.log('contenu de <textarea> est effacé')
}


function closeNotesContainer(element) {
   // Close the notes container if main section of the item is closed
   if (element.nextElementSibling.classList.contains('hidden')) {
      return;
   } else {
      element.nextElementSibling.classList.add('hidden');
   }
}
