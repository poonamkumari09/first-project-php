let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick=()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll=()=>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

// var swiper = new swiper(".home-slider",{
//     loop: true,
//     navigation:{
//         nextE1:'.swiper-button-next',
//         prevE1:'.swiper-button-prev'
//     },
// });

// var swiper = new swiper(".reviews-slider",{
//     loop: true,
//     spaceBetween: 20,
//     autoHeight: true,
//     grabCursor: true,
//     breakpoints: {
//         640: {
//           slidesPerView: 1,
//         },
//         768: {
//           slidesPerView: 2,
        
//         },
//         1024: {
//           slidesPerView: 3,
          
//         },
//     },
// });

let loadMoreBtn = document.querySelector(".packages .load-more .btn");
let currentItem = 3;

loadMoreBtn.onclick = () =>{
    let boxes=[...document.querySelectorAll(".packages .box-container .box")]
    for(var i = currentItem; i < currentItem + 3; i++){
        boxes[i].style.display = 'inline-block';
    }
    currentItem += 3;
    if(currentItem >= boxes.length){
        loadMoreBtn.style.display = 'none';
    }
}