const header = document.querySelector('.navbar');

window.addEventListener('scroll',()=>{
    header.classList.toggle('scrolling-active',window.scrollY>0);
});


//   all ------------------
function initParadoxWay() {
    "use strict";
   
    if ($(".testimonials-carousel").length > 0) {
        var j2 = new Swiper(".testimonials-carousel .swiper-container", {
            preloadImages: false,
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            grabCursor: true,
            mousewheel: false,
            centeredSlides: true,
            pagination: {
                el: '.tc-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: '.listing-carousel-button-next',
                prevEl: '.listing-carousel-button-prev',
            },
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                },
                
            }
        });
    }
    
// bubbles -----------------
    
    
    
}

//   Init All ------------------
$(document).ready(function () {
    initParadoxWay();
});

$(document).on('click', 'a[href^="#"]', function(e) {
    // target element id
    var id = $(this).attr('href');

    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document
    var pos = $(id).offset().top - 10;

    // animated top scrolling
    $('body, html').animate({scrollTop: pos});
});

const mobileView = document.querySelector('.mobile-view');
const openNavButton = document.querySelector('.mobile-nav-button i');
const closeNavButton = document.querySelector('.mobile-view i');
const mobileNavLinks = document.querySelectorAll('.mobile-view ul li a');


openNavButton.addEventListener('click',()=>{
    mobileView.style.display = 'block';
    openNavButton.style.display = 'none';
    document.body.style.overflow = 'hidden';
})

closeNavButton.addEventListener('click',()=>{
    mobileView.style.display = 'none';
    openNavButton.style.display = 'block';
    document.body.style.overflowY = 'scroll';
})

mobileNavLinks.forEach(navLink => {
    navLink.addEventListener('click',()=>{
        mobileView.style.display = 'none';
        openNavButton.style.display = 'block';
        document.body.style.overflowY = 'scroll';
    })
});
var responsiveSlider = function() {

    var slider = document.getElementById("slider");
    var sliderWidth = slider.offsetWidth;
    var slideList = document.getElementById("slideWrap");
    var count = 1;
    var items = slideList.querySelectorAll("li").length;
    var prev = document.getElementById("prev");
    var next = document.getElementById("next");
    
    window.addEventListener('resize', function() {
      sliderWidth = slider.offsetWidth;
    });
    
    var prevSlide = function() {
      if(count > 1) {
        count = count - 2;
        slideList.style.left = "-" + count * sliderWidth + "px";
        count++;
      }
      else if(count = 1) {
        count = items - 1;
        slideList.style.left = "-" + count * sliderWidth + "px";
        count++;
      }
    };
    
    var nextSlide = function() {
      if(count < items) {
        slideList.style.left = "-" + count * sliderWidth + "px";
        count++;
      }
      else if(count = items) {
        slideList.style.left = "0px";
        count = 1;
      }
    };
    
    setInterval(function() {
      nextSlide()
    }, 3000);
    
    };
    
    window.onload = function() {
    responsiveSlider();  
    }
    