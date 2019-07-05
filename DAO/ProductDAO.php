<?php

namespace my_shop\DAO;

include 'Database.php';

use my_shop\DAO\Database;

class ProductDAO {
    private $bdd;

    public function __construct() {
        $this->bdd = Database::getConnection();
    }

    public function addProduct($product) {
        $req = $this->bdd->prepare('insert into product (name, price, description, photo, category_id) values (:name, :price, :description, :photo, :category_id)');
        $req->execute(array(
            'name' => $product->getName(),
            'price' => $product->getPrice(),
            'description' => $product->getDescription(),
            'photo' => $product->getPhoto(),
            'category_id' => $product->getCategoryId()
        ));
    }
}

?>