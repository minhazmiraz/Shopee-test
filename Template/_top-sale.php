<!-- Top Sale -->
<?php
    shuffle($product_shuffle);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['button_top_sale'])){
            $cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }

    $cart_item_id = $cart->getCartId($product->getData('cart'));

?>

<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top Sale</h4>
        <hr>
        <!-- Owl Carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach($product_shuffle as $item){ ?>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="<?php printf("%s?item_id=%s", 'product.php', $item['item_id']); ?>"><img src=<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?> alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo $item['item_price'] ?? "0"; ?></span>
                            </div>

                            <form method="post">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? "1"; ?>">
                                <?php
                                    if(in_array($item['item_id'], isset($cart_item_id) ? $cart_item_id : [])){
                                        echo '<button type="submit" disabled class="btn btn-success font-size-12">In the cart</button>';
                                    } else{
                                        echo '<button type="submit" name="button_top_sale" class="btn btn-warning font-size-12">Add to cart</button>';
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- !Owl Carousel -->
    </div>
</section>
<!-- !Top Sale -->