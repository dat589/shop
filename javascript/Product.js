let imgFeature = document.querySelector('.big-img');
let listImage = document.querySelectorAll('.product-gallery-small img');
let prevBtn = document.querySelector('.prev');
let nextBtn = document.querySelector('.next');
let currentIndex = 0;
function updateImageByIndex(index){
    //remove class active
    document.querySelectorAll('.product-gallery-small img').forEach(item=>{
        item.classList.remove('active');
    });

    //add active by click
    listImage[index].classList.add('active');

    //change currentIndex and Big-image
    currentIndex = index;
    imgFeature.src = listImage[index].getAttribute('src');
}

listImage.forEach((imageElement, index) =>{
    imageElement.addEventListener('click', e =>{
        imgFeature.style.opacity = '0';
        setTimeout(()=>{
            updateImageByIndex(index);
            imgFeature.style.opacity = '1';
        }, 200);
    });
});

prevBtn.addEventListener('click', e=>{
    if(currentIndex == 0){
        currentIndex = listImage.length -1;
    }else{
        currentIndex--;
    }
    imgFeature.style.opacity = '0';
    setTimeout(()=>{
        updateImageByIndex(currentIndex);
        imgFeature.style.opacity = '1';
    },200)
})

nextBtn.addEventListener('click', e=>{
    if(currentIndex == listImage.length-1){
        currentIndex = 0;
    }else{
        currentIndex++;
    }
    imgFeature.style.opacity = '0';
    setTimeout(()=>{
        updateImageByIndex(currentIndex);
        imgFeature.style.opacity = '1';
    },200)
})







//---------------TAB CONTENT---------------


let listTabItem = document.querySelectorAll('.detail-tab-header div');
let listTabContent = document.querySelectorAll('.detail-tab-body div');

function updateTab(index){
    //remove active
    document.querySelectorAll('.detail-tab-header div').forEach(item=>{
        item.classList.remove('active');
    });
    document.querySelectorAll('.detail-tab-body div').forEach(item=>{
        item.classList.remove('active');
    });

    //add class active
    listTabItem[index].classList.add('active');
    listTabContent[index].classList.add('active');
}

listTabItem.forEach((tabElement, index) =>{
    tabElement.addEventListener('click',e =>{
        updateTab(index);
    })
})





// ---------------CHOOSE SIZE--------------

let listSize = document.querySelectorAll('.detail-size span');

listSize.forEach((sizeElement,index)=>{
    sizeElement.addEventListener('click', e=>{
        document.querySelectorAll('.detail-size span').forEach(item=>{
            item.classList.remove('active');
        });
        listSize[index].classList.add('active');
    })
})





// -------------SHOW MORE CONTENT------------

let listShowImg = document.querySelectorAll('.show-more img');
let showContent = document.getElementById('show-content');

listShowImg.forEach((showElement, index)=>{
    showElement.addEventListener('click', e=>{
        document.querySelectorAll('.show-more img').forEach(item =>{
            item.classList.remove('active');
        })
        listShowImg[1-index].classList.add('active');
        if(index){
            showContent.style.height = 100 + 'px';
        }else{
            showContent.style.height = 'auto';
        }
    })
})


// -----SLICK SLIDER

$(document).ready(function(){
    $('.list-products').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        prevArrow: `<button type='button' class='slick-prev slick-arrow'><img src="../images/icons/pre.png" alt=""></button>`,
        nextArrow: `<button type='button' class='slick-next slick-arrow'><img src="../images/icons/next.png" alt=""></button>`,
        responsive: [
            {
            breakpoint: 1025,
            settings: {
                slidesToShow: 3,
            }
            },
            {
            breakpoint: 769,
            settings: {
                slidesToShow: 2,
            }
            }
        ]
    });
  });