<?php

require('Database/DbController.php');

require('Database/Product.php');

$db = new DbController();

$product = new Product($db);