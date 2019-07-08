<?php

namespace Oneshop\DAO;

// include 'Database.php';

// use Oneshop\DAO\Database;

class LoginDAO {
    private $bdd;

    public function __construct() {
        $this->bdd = Database::getConnection();
    }

    public function check($email, $password) {
        $req = $this->bdd->query("select * from clients where email='".$email."' and password="."'".$password."'");
        $res = $req->fetchAll(\PDO::FETCH_ASSOC);
        if(count($res) > 0){
            return true; 
        }
        else{
            return false;
        }
    }
}

