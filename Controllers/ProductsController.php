<?php

namespace Oneshop\Controllers;

include_once 'DAO\ProductDAO.php';
include_once 'Models\Product.php';

use Oneshop\DAO\ProductDAO;
use Oneshop\Models\Product;

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