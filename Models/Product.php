<?php

namespace my_shop\Models;

class Product {
    private $productId;
    private $name;
    private $price;
    private $description;
    private $photo;
    private $categoryId;

    public function __construct() {}

    public function getProduct() {
        return array(
            'productId' => $this->productId,
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'photo' => $this->photo,
            'categoryId' => $this->categoryId
        );
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setPhoto($photo) {
        $this->photo = $photo;
    }

    public function setCategoryId($categoryId) {
        $this->categoryId = $categoryId;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPhoto() {
        return $this->photo;
    }

    public function getCategoryId() {
        return $this->categoryId;
    }
}

?>