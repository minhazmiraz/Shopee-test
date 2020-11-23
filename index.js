$(document).ready(function () {


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

    //Isotope Filter
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    //filter items on button click
    $(".button-group").on("click", "button", function () {
        var filterValue = $(this).attr("data-filter");
        $grid.isotope({ filter: filterValue });
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
    var $deal_price = $("#deal-price");
    //var $input = $(".qty .qty-input");

    $upBtn.click(function (e) {
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        let $product_price = $(`.product_price[data-id='${$(this).data("id")}']`);
        
        $.ajax({
            url: "Template/ajax.php",
            type: 'post',
            data: {itemid: $(this).data("id")},
            success: function(result){
                var obj = JSON.parse(result);
                var item_price = obj[0]['item_price'];
                
                if ($input.val() >= 1 && $input.val() <= 9) {
                    $input.val(function (i, oldval) {
                        return ++oldval;
                    });
                    $product_price.text(parseInt(item_price * $input.val()).toFixed(2));

                    var subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }
            }
        });
    });

    $downBtn.click(function (e) {
        let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        let $product_price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({
            url: "Template/ajax.php",
            type: 'post',
            data: { itemid: $(this).data("id") },
            success: function (result) {
                var obj = JSON.parse(result);
                var item_price = obj[0]['item_price'];

                if ($input.val() > 1 && $input.val() <= 10) {
                    $input.val(function (i, oldval) {
                        return --oldval;
                    });
                    $product_price.text(parseInt(item_price * $input.val()).toFixed(2));
                    
                    var subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }
            }
        });


        
    });


});