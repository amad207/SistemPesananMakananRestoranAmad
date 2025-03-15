let cart = [];
let totalPrice = 0;

// Fungsi tambah ke troli
function addToCart(itemName, price) {
    cart.push({ name: itemName, price: price });
    totalPrice += price;
    updateCart();
}

// Fungsi kemas kini troli
function updateCart() {
    const cartItems = document.getElementById('cart-items');
    const totalElement = document.getElementById('total-price');

    cartItems.innerHTML = "";
    cart.forEach((item, index) => {
        cartItems.innerHTML += `<li>${item.name} - RM${item.price.toFixed(2)} <button onclick="removeFromCart(${index})">Buang</button></li>`;
    });

    totalElement.textContent = `Jumlah Harga: RM${totalPrice.toFixed(2)}`;
}

// Fungsi buang dari troli
function removeFromCart(index) {
    totalPrice -= cart[index].price;
    cart.splice(index, 1);
    updateCart();
}

// Fungsi checkout
function checkout() {
    if (cart.length === 0) {
        alert('Troli kosong!');
        return;
    }
    alert(`Pesanan diterima! Jumlah yang perlu dibayar: RM${totalPrice.toFixed(2)}`);
    cart = [];
    totalPrice = 0;
    updateCart();
}
