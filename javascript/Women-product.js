let listItemSide = document.querySelectorAll('.item-sub-title');


listItemSide.forEach(item=>{
    item.addEventListener('click', ()=>{
        if(item.getAttribute('class')=='item-sub-title active'){
            item.classList.remove('active');
        }else{
            item.classList.add('active');
        }
    })
})


// --------------FILTER PRODUCT----------

let filter = document.querySelector('.item-filter span')

filter.addEventListener('click', ()=>{
    if(filter.parentElement.getAttribute('class')=='item-filter open'){
        filter.parentElement.classList.remove('open')
    }else{
        filter.parentElement.classList.add('open')
    }
})



// ----------------LIST SIZE--------------

let addCard = document.querySelectorAll('.add-to-card');

addCard.forEach(cardElement=>{
    cardElement.addEventListener('click',()=>{
        if(cardElement.nextElementSibling.getAttribute('class')=='list-size open'){
            cardElement.nextElementSibling.classList.remove('open');
        }else{
            cardElement.nextElementSibling.classList.add('open');
        }
        return true
    })
})