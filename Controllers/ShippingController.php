<?php

namespace my_shop\Controllers;

include 'DAO\ShippingDAO.php';
include 'Models\Shipping.php';

use my_shop\DAO\ShippingDAO;
use my_shop\Models\Shipping;

class ShippingController {

    public function __construct() {}

    public function addShipping($shippingData=array()) {
        $mode = ($shippingData['mode']) ? $shippingData['mode'] : null;
        $shippingDate = ($shippingData['shippingDate']) ? $shippingData['shippingDate'] : null;
        $paymentId = ($shippingData['paymentId']) ? $shippingData['paymentId'] : null;

        $shipping = new Shipping();
        $shipping->setMode($mode);
        $shipping->setShippingDate($shippingDate);
        $shipping->setPaymentId($paymentId);

        $daoShipping = new ShippingDAO();
        $daoShipping->addShipping($shipping);
    }
}

?>