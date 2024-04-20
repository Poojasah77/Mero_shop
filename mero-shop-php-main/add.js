function addItems() {
    console.log("addItems");
    var itemName = document.getElementById("name").value;
    var itemPrice = document.getElementById("price").value;

    if (itemName == "") {
        alert("Please enter a name.");
        return;
    }

    if (itemPrice == "") {
        alert("Please enter a price.");
    }

    console.log(itemName, itemPrice);
}

function init() {
    const button = document.getElementById("add-item");
    document
        .getElementById("add-item")
        .addEventListener("click", function(event) {
            event.preventDefault();
            addItems();
        });
    console.log(button);
    console.log("init");
}

window.onload = init;