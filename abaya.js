let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');
openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})
let products = [
    {
        id: 1,
        image: 'img140.jpg',
        price: 299
    },
    {
        id: 2,
      
        image: 'img141.jpg',
        price: 199
    },
    {
        id: 3,
     
        image: 'img142.jpg',
        price: 230
    },
    {
        id: 4,
     
        image: 'img139.jpg',
        price: 250   },
    {
        id: 5,
     
        image: 'img130.jpg',
        price: 199
    },
    {
        id: 5,
     
        image: 'img131.jpg',
        price: 199
    },
    {
        id: 6,

        image: 'img132.jpg',
        price: 250
    },
    {
        id: 7,
     
        image: 'img133.jpg',
        price: 450
    },
    {
        id: 8,
        image: 'img134.jpg',
        price: 399
    },
    {
        id: 9,
     
        image: 'img135.jpg',
        price: 350
    },
    {
        id: 10,
     
        image: 'img136.jpg',
        price: 399
    },
    {
        id: 11,
     
        image: 'img137.jpg',
        price: 320
    },
    {
        id: 12,
     
        image: 'img138.jpg',
        price: 299
    }
    ,
    {
        id: 11,
     
        image: '145.jpg',
        price: 320
    }
    ,
    {
        id: 11,
     
        image: '146.jpg',
        price: 320
    }
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}">
           
            <div class="price">${value.price.toLocaleString()} DH</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        listCards[key] = products[key];
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
               
                <div>${value.price.toLocaleString()}DH</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString()+"DH";
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    console.log(key, quantity);
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price= quantity * products[key].price;
    }
    reloadCard();
}
let btn=document.getElementById('btn');
window.onscroll=function(){
    if(scrollY>=800){
        btn.style.display='block';

    }
    else{
        btn.style.display='none';
    }
}
btn.onclick=function(){
    scroll({
        top:0,
        left:0,
        behavior:"smooth"})
    
}