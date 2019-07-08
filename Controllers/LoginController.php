<?php

namespace Oneshop\Controllers;

session_start();

use Oneshop\DAO\LoginDAO;

include '../DAO/LoginDAO.php';


class LoginController {

    public function __construct() {}

    public function check($email, $password) {
        $daoLogin = new LoginDAO();
        $check = $daoLogin->check($email, $password);
        if($check){
            $_SESSION['email']=$email;
            header('location:../index.php');
        }
    }
}

$lc = new LoginController();
$lc->check($_POST['email'], $_POST['password']);