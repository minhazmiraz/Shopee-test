<?php

require('Database/DbController.php');

require('Database/Product.php');

require('Database/Cart.php');

$db = new DbController();

$product = new Product($db);
$product_shuffle = $product->getData();

$cart = new Cart($db);