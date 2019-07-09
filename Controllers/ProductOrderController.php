<?php

namespace Oneshop\Controllers;

include 'DAO\ProductOrderDAO.php';
include 'Models\ProductOrder.php';
include_once 'DAO\ClientDAO.php';

use Oneshop\DAO\ProductOrderDAO;
use Oneshop\Models\ProductOrder;
use Oneshop\DAO\ClientDAO;

class ProductOrderController {

    public function __construct() {}

    public static function productIdsToArray() {
        $new_tab = array();
        foreach ($_SESSION['cart'] as $key => $val) {
            array_push($new_tab, $key);
        }
        return implode(';', $new_tab);
    }

    public static function productAmountsToArray() {
        return implode(';', $_SESSION['cart']);
    }

    public static function getOrderDate() {
        return date('Y-m-d', time());
    }

    public static function addProductOrder($productOrderData=array()) {
        $productIds = self::productIdsToArray();
        $clientId = (int) ClientDAO::getIdByEmail($_SESSION['email'])['id_clients'];
        $amounts = self::productAmountsToArray();
        $date = self::getOrderDate();
      

        $productOrder = new ProductOrder();
        $productOrder->setProductIds($productIds);
        $productOrder->setClientId($clientId);
        $productOrder->setAmounts($amounts);
        $productOrder->setDate($date);

        $daoProductOrder = new ProductOrderDAO();
        $daoProductOrder->addProductOrder($productOrder);
        header('location:/oneshop/cn=checkout&action=show');
    }
}

?>