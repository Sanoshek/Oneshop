<?php

namespace Oneshop\DAO;

include_once 'Database.php';
use Oneshop\DAO\Database;

class CategoryDAO {
    private $bdd;

    public function __construct() {
        $this->bdd = Database::getConnection();
    }

    public function addCategory($category) {
        $req = $this->bdd->prepare('insert into category (type,description) values (:type, :description)');
        $req->execute(array(
            'type' => $category->getType(),
            'description' => $category->getDescription()
        ));
    }

    public function getCategories() {
        $req = $this->bdd->query('select * from category');
        $data_fetch = $req->fetch(\PDO::FETCH_ASSOC);
        return $data_fetch;
    }
}

