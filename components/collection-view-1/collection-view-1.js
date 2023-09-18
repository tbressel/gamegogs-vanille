
document.getElementById("collection-view-1").addEventListener('click', (event) => {
    const element = event.target
    if (element.getAttribute("id") !== "js-maxclic") {
        return;
    }



 element.classList.toggle("selected__item");
 const parentElement = element.parentNode.parentNode;
 if (parentElement.nextElementSibling.className === "display__maxitem") {
              parentElement.nextElementSibling.className="hidden__field";
          } else {
              parentElement.nextElementSibling.className="display__maxitem";
          }
});
