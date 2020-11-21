<!-- Shopping Cart -->
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['button_cart_delete'])){
            $deletedrecord = $cart->deleteFromCart($_POST['item_id']);
        }
    }
?>

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>
        <div class="row">
            <div class="col-sm-9">
                <?php
                    $cartData = $product->getData('cart');
                    $subtotal = 0;
                    foreach($cartData as $cartItem){
                        $result = $product->getProduct($cartItem['item_id']);
                ?>
                    <div class="row border-top mt-3 py-3">
                        <div class="col-sm-2">
                            <img src="<?php echo $result[0]['item_image'] ?? "./assets/products/1.png"; ?>" alt="cart1" class="img-fluid">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="font-baloo font-size-20"><?php echo $result[0]['item_name'] ?? "Unknown"; ?></h5>
                            <small>by <?php echo $result[0]['item_brand'] ?? "Brand"; ?></small>
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <a href="#" class="font-rale font-size-12 px-2">20,543 ratings</a>
                            </div>
                            <div class="d-flex pt-2">
                                <div class="qty d-flex font-rale w-25">
                                    <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                    <input type="text" data-id="pro1" class="qty-input border px-2 w-100 bg-light text-center" disabled value="1" placeholder="1">
                                    <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                </div>

                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $result[0]['item_id']; ?>">
                                    <button type="submit" name="button_cart_delete" class="btn font-baloo text-danger border-right px-3">Delete</button>
                                </form>
                                <button type="submit" class="btn font-baloo text-danger px-3">Save for later</button>
                            </div>
                        </div>
                        <div class="col-sm-2 text-right">
                            <div class="font-baloo font-size-20 text-danger">
                                $<span class="product_price"><?php echo $result[0]['item_price'] ?? 0; ?></span>
                            </div>
                        </div>
                    </div>
                <?php
                        $subtotal += floatval($result[0]['item_price']);
                    }
                ?>
            </div>
            <div class="col-sm-3">
                <div class="sub-total border mt-2 text-center">
                    <h6 class="font-rale font-size-12 text-success py-3"><i class="fas fa-check"></i> Your order is eligible for free delivery</h6>
                    <div class="border-top py-4">
                        <h5 class="font-rale font-size-16">Subtotal (<?php echo count($cartData); ?> Item):&nbsp;<span class="text-danger">$<span class="text-danger deal-price"><?php echo $subtotal; ?></span></span></h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to buy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- !Shopping Cart -->