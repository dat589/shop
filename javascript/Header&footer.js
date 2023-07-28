// -------------SUB MOBILE MENU-------------

let arrowPlus = document.querySelectorAll('.icon-plus');
let arrowMinus = document.querySelectorAll('.icon-minus');


arrowPlus.forEach((arrowElement,index)=>{
    arrowElement.addEventListener('click',()=>{
        arrowElement.parentElement.nextElementSibling.style.display = 'block';
        arrowElement.style.display = 'none';
        arrowMinus[index].style.display = 'block';
    })
})

arrowMinus.forEach((arrowElement,index)=>{
    arrowElement.addEventListener('click',()=>{
        arrowElement.parentElement.nextElementSibling.style.display = 'none';
        arrowElement.style.display = 'none';
        arrowPlus[index].style.display = 'block';
    })
})

// ----------DISPLAY MOBILE MENU-------------

let iconMobile = document.querySelector('.mobile-menu')
let mobileMenu = document.querySelector('.sub-mobile-menu')
let posMenu = document.querySelector('.container.d-flex')

iconMobile.addEventListener('click',()=>{
    if(mobileMenu.getAttribute('class')=='sub-mobile-menu open'){
        mobileMenu.classList.remove('open');
        posMenu.style.position = 'fixed';
    }else{
        mobileMenu.classList.add('open');
        posMenu.style.position = 'relative';
    }
})


// --------------SHOPPING CART---------------

let shopOpen = document.querySelector('.sub-action');
let iconShop = document.querySelector('.item.cart img');
let iconClose = document.querySelector('.action-close img');

iconShop.addEventListener('click',()=>{
    shopOpen.style.display = 'block';
})

iconClose.addEventListener('click',()=>{
    shopOpen.style.display = 'none';
})