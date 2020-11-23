<?php

require('../Database/DbController.php');

require('../Database/Product.php');

$db = new DbController();

$product = new Product($db);

if(isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}
 
