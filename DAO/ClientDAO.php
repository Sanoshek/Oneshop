<?php

namespace my_shop\DAO;

include 'Database.php';

use my_shop\DAO\Database;

class ClientDAO {
    private $bdd;

    public function __construct() {
        $this->bdd = Database::getConnection();
    }

    public function addClient($client) {
        $req = $this->bdd->prepare('insert into clients (email, name, adress, tel) values (:email, :name, :adress, :tel)');
        $req->execute(array(
            'email' => $client->getEmail(),
            'name' => $client->getName(),
            'adress' => $client->getAdress(),
            'tel' => $client->getMobile()
        ));
    }
}

?>