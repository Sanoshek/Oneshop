<?php

namespace Oneshop\Controllers;

session_start();

include '../DAO/LoginDAO.php';
include '../DAO/ClientDAO.php';

use Oneshop\DAO\LoginDAO;
use Oneshop\DAO\ClientDAO;

class LoginController {

    public function __construct() {}

    public function check($email, $password) {
        $daoLogin = new LoginDAO();
        $check = $daoLogin->check($email, $password);
        if($check) {
            $_SESSION['email'] = $email;
            $_SESSION['name'] = ClientDAO::getNameByEmail($email);
            header('/oneshop/');
        } else
            header('/oneshop/?action=login');
    }
}

$lc = new LoginController();
$lc->check($_POST['email'], $_POST['password']);