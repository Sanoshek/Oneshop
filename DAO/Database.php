<?php

namespace Oneshop\DAO;

class Database {
    private const HOSTNAME = 'localhost';
    private const DBNAME = 'my_shop';
    private const CHARSET = 'utf8';
    private const USERNAME = 'root';

    public function __construct() {
    }

    public static function getConnection() {
        try {
            return (new \PDO('mysql:host='.self::HOSTNAME.';dbname='.self::DBNAME.';charset='.self::CHARSET, self::USERNAME, ''));
        }
        catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
       
    }
}

