document.addEventListener("DOMContentLoaded", function () {
    const itemContainer = document.getElementById("item-list");

    function bestelItem(itemName) {
        const alertMessage = document.createElement("div");
        alertMessage.classList.add("alert");
        alertMessage.textContent = `Je bestelling is verwerkt, geniet ervan!`;

        document.body.appendChild(alertMessage);

        alertMessage.style.display = "block";
        setTimeout(() => {
            alertMessage.style.display = "none";
            document.body.removeChild(alertMessage);
        }, 3000);
    }

    const bestelButtons = document.querySelectorAll(".bestel-button");
    bestelButtons.forEach(button => {
        button.addEventListener("click", function () {
            const itemName = this.getAttribute("data-item-name");
            bestelItem(itemName);
        });
    });

    const currentDate = new Date();
    const dateElement = document.getElementById("date");
    dateElement.textContent = currentDate.toLocaleString();

    const alert = document.getElementById("alert");
    alert.style.display = "none";

    document.getElementById("alcohol-form").addEventListener("submit", function (event) {
        event.preventDefault();
        alert.style.display = "block";
        setTimeout(() => {
            alert.style.display = "none";
        }, 3000);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const itemContainer = document.getElementById("item-list");

    function bestelItem(itemName) {
        const alertMessage = document.createElement("div");
        alertMessage.classList.add("alert");
        alertMessage.textContent = `Je bestelling is verwerkt, geniet ervan!`;

        document.body.appendChild(alertMessage);

        alertMessage.style.display = "block";
        setTimeout(() => {
            alertMessage.style.display = "none";
            document.body.removeChild(alertMessage);
        }, 3000);
    }

    function clearDivs() {
        while (itemContainer.firstChild) {
            itemContainer.removeChild(itemContainer.firstChild);
        }
    }

    const clearDivsButton = document.getElementById("clear-button");
    clearDivsButton.addEventListener("click", clearDivs);
});
