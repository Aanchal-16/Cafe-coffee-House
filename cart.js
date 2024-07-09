/*let carts = document.querySelectorAll('.addcart');
let products=[
{
    name:'expresso',
    tag:'expresso',
    price:200,
    inCart:0
},
{
    name:'cappuccino',
    tag:'cappuccino',
    price:200,
    inCart:0
},
{
    name:'lattee',
    tag:'lattee',
    price:200,
    inCart:0
},
{
    name:'flat white',
    tag:'flat white',
    price:200,
    inCart:0
},
{
    name:'cold brew',
    tag:'cold brew',
    price:200,
    inCart:0
},
{
    name:'cafe machiato',
    tag:'cafe machiato',
    price:200,
    inCart:0
}
];
console.log("running");
for(let i=0; i< carts.length; i++){
    console.log("my loop");
    carts[i].addEventListener('click',() =>{

        console.log("addd to cart");
        cartNumbers();
    })
}

function onLoadCartNumbers(){
    let productNumbers= localStorage.getItem('cartNumbers');
    if(productNumbers){
        document.querySelector('.cart span').textContent=productNumbers;

    }

}

function cartNumbers(){
    let productNumbers= localStorage.getItem('cartNumbers');

    console.log("productNumbers");
    productNumbers = parseInt(productNumbers);
    if(productNumbers){
        localStorage.setItem('cartNumbers',productNumbers + 1);
        document.querySelector('.cart span').textContent=productNumbers+1;

    }else{
        localStorage.setItem('cartNumbers',productNumbers , 1);
        document.querySelector('.cart span').textContent=1;

    }

    localStorage.setItem('cartNumbers',1); 

}
onLoadCartNumbers();*/
document.addEventListener('DOMContentLoaded', function () {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartItems = document.querySelector('.cart-items');
    const cartTotal = document.querySelector('.cart-total');
  
    let cart = [];
    let total = 0;
  
    addToCartButtons.forEach(button => {
      button.addEventListener('click', addToCart);
    });
  
    function addToCart(event) {
      const productId = event.target.getAttribute('data-id');
      const productName = event.target.parentElement.querySelector('h2').innerText;
      const productPrice = parseFloat(event.target.parentElement.querySelector('p').innerText.replace('Price: $', ''));
  
      cart.push({ id: productId, name: productName, price: productPrice });
      total += productPrice;
  
      updateCart();
    }
  
    function updateCart() {
      cartItems.innerHTML = '';
      cart.forEach(item => {
        const li = document.createElement('li');
        li.classList.add('cart-item');
        li.innerHTML = `
          <img src="black coffee${item.id}.jpg" alt="${item.name}">
          <span>${item.name}</span>
          <span>$${item.price}</span>
        `;
        cartItems.appendChild(li);
      });
  
      cartTotal.innerText = total.toFixed(2);
    }
  });
  
