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
let products = [{
    id: 29,
     
    image: '106.jpg',
    price: 5678,
    REF:1223
},
{
    id: 30,
 
    image: '105.jpg',
    price: 5678
}
,
{
    id: 31,
 
    image: '107.jpg',
    price: 5678
}
,
{
    id: 32,
 
    image: '108.jpg',
    price: 5678
}
,
{
    id: 33,
 
    image: '109.jpg',
    price: 5678
}
,
{
    id: 33,
 
    image: '110.jpg',
    price: 5678
},
{
    id: 27,
 
    image: 'img51.jpg',
    price: 2345
},
{
    id: 28,
 
    image: 'img52.jpg',
    price: 5678
}


,
{
    id: 34,
 
    image: 'img53.jpg',
    price: 2999
}
,
{
    id: 35,
 
    image: 'img54.jpg',
    price: 3999
}
,
{
    id: 36,
 
    image: 'img55.jpg',
    price: 4999
},
{
    id: 37,
 
    image: 'img56.jpg',
    price: 4990
},
{
    id: 17,
 
    image: 'img57.jpg',
    price: 4990
}
,
{
    id: 17,
 
    image: 'img58.jpg',
    price: 5489
}
,
{
    id: 17,
 
    image: 'img59.jpg',
    price: 5999
},
{
    id: 17,
 
    image: 'img48.jpg',
    price: 4990
},
{
    id: 25,
 
    image: 'img49.jpg',
    price: 4990
},
,{
    id: 26,
 
    image: 'img50.jpg',
    price: 4789
},
     {   id: 1,
        image: 'img21.jpg',
        price: 2999
    },
    {
        id: 2,
      
        image: 'img22.jpg',
        price: 1999
    },
    {
        id: 17,
     
        image: 'img53.jpg',
        price: 2999
    },
    {
        id: 17,
     
        image: 'img60.jpg',
        price: 4999
    }
    ,
   
   
    
       
        {
            id: 17,
         
            image: 'img41.jpg',
            price: 3500
        },
        {
            id: 20,
         
            image: 'img42.jpg',
            price: 4500
        },
         {
            id: 21,
         
            image: 'img43.jpg',
            price: 4500
        },
        {
            id: 22,
         
            image: 'img44.jpg',
            price: 2999
        }, {
            id: 23,
         
            image: 'img45.jpg',
            price: 4999
        },
        
    
    


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