<?php

namespace Oneshop\Controllers;

include '../DAO/ClientDAO.php';
include '../Models/Client.php';

use Oneshop\DAO\ClientDAO;
use Oneshop\Models\Client;

class ClientsController {

    public function __construct() {}

    public function addClient($clientData=array()) {
        $email = ($clientData['email']) ? $clientData['email'] : null;
        $name = ($clientData['name']) ? $clientData['name'] : null;
        $adress = ($clientData['adress']) ? $clientData['adress'] : null;
        $mobile = ($clientData['mobile']) ? $clientData['mobile'] : null;

        $client = new Client();
        $client->setEmail($email);
        $client->setName($name);
        $client->setAdress($adress);
        $client->setMobile($mobile);
        $daoClient = new ClientDAO();
        $daoClient->addClient($client);
    }
}

$client = new ClientsController();
$client->addClient($_POST);
header('location:../Views/home.php');