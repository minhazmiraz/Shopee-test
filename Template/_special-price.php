<!-- Special Price -->
<?php
    $array_brand = array_map(function($pro){return $pro['item_brand'];}, $product_shuffle);
    $array_brand_unique = array_unique($array_brand);
    sort($array_brand_unique);
    shuffle($product_shuffle);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['button_special_price'])){
            $cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }

    $cart_item_id = $cart->getCartId($product->getData('cart'));

?>
<section id="special-price">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Special Price</h4>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Brand</button>
            <?php array_map(function($item){
                printf('<button class="btn" data-filter=".%s">%s</button>', $item, $item);
            }, $array_brand_unique) 
            ?>
        </div>

        <div class="grid">
            <?php array_map(function($item) use($cart_item_id) { ?>
            <div class="grid-item <?=$item['item_brand'] ?? "Brand"?> border">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="<?php printf("%s?item_id=%s", 'product.php', $item['item_id']); ?>"><img src=<?=$item['item_image'] ?? "./assets/products/13.png"?> alt="product13" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?=$item['item_name'] ?? "Unknown"?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?=$item['item_price'] ?? "0"?></span>
                            </div>

                            <form method="post">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? "1"; ?>">
                                <?php
                                    if(in_array($item['item_id'], isset($cart_item_id) ? $cart_item_id : [])){
                                        echo '<button type="submit" disabled class="btn btn-success font-size-12">In the cart</button>';
                                    } else{
                                        echo '<button type="submit" name="button_special_price" class="btn btn-warning font-size-12">Add to cart</button>';
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php }, $product_shuffle); ?>
        </div>
</section>
<!-- !Special Price -->