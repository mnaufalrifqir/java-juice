function updateFormQuantity() {
    const quantity = document.getElementById("product-quantity").value;
    document.getElementById("form-quantity").value = quantity;
}

function increaseQuantity() {
    const quantityInput = document.getElementById("product-quantity");
    quantityInput.value = parseInt(quantityInput.value) + 1;
}

function decreaseQuantity() {
    const quantityInput = document.getElementById("product-quantity");
    const currentQuantity = parseInt(quantityInput.value);
    if (currentQuantity > 1) {
        quantityInput.value = currentQuantity - 1;
    }
}
