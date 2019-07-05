<?php

namespace my_shop\Controllers;

include 'DAO\ProductDAO.php';
include 'Models\Product.php';

use my_shop\DAO\ProductDAO;
use my_shop\Models\Product;

class ProductsController {

    public function __construct() {}

    public function addProduct($productData=array()) {
        $name = ($productData['name']) ? $productData['name'] : null;
        $price = ($productData['price']) ? $productData['price'] : null;
        $description = ($productData['description']) ? $productData['description'] : null;
        $photo = ($productData['photo']) ? $productData['photo'] : null;
        $categoryId = ($productData['category_id']) ? $productData['category_id'] : null;
        
        $product = new Product();
        $product->setName($name);
        $product->setPrice($price);
        $product->setDescription($description);
        $product->setPhoto($photo);
        $product->setCategoryId($categoryId);

        $daoProduct = new ProductDAO();
        $daoProduct->addProduct($product);
    }
}