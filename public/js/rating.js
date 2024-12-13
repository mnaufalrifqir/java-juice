// const stars = document.querySelectorAll(".stars i");
// stars.forEach((star, index1) => {
//     star.addEventListener("click", () => {
//         stars.forEach((star, index2) => {
//             index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");
//         });
//     });
// });

document.querySelectorAll('.stars i').forEach(star => {
    star.addEventListener('click', function () {
        const value = this.getAttribute('data-value');
        const type = this.getAttribute('data-type');
        const productId = this.getAttribute('data-product');
        
        if (type === 'transaction') {
            document.getElementById('transaction_rating').value = value;
        } else if (productId) {
            document.getElementById(`product_rating_${productId}`).value = value;
        }
        
        updateStars(this);
    });
});

function updateStars(element) {
    const stars = element.parentNode.querySelectorAll('i');
    const value = element.getAttribute('data-value');
    stars.forEach(star => {
        star.classList.toggle('text-[#ff9c1a]', star.getAttribute('data-value') <= value);
        star.classList.toggle('text-gray-400', star.getAttribute('data-value') > value);
    });
}