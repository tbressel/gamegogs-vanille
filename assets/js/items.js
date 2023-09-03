const itemsElement = document.querySelectorAll(".js-item");
itemsElement.forEach(item => {
    item.addEventListener('click', () => {
        item.querySelector('img').classList.toggle("selected__item");

        if (item.nextElementSibling.className === "display__maxitem") {
            item.nextElementSibling.className="hidden__field";
        } else {
            item.nextElementSibling.className="display__maxitem";
        }
    })
});
