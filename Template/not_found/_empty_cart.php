<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>
        <div class="row">
            <div class="col-sm-9 border-top py-5 mt-3 text-center">
                <?php
                    $cartData = $product->getData('cart');
                    $subtotal = 0;
                ?>
                <img src="./assets/blog/empty_cart.png" alt="empty_cart" class="img-fluid" style="height: 200px">
                <p class="font-baloo font-size-16 text-black-50">Empty Cart</p>
            </div>
            <div class="col-sm-3">
                <div class="sub-total border mt-2 text-center">
                    <h6 class="font-rale font-size-12 text-success py-3"><i class="fas fa-check"></i> Your order is eligible for free delivery</h6>
                    <div class="border-top py-4">
                        <h5 class="font-rale font-size-16">Subtotal (<?php echo count($cartData); ?> Item):&nbsp;<span class="text-danger">$<span class="text-danger deal-price" id="deal-price"><?php echo $subtotal; ?></span></span></h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to buy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- !Shopping Cart -->