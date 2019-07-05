<?php

namespace my_shop\DAO;

include 'Database.php';

use my_shop\DAO\Database;

class ProductOrderDAO {
    private $bdd;

    public function __construct() {
        $this->bdd = Database::getConnection();
    }

    public function addProductOrder($productOrder) {
        $req = $this->bdd->prepare('insert into product_command (clients_id_clients, produit_id_product, quantity, date) 
        values  (:clients_id_clients, :produit_id_product, :quantity, :date)');
        $req->execute(array(
            'clients_id_clients' => $productOrder->getClientId(),
            'produit_id_product' => $productOrder->getProductId(),
            'quantity' => $productOrder->getAmount(),
            'date' => $productOrder->getDate()
        ));
    }
}

?>