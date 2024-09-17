var swiper = new Swiper(".product-row", {
  spaceBetween: 30,
  loop:true,
  // centeredSlides:true,
  // autoplay:{
  //     delay:9500,
  //     disableOnInteraction:false,
  // },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

const likes = document.querySelectorAll('.like');
likes.forEach(function(like){
  like.addEventListener('click', function(l){
    l.target.classList.toggle('dislike');
    // like.innerHTML = 'Kurang Suka';
  });
});

const orderButton = document.querySelector('.orderNow');
const orderPage = document.querySelector('.orderPage');
const closeOrderPage = document.querySelector('.close-pemesanan');

orderButton.addEventListener('click', function(){
  orderPage.classList.add('openOrderPage');
});
 
closeOrderPage.addEventListener('click', function(){
  orderPage.classList.remove('openOrderPage');
});