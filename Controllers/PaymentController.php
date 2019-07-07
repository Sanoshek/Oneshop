<?php

namespace Oneshop\Controllers;

include 'Models/Payment.php';
include 'DAO/PaymentDAO.php';

use Oneshop\Models\Payment;
use Oneshop\DAO\PaymentDAO;

class PaymentController {

    public function __construct() {}

    public function addPayment($paymentData=array()) {
        $orderId = ($paymentData['orderId']) ? $paymentData['orderId'] : null;
        $mode = ($paymentData['mode']) ? $paymentData['mode'] : null;
        $date = ($paymentData['date']) ? $paymentData['date'] : null;

        var_dump(array('toto'));
        $payment = new Payment();
        $payment->setOrderId($orderId);
        $payment->setMode($mode);
        $payment->setDate($date);

        $daoPayment = new PaymentDAO();
        $daoPayment->addPayment($payment);
    }
}

?>