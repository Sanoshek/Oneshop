<?php

namespace Oneshop\Utils;

class Utils {

    public function __construct() {}

    public static function checkSession() {
        session_start();
        if (!empty($_SESSION['email']) )
            return $_SESSION;
        return false;
    }
}