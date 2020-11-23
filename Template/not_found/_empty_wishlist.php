<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Wishlist</h5>
        <div class="row">
            <div class="col-sm-9 border-top py-5 mt-3 text-center">
                <?php
                    $cartData = $product->getData('cart');
                    $subtotal = 0;
                ?>
                <img src="./assets/blog/empty_cart.png" alt="empty_cart" class="img-fluid" style="height: 200px">
                <p class="font-baloo font-size-16 text-black-50">Empty Wishlist</p>
            </div>
        </div>
    </div>
</section>
<!-- !Shopping Cart -->