<?php

namespace Oneshop\DAO;

include_once 'Database.php';

use Oneshop\DAO\Database;

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

    public function getProductDesc() {
        $reponse = $this->bdd->query('select * from product');
        $donnees = $reponse->fetchAll(\PDO::FETCH_ASSOC);
        return $donnees;
    }

    public function getProductById($id) {
        $reponse = $this->bdd->query("select * from product p where p.id_product='".$id."'");
        $donnees = $reponse->fetch();
        return $donnees;
    }
}
