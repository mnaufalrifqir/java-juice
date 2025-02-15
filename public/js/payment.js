const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

document.getElementById("province").addEventListener("change", function () {
    const provinceId = this.value.split(":")[0];    
    const citySelect = document.getElementById("city");
    const courierSelect = document.getElementById("courier");
    const shippingOption = document.getElementById("shipping_option");

    courierSelect.innerHTML = '<option value="">Select Courier</option>';
    courierSelect.disabled = true;

    shippingOption.innerHTML = '<option value="">Select Shipping Option</option>';
    shippingOption.disabled = true;

    citySelect.innerHTML = '<option value="">Loading...</option>';
    citySelect.disabled = true;

    if (provinceId) {
        fetch(`/cities/${provinceId}`)
            .then((response) => response.json())
            .then((data) => {
                citySelect.innerHTML = '<option value="">Select City</option>';
                data.forEach((city) => {
                    citySelect.innerHTML += `<option value="${city.city_id}:${city.type} ${city.city_name}">${city.type} ${city.city_name}</option>`;
                });
                citySelect.disabled = false;
            })
            .catch((error) => console.error("Error fetching cities:", error));
    } else {
        citySelect.innerHTML = '<option value="">Select City</option>';
        citySelect.disabled = true;
    }
});

document.getElementById("city").addEventListener("change", function () {
    const courierSelect = document.getElementById("courier");
    const shippingOption = document.getElementById("shipping_option");

    shippingOption.innerHTML = '<option value="">Select Shipping Option</option>';
    shippingOption.disabled = true;

    courierSelect.disabled = true;

    if (this.value) {
        courierSelect.innerHTML = '<option value="">Select Courier</option>';
        courierSelect.innerHTML += '<option value="jne">JNE</option>';
        courierSelect.innerHTML += '<option value="jnt">JNT</option>';
        courierSelect.innerHTML += '<option value="tiki">TIKI</option>';
        courierSelect.disabled = false;
    } else {
        courierSelect.innerHTML = '<option value="">Select Courier</option>';
        courierSelect.disabled = true;
    }
});


document.getElementById("courier").addEventListener("change", function () {
    const shippingOption = document.getElementById("shipping_option");
    const courier = this.value;

    shippingOption.innerHTML = '<option value="">Loading...</option>';
    shippingOption.disabled = true;

    let request = {
        origin: "115",
        destination: document.getElementById("city").value.split(":")[0],
        weight: document.getElementById("weight").value,
        courier: document.getElementById("courier").value,
    };

    console.log(request);

    fetch(`/shipping-cost`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken,
        },
        body: JSON.stringify(request),
    })
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            shippingOption.innerHTML =
                '<option value="">Select Shipping Option</option>';
            data.forEach((shipping) => {
                const costDetail = shipping.cost[0];
                shippingOption.innerHTML += `<option value="${courier}:${shipping.service}:${costDetail.value}">${shipping.description} - Rp${costDetail.value} (ETD: ${costDetail.etd} days)</option>`;
            });
            shippingOption.disabled = false;
        })
        .catch((error) =>
            console.error("Error fetching Shipping Option:", error)
        );
});

document
    .getElementById("shipping_option")
    .addEventListener("change", function () {
        const shippingOption = this.value;
        const shippingCost = parseInt(shippingOption.split(":")[2]) || 0;
        document.getElementById(
            "shipping_cost"
        ).innerText = `Rp. ${shippingCost.toLocaleString("id-ID")}`;
        document.getElementById("shipping_cost").value = shippingCost;
        calculateTotal();
    });

function calculateTotal() {
    const subtotal =
        parseInt(
            document
                .getElementById("subtotal")
                .textContent.replace(/[^\d]/g, "")
        ) || 0;
    const shippingCost =
        parseInt(document.getElementById("shipping_cost").value) || 0;
    const total = subtotal + shippingCost;

    document.getElementById("total").innerText = `Rp. ${total.toLocaleString(
        "id-ID"
    )}`;
}

document.getElementById("pay-button").addEventListener("click", function () {
    const request = {
        first_name: document.getElementById("first_name").value,
        last_name: document.getElementById("last_name").value,
        street_address: document.getElementById("street_address").value,
        province: document.getElementById("province").value,
        city: document.getElementById("city").value,
        postal_code: document.getElementById("postal_code").value,
        phone_number: document.getElementById("phone_number").value,
        email: document.getElementById("email").value,
        courier: document.getElementById("shipping_option").value,
        shipping_cost: parseInt(document.getElementById("shipping_cost").value) || 0,
    };

    fetch('/payment', {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken, 
        },
        body: JSON.stringify(request),
    })
        .then((response) => response.json())
        .then((result) => {
            window.snap.pay(result.snap_token, {
                onSuccess: function () {
                    window.location.href = "/success";
                },
                onPending: function () {
                    window.location.href = "/orders";
                },
                onError: function () {
                    window.location.href = "/orders";
                },
                onClose: function () {
                    window.location.href = "/orders";
                }
            });
        })
        .catch((error) => console.error("Error:", error));
});
    

