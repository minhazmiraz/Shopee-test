$(document).ready(function(){


    //Banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1,
        loop: true,
        autoplay: true,
        animateOut: 'fadeOut'
    });

    $("#top-sale .owl-carousel").owlCarousel({
       loop: true,
       nav: true,
       dots: false,
       responsive:{
           0:{
               items: 1
           },
           600:{
               items: 3
           },
           1000:{
               items:5
           }
       }
    });


});