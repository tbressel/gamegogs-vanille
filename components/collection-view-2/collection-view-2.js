document.getElementById("collection-view-2").addEventListener('click', (event) => {
   if (event.target.getAttribute("id") === "arrow-img") {
      event.target.classList.toggle("arrow_change");
      const newTargetElement = event.target.parentElement.parentElement.nextElementSibling;  
      newTargetElement.classList.toggle('hidden');
   }

   if (event.target.getAttribute("id") === "edit-notes") {
   const newTargetElement = event.target.parentElement.parentElement.parentElement.parentElement.nextElementSibling;
   console.log(newTargetElement)
      newTargetElement.classList.toggle('hidden');
   };
});




