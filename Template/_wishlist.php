<!-- Shopping Cart -->
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['button_cart_delete'])){
            $deletedrecord = $cart->deleteFromCart($_POST['item_id'], 'wishlist');
        }

        if(isset($_POST['button_add_to_cart'])){
            $cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
        }
    }
?>

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Wishlist</h5>
        <div class="row">
            <div class="col-sm-9">
                <?php
                    $cartData = $product->getData('wishlist');
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
                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $result[0]['item_id']; ?>">
                                    <button type="submit" name="button_cart_delete" class="btn font-baloo text-danger border-right pl-0 pr-3">Delete</button>
                                </form>

                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $result[0]['item_id']; ?>">
                                    <button type="submit" name="button_add_to_cart" class="btn font-baloo text-danger px-3">Add to cart</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-2 text-right">
                            <div class="font-baloo font-size-20 text-danger">
                                $<span class="product_price" data-id="<?php echo $result[0]['item_id']; ?>"><?php echo $result[0]['item_price'] ?? 0; ?></span>
                            </div>
                        </div>
                    </div>
                <?php
                        $subtotal += floatval($result[0]['item_price']);
                    }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- !Shopping Cart -->