<?php
include_once "Models/Product.php";
include_once "Services/ProductManagement.php";

use Models\Product;
use Services\ProductManagement;

$productManagement = new ProductManagement();
$productManagement->add(new Product("Laptop"));
$productManagement->add(new Product("Mobile"));

$products = $productManagement->getProducts();
foreach ($products as $product) {
    echo $product->getName() ."<br/>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Thực hành] Quản lí sản phẩm</title>
</head>
<body>

</body>
</html>
