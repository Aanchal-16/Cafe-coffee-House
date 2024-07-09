<h2>Your Cart</h2>
                <fieldset>
                <div id="cart">
                    <ul id="cart-items"></ul>
                    <p>Total:   Rs<span id="cart-total">      0      </span></p>
                </div>
                <a href="paymentcoffee.html"><button>Pay now</button></a>
                </fieldset>
            
                <script>
                    const cartItems = {};
                    const cartTotalElement = document.getElementById("cart-total");
                    const cartItemsElement = document.getElementById("cart-items");
            
                    function addToCart(itemName, price) {
                        if (cartItems[itemName]) {
                            cartItems[itemName].quantity++;
                        } else {
                            cartItems[itemName] = { quantity: 1, price: price };
                        }
                        updateCart();
                    }
            
                    function updateCart() {
                        cartItemsElement.innerHTML = "";
                        let total = 0;
                        for (const itemName in cartItems) {
                            const { quantity, price } = cartItems[itemName];
                            total += quantity * price;
                            const cartItemElement = document.createElement("li");
                            cartItemElement.textContent = `${itemName} -  Quantity: ${quantity} -  Price:   Rs${quantity * price}`;
                            cartItemsElement.appendChild(cartItemElement);
                        }
                        cartTotalElement.textContent = total.toFixed(2);
                    }
                </script>