let indexImg = 0;
let bannerImg = document.querySelector('#banner-img');
const imgs = ["./images/banner/bn1.jpg", "./images/banner/bn2.jpg", "./images/banner/bn3.jpg", "./images/banner/bn4.jpg"];

changePreImage = function(){
    indexImg++;
    if(indexImg==4){
        indexImg=0;
    }
    bannerImg.style.animation = '';
    setTimeout(()=>{
        document.getElementById("banner-img").src = imgs[indexImg];
        bannerImg.style.animation = 'slideLeft .1s ease-in-out forwards';
    },100);
}

changeNextImage = function(){
    indexImg--;
    if(indexImg==-1){
        indexImg = 3;
    }
    bannerImg.style.animation = '';
    setTimeout(()=>{
        document.getElementById("banner-img").src = imgs[indexImg];
        bannerImg.style.animation = 'slideRight .1s ease-in-out forwards';
    },100);
}

// setInterval(changeNextImage, 5000);







// ------------TAB product jquery-----------
// $(document).ready(function(){
//     $('.exclusive-inner').hide();
//     $('.exclusive-inner:first-child').fadeIn();
//     $('.arrival-tab').click(function(){
//         // Add class active into tab
//         $('.arrival-tab').removeClass('active');
//         $(this).addClass('active');
        
//         //Add content
//         let id_tab_product = $(this).children('a').attr('href');
//         $('.exclusive-inner').hide();
//         $(id_tab_product).fadeIn();

//         return false;
//     });
// });

let listTabItem = document.querySelectorAll('.arrival-tab');
let listTabContent = document.querySelectorAll('.exclusive-inner');

function updateTab(index){
    //remove active
    document.querySelectorAll('.arrival-tab').forEach(item=>{
        item.classList.remove('active');
    });
    document.querySelectorAll('.exclusive-inner').forEach(item=>{
        item.classList.remove('active');
    });

    //add class active
    listTabItem[index].classList.add('active');
    listTabContent[index].classList.add('active');
}

listTabItem.forEach((tabElement, index) =>{
    tabElement.addEventListener('click',() =>{
        updateTab(index);
    })
})






// --------------SLICK SLIDER---------------


// $(document).ready(function(){
//     $('.list-products').slick({
//         dots: false,
//         infinite: true,
//         speed: 300,
//         slidesToShow: 5,
//         slidesToScroll: 1,
//         prevArrow: `<button type='button' class='slick-prev slick-arrow'><img src="../images/icons/pre.png" alt=""></button>`,
//         nextArrow: `<button type='button' class='slick-next slick-arrow'><img src="../images/icons/next.png" alt=""></button>`,
//         responsive: [
//             {
//                 breakpoint: 1200,
//                 settings: {
//                     slidesToShow: 4,
//                 }
//             },
//             {
//                 breakpoint: 1025,
//                 settings: {
//                     slidesToShow: 3,
//             }
//             },
//             {
//                 breakpoint: 769,
//                 settings: {
//                     slidesToShow: 2,
//             }
//             }
//         ]
//     });
//   });

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






// --------------DARK THEME-------------

// let iconTheme = document.getElementById('icon-theme');
// iconTheme.onclick = function(){
//     document.body.classList.toggle('dark-theme');
// }