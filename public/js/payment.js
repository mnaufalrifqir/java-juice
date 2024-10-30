document.getElementById("province").addEventListener("change", function () {
    const provinceId = this.value;
    const citySelect = document.getElementById("city");
    citySelect.innerHTML = '<option value="">Loading...</option>';
    citySelect.disabled = true;

    if (provinceId) {
        fetch(`/cities/${provinceId}`)
            .then((response) => response.json())
            .then((data) => {
                citySelect.innerHTML = '<option value="">Select City</option>';
                data.forEach((city) => {
                    citySelect.innerHTML += `<option value="${city.city_id}">${city.type} ${city.city_name}</option>`;
                });
                citySelect.disabled = false;
            })
            .catch((error) => console.error("Error fetching cities:", error));
    } else {
        citySelect.innerHTML = '<option value="">Select City</option>';
        citySelect.disabled = true;
    }
});

document.getElementById("courier").addEventListener("change", function () {
    const shippingOption = document.getElementById("shipping-option");
    shippingOption.innerHTML = '<option value="">Loading...</option>';
    shippingOption.disabled = true;

    let request = {
        origin: "115",
        destination: document.getElementById("city").value,
        weight: document.getElementById("weight").value,
        courier: document.getElementById("courier").value,
    };

    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

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
                shippingOption.innerHTML += `<option value="${shipping.service}:${costDetail.value}">${shipping.description} - Rp${costDetail.value} (ETD: ${costDetail.etd} days)</option>`;
            });
            shippingOption.disabled = false;
        })
        .catch((error) =>
            console.error("Error fetching Shipping Option:", error)
        );
});

document
    .getElementById("shipping-option")
    .addEventListener("change", function () {
        const shippingOption = this.value;
        const shippingCost = parseInt(shippingOption.split(":")[1]) || 0;
        document.getElementById(
            "shipping-cost"
        ).innerText = `Rp. ${shippingCost.toLocaleString("id-ID")}`;
        document.getElementById("shipping-cost").value = shippingCost;
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
        parseInt(document.getElementById("shipping-cost").value) || 0;
    const total = subtotal + shippingCost;
    console.log(subtotal, shippingCost, total);
    document.getElementById("total").innerText = `Rp. ${total.toLocaleString(
        "id-ID"
    )}`;
}

document.getElementById("pay-button").onclick = function () {
    snap.pay("{{$snapToken}}", {
        onSuccess: function (result) {
            console.log("success");
            console.log(result);
        },
        onPending: function (result) {
            console.log("pending");
            console.log(result);
        },
        onError: function (result) {
            console.log("error");
            console.log(result);
        },
    });
};
