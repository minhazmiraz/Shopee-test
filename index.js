$(document).ready(function(){


    //Banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1,
        loop: true,
        autoplay: true,
        animateOut: 'fadeOut'
    });

    //Top Sale Owl Carousel
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

    //Isotope Filter
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    //filter items on button click
    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr("data-filter");
        $grid.isotope({filter: filterValue});
    });


    //New Phones Owl Carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });


    //Latest Blogs Owl Carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    });

    //Product Quantity
    var $upBtn = $(".qty .qty-up");
    var $downBtn = $(".qty .qty-down");
    //var $input = $(".qty .qty-input");

    $upBtn.click(function(e) {
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`)
        if($input.val() >= 1 && $input.val() <= 9){
            $input.val(function(i, oldval){
                return ++oldval;
            });
        }
    });

    $downBtn.click(function (e) {
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`)
        if ($input.val() > 1 && $input.val() <= 10) {
            $input.val(function (i, oldval) {
                return --oldval;
            });
        }
    });


});