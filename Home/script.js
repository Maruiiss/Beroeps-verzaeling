document.addEventListener("DOMContentLoaded", function () {
    const itemContainer = document.getElementById("item-list");

    for (let i = 1; i <= 8; i++) {
        const itemCard = document.createElement("div");
        itemCard.classList.add("item-card");
        itemCard.innerHTML = `
            <h3>Alcoholische Drank ${i}</h3>
            <p>Beschrijving van drank ${i}</p>
            <button onclick="bestelItem(${i})">Bestel</button>
        `;
        itemContainer.appendChild(itemCard);
    }


    function bestelItem(itemId) {
        alert(`Je hebt alcoholische drank ${itemId} besteld!`);
    }
});
