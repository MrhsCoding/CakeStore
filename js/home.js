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
var swiper = new Swiper(".blogs-row", {
  spaceBetween: 30,
  loop:true,
  centeredSlides:true,
  autoplay:{
    delay:9500,
    disableOnInteraction:false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 1,
    },
    1024: {
      slidesPerView: 1,
    },
  },
});

var swiper = new Swiper(".review-row", {
  spaceBetween: 30,
  loop:true,
  // centeredSlides:true,
  // autoplay:{
  //     delay:5000,
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

const detailChurros = document.querySelector('.detail-churros');
const detailDonat = document.querySelector('.detail-donat');
const detailLumpia = document.querySelector('.detail-lumpia');

const churros = document.querySelector('.churros');
churros.addEventListener('click', function(){
  detailChurros.classList.add('detail-produk');
  detailDonat.classList.remove('detail-produk');
  detailLumpia.classList.remove('detail-produk');
});

const donat = document.querySelector('.donat');
donat.addEventListener('click', function(){
  detailDonat.classList.add('detail-produk');
  detailChurros.classList.remove('detail-produk');
  detailLumpia.classList.remove('detail-produk');
});
  
const lumpia = document.querySelector('.lumpia');
lumpia.addEventListener('click', function(){
  detailLumpia.classList.add('detail-produk');
  detailDonat.classList.remove('detail-produk');
  detailChurros.classList.remove('detail-produk');
});

const closeChurros = document.querySelector('.close-churros');
const closeDonat = document.querySelector('.close-donat');
const closeLumpia = document.querySelector('.close-lumpia');
closeChurros.addEventListener('click', function(){
  detailChurros.classList.remove('detail-produk');
});
closeDonat.addEventListener('click', function(){
  detailDonat.classList.remove('detail-produk');
});
closeLumpia.addEventListener('click', function(){
  detailLumpia.classList.remove('detail-produk');
});