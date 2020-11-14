<?php
    $item_id = $_GET['item_id'];
    $product_shuffle = $product->getData();
    foreach($product_shuffle as $item){
        if($item['item_id'] == $item_id){
?>

<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product" class="img-fluid">
                <div class="form-row font-baloo font-size-12 pt-4">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-warning form-control">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h4 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h4>
                <small>By <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="font-rale font-size-12 px-2">20,543 ratings | 1000+ answered questions</a>
                </div>
                <hr class="m-0">

                <!-- Product Price -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P.</td>
                        <td><strike>$<?php echo $item['item_price'] + 10.00 ?? 0; ?></strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price</td>
                        <td><span class="font-size-20 text-danger">$<?php echo $item['item_price'] ?? 0; ?></span><small>&nbsp; &nbsp;inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save</td>
                        <td><span class="font-size-16 text-danger">$10.00</span></td>
                    </tr>
                </table>
                <!-- !Product Price -->

                <!-- Policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 color-second">
                                <span class="fas fa-retweet border rounded-pill p-3"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days <br>Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 color-second">
                                <span class="fas fa-truck border rounded-pill p-3"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Daily Tuition <br>Delivery</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 color-second">
                                <span class="fas fa-check-double border rounded-pill p-3"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                        </div>
                    </div>
                </div>
                <!-- !Policy -->

                <hr>

                <!-- Order Details-->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by: Mar 26 - April 1</small>
                    <small>Sold by <a href="#">Daily Electronics</a> (4.5 out of 5 | 18,198 Reviews)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to customer- 424201</small>
                </div>
                <!-- !Order Details-->

                <div class="row">
                    <!-- Color -->
                    <div class="col-6">
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color: </h6>
                                <div class="p-2 color-yellow-bg rounded-circle">
                                    <button class="btn font-size-14"></button>
                                </div>
                                <div class="p-2 color-primary-bg rounded-circle">
                                    <button class="btn font-size-14"></button>
                                </div>
                                <div class="p-2 color-second-bg rounded-circle">
                                    <button class="btn font-size-14"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- !Color -->

                    <!-- Product Quantity -->
                    <div class="col-6">
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                                <button data-id="item1" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="item1" class="qty-input border px-2 w-50 bg-light text-center" disabled value="1" placeholder="1">
                                <button data-id="item1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- !Product Quantity -->
                </div>

                <!-- Size -->
                <div class="size my-3">
                    <h6 class="font-baloo">Size:</h6>
                    <div class="d-flex justify-content-between w-75">
                        <button class="btn border font-rubik font-size-14 mx-2">4GB RAM</button>
                        <button class="btn border font-rubik font-size-14 mx-2">6GB RAM</button>
                        <button class="btn border font-rubik font-size-14 mx-2">8GB RAM</button>
                    </div>
                </div>
                <!-- Size -->
            </div>
            <!-- Description -->
            <div class="col-12">
                <h4 class="font-rubik">Product Description:</h4>
                <hr>
                <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quisquam eaque repellendus molestias voluptas maxime iure nobis iste voluptatum ratione fugiat sint excepturi a eos culpa quam suscipit, quod commodi iusto quia et! Neque, dolor ut? Sint aperiam tempore explicabo dolores magnam neque! Temporibus fugit ipsa voluptatem et cum, voluptatum laudantium cupiditate quisquam, asperiores consequuntur placeat distinctio, tempore eveniet numquam quae perferendis eligendi eos. Nihil nobis non earum enim, dolorem voluptas quod, porro architecto voluptatem magnam unde cum quo nisi debitis quos, ipsum obcaecati deserunt repudiandae. Magni, hic illo quae ducimus sit dignissimos nesciunt, atque ut, ab enim veritatis odit.</p>
                <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quisquam eaque repellendus molestias voluptas maxime iure nobis iste voluptatum ratione fugiat sint excepturi a eos culpa quam suscipit, quod commodi iusto quia et! Neque, dolor ut? Sint aperiam tempore explicabo dolores magnam neque! Temporibus fugit ipsa voluptatem et cum, voluptatum laudantium cupiditate quisquam, asperiores consequuntur placeat distinctio, tempore eveniet numquam quae perferendis eligendi eos. Nihil nobis non earum enim, dolorem voluptas quod, porro architecto voluptatem magnam unde cum quo nisi debitis quos, ipsum obcaecati deserunt repudiandae. Magni, hic illo quae ducimus sit dignissimos nesciunt, atque ut, ab enim veritatis odit.</p>
            </div>
            <!-- !Description -->
        </div>
    </div>
</section>

<?php
        }
    }
?>