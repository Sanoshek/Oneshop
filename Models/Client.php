<?php

namespace Oneshop\Models;

class Client {
    private $clientId;
    private $email;
    private $name;
    private $adress;
    private $mobile;
    private $password;

    public function __construct() {
    }

    public function getClient() {
        return array(
            'clientId' => $this->clientId,
            'email' => $this->email,
            'name' => $this->name,
            'adress' => $this->adress,
            'mobile' => $this->mobile,
            'password' => $this->password
        );
    }

    public function getClientId() {
        return $this->clientId;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getAdress() {
        return $this->adress;
    }

    public function getMobile() {
        return $this->mobile;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setAdress($adress) {
        $this->adress = $adress;
    }

    public function setMobile($mobile) {
        $this->mobile = $mobile;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}
?>