
document.addEventListener('DOMContentLoaded', () => {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartItemsContainer = document.getElementById('cart-items');
    const checkoutButton = document.getElementById('checkout-button');
    let cart = [];

    // Add to cart functionality
    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const productId = button.dataset.productId;
            const productName = button.dataset.productName;
            const productPrice = parseFloat(button.dataset.productPrice);

            // Check if product is already in cart
            const existingProduct = cart.find(item => item.id === productId);
            if (existingProduct) {
                existingProduct.quantity += 1;
            } else {
                cart.push({ id: productId, name: productName, price: productPrice, quantity: 1 });
            }

            updateCartUI();
        });
    });

    // Update cart UI
    function updateCartUI() {
        cartItemsContainer.innerHTML = '';

        cart.forEach(item => {
            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            cartItem.innerHTML = `
                <span>${item.name}</span>
                <span>Precio: $${item.price.toFixed(2)}</span>
                <span>Cantidad: ${item.quantity}</span>
            `;
            cartItemsContainer.appendChild(cartItem);
        });
    }

    // Checkout functionality
    if (checkoutButton) {
        checkoutButton.addEventListener('click', () => {
            if (cart.length === 0) {
                alert('El carrito está vacío.');
                return;
            }

            fetch('process_order.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ cart })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Pedido realizado con éxito.');
                        cart = [];
                        updateCartUI();
                    } else {
                        alert('Ocurrió un error al procesar el pedido.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error de conexión. Intente nuevamente más tarde.');
                });
        });
    }
});
