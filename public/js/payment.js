const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

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
    const shippingOption = document.getElementById("shipping_option");
    shippingOption.innerHTML = '<option value="">Loading...</option>';
    shippingOption.disabled = true;

    let request = {
        origin: "115",
        destination: document.getElementById("city").value,
        weight: document.getElementById("weight").value,
        courier: document.getElementById("courier").value,
    };

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
    .getElementById("shipping_option")
    .addEventListener("change", function () {
        const shippingOption = this.value;
        const shippingCost = parseInt(shippingOption.split(":")[1]) || 0;
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

    document.getElementById("total").value = total;
    document.getElementById("total").innerText = `Rp. ${total.toLocaleString(
        "id-ID"
    )}`;
}

document.getElementById("pay-button").addEventListener("click", function () {
    const weight = parseInt(document.getElementById("weight").value) || 0;
    const subtotal =
        parseInt(
            document
                .getElementById("subtotal")
                .textContent.replace(/[^\d]/g, "")
        ) || 0;

    const request = {
        first_name: document.getElementById("first_name").value,
        last_name: document.getElementById("last_name").value,
        street_address: document.getElementById("street_address").value,
        province: document.getElementById("province").value,
        city: document.getElementById("city").value,
        postal_code: document.getElementById("postal_code").value,
        phone_number: document.getElementById("phone_number").value,
        email: document.getElementById("email").value,
        courier: document.getElementById("courier").value,
        weight: weight,
        shipping_cost: document.getElementById("shipping_cost").value,
        subtotal: subtotal,
        total: document.getElementById("total").value,
    };

    console.log(request);

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
            console.log(result);
            snap.pay(result.snap_token, {
                onSuccess: function (result) {
                    alert("Payment success!");
                },
                onPending: function (result) {
                    alert("Payment pending.");
                },
                onError: function (result) {
                    alert("Payment failed.");
                },
            });
        })
        .catch((error) => console.error("Error:", error));
});

// document.getElementById('pay-button').onclick = function(){
//     // SnapToken acquired from previous step
//     snap.pay('$transaction->payment_url', {
//       // Optional
//       onSuccess: function(result){
//         /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
//       },
//       // Optional
//       onPending: function(result){
//         /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
//       },
//       // Optional
//       onError: function(result){
//         /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
//       }
//     });
//   };
