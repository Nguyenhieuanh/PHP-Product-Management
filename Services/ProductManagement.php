<?php
namespace Services;

class ProductManagement
{
    private $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function add($product) {
        $this->products[] = $product;
    }

    public function getProducts()
    {
        return $this->products;
    }
}