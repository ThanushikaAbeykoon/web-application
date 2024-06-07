// Sample products
const products = [
    { id: 1, name: 'Classic Cheese Pizza', price: 2500 },
    { id: 2, name: 'Supreme Pizza', price: 2200  },
    { id: 3, name: 'BBQ Chicken Pizza', price: 1800 },
    { id: 4, name: 'Veg Pizza', price: 1500  },
    { id: 5, name: 'Margherita Pizza', price:2800  },
    { id: 6, name: 'Chicken Burger', price: 900 },
    { id: 7, name: 'Classic Smashed Burger', price: 1100 },
    { id: 8, name: 'Veg Burger', price: 800 },
    { id: 9, name: 'Hamburger', price: 1000  },
    { id: 10, name: 'Cheese Burger', price: 1300  },
    { id: 11, name: 'Beked Feta Pasta', price: 1200},
    { id: 12, name: 'Cheese Pasta', price: 1500},
    { id: 13, name: 'Chicken Pasta', price: 1000},
    { id: 14, name: 'Creamy Tomato Chicken Pasta', price: 1150 },
    { id: 15, name: 'Pasta Bolognese', price:1400 },
    { id: 16, name: 'Healthy Avacado Toast', price: 900},
    { id: 17, name: 'Avacado Egg Toast', price: 1250},
    { id: 18, name: 'Smoked Salmon Avacado Toast', price: 680},
    { id: 19, name: 'Spicy Tuna Sushi Burrito', price:1400 },
    { id: 20, name: 'Sushi Burritos', price:1300 },
    { id: 21, name: 'Ginger Sushi Burrito', price:1800 },
    { id: 22, name: 'Acai Smoothie Bowl', price: 2100},
    { id: 23, name: 'Peanut Butter Acai Bowl', price:1900  },
    { id: 24, name: 'Mix Acai Bowl', price:1300},
    { id: 25, name: 'Chicken Quinoa Bowl', price: 1600},
    { id: 26, name: 'Greek Quinoa Salad Bowl', price: 1350},
    { id: 27, name: 'Malaysian Laksa', price: 1100},
    { id: 28, name: 'Spicy Chicken Laksa', price:1700 },
    { id: 29, name: 'Sea food Laksa', price:1300},
    { id: 30, name: 'Lamb Tacos', price:1400},
    { id: 31, name: 'Beef Tacos', price:1800},
    { id: 32, name: 'Birria Tacos', price:1520},
    { id: 33, name: 'Crispy French Fries', price: 700},
    { id: 34, name: 'Hot Coffee', price: 600},
    { id: 35, name: 'Black Coffee', price: 800},
    { id: 36, name: 'Iced Coffe with Caramel', price: 900},
    { id: 37, name: 'Vanilla Matcha Latte with Almond Milk', price:1500},
    { id: 38, name: 'Kombucha', price:1300 },
    { id: 39, name: 'Strawberry Smoothie', price:1350 },
    { id: 40, name: 'Green Smoothie', price: 1400},
    { id: 41, name: 'Mixed Berry Smoothie with Yogurt', price: 1700},
    { id: 42, name: 'Peanut Butter Banana Smoothie', price: 1200},
    { id: 43, name: 'Chocolate Banana Smoothie', price:1200},
    { id: 44, name: 'Orange Infused Water', price:550},
    { id: 45, name: 'Coconut Water', price:300},
    { id: 46, name: 'Green Tea', price:200},
    { id: 47, name: 'Vanilla Chai Tea White Russian', price: 400},
    { id: 48, name: 'Iced Chai Tea', price: 700},
    { id: 49, name: 'Green Vegitable Juices', price: 500},
    { id: 50, name: 'Carrot Juice', price:600},
    { id: 51, name: 'Sparkling water', price:150},
    { id: 52, name: 'Fresh Milk', price: 300},
    { id: 53, name: 'Chocolate Milk', price:350},
];

let cartItems = [];

// Function to display products
function displayProducts() {
    const productList = document.querySelector('.product-list');
    productList.innerHTML = '';

    products.forEach(product => {
        const productDiv = document.createElement('div');
        productDiv.innerHTML = `
            <p>${product.name} - rs.${product.price}</p>
            <button onclick="addToCart(rs.${product.id})">Add to Cart</button>
        `;
        productList.appendChild(productDiv);
    });
}

// Function to add items to cart
function addToCart(productId) {
    const product = products.find(item => item.id === productId);
    if (product) {
        cartItems.push({ ...product, quantity: 1 });
        displayCart();
    }
}

// Function to display cart items
function displayCart() {
    const cartItemsDiv = document.querySelector('#cart-items');
    cartItemsDiv.innerHTML = '';

    let total = 0;

    cartItems.forEach(item => {
        const itemDiv = document.createElement('div');
        const totalPrice = item.price * item.quantity;
        total += totalPrice;

        itemDiv.innerHTML = `
            <p>${item.name} - rs.${item.price} x rs.${item.quantity} = rs.${totalPrice}</p>
            <input type="number" min="1" value="rs.${item.quantity}" onchange="updateQuantity(rs.${item.id}, this.value)">
            <button onclick="removeFromCart(${item.id})">Remove</button>
        `;
        cartItemsDiv.appendChild(itemDiv);
    });

    document.getElementById('cart-total').innerText = `rs.${total.toFixed(2)}`;
}

// Function to update item quantity in cart
function updateQuantity(productId, quantity) {
    const itemIndex = cartItems.findIndex(item => item.id === productId);
    if (itemIndex !== -1) {
        cartItems[itemIndex].quantity = parseInt(quantity);
        displayCart();
    }
}

// Function to remove item from cart
function removeFromCart(productId) {
    cartItems = cartItems.filter(item => item.id !== productId);
    displayCart();
}

// Function to initiate checkout (can be updated as needed)
function checkout() {
    // Implement checkout logic here
    console.log('Initiating checkout:', cartItems);
}

// Display products when the page loads
displayProducts();
