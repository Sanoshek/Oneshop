<?php

namespace my_shop\Controllers;

include 'DAO\ProductOrderDAO.php';
include 'Models\ProductOrder.php';

use my_shop\DAO\ProductOrderDAO;
use my_shop\Models\ProductOrder;

class ProductOrderController {

    public function __construct() {}

    public function addProductOrder($productOrderData=array()) {
        $productId = ($productOrderData['productId']) ? $productOrderData['productId'] : null;
        $clientId = ($productOrderData['clientId']) ? $productOrderData['clientId'] : null;
        $amount = ($productOrderData['amount']) ? $productOrderData['amount'] : null;
        $date = ($productOrderData['date']) ? $productOrderData['date'] : null;

        $productOrder = new ProductOrder();
        $productOrder->setProductId($productId);
        $productOrder->setClientId($clientId);
        $productOrder->setAmount($amount);
        $productOrder->setDate($date);

        $daoProductOrder = new ProductOrderDAO();
        $daoProductOrder->addProductOrder($productOrder);
    }
}

?>