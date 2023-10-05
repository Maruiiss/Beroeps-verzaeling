
document.addEventListener("DOMContentLoaded", function () {

    const itemContainer = document.getElementById("item-list");

    for (let i = 1; i <= 8; i++) {
        const itemCard = document.createElement("div");
        itemCard.classList.add("item-card");
        itemCard.innerHTML = `
            <h3>Verzamelitem ${i}</h3>
            <p>Beschrijving van verzamelitem ${i}</p>
            <button onclick="bestelItem(${i})">Bestel</button>
        `;
        itemContainer.appendChild(itemCard);
    }

    // Voorbeeldfunctie om een item te bestellen
    function bestelItem(itemId) {
        alert(`Je hebt verzamelitem ${itemId} besteld!`);
    }
});
