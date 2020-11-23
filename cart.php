<?php
    include('header.php');

    count($product->getData('cart')) ? include('Template/_cart.php') : include('Template/not_found/_empty_cart.php');
    
    count($product->getData('wishlist')) ? include('Template/_wishlist.php') : include('Template/not_found/_empty_wishlist.php');

    

    include('Template/_new-phones.php');

    include('footer.php');
?>