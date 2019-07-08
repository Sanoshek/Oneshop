<?php

namespace Oneshop\DAO;

include_once 'Database.php';

use Oneshop\DAO\Database;

class ClientDAO {
    private $bdd;

    public function __construct() {
        $this->bdd = Database::getConnection();
    }

    public function addClient($client) {
        $req = $this->bdd->prepare('insert into clients (name, email, password, adress, tel) values (:name, :email, :password, :adress, :tel)');
        $req->execute(array(
            'name' => $client->getName(),
            'email' => $client->getEmail(),
            'password' => $client->getPassword(),
            'adress' => $client->getAdress(),
            'tel' => $client->getMobile()
        ));
    }
}

?>