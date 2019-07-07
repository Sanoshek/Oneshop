<?php

namespace Oneshop\Models;

class Payment {
    private $orderId;
    private $mode;
    private $date;

    public function __construct() {}

    public function getPaymentDetails() {
        return array(
            'orderId' => $this->orderId,
            'mode' => $this->mode,
            'date' => $this->date
        );
    }

    public function setOrderId($orderId) {
        $this->orderId = $orderId;
    }

    public function setMode($mode) {
        $this->mode = $mode;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getOrderId() {
        return $this->orderId;
    }

    public function getMode() {
        return $this->mode;
    }

    public function getDate() {
        return $this->date;
    }
}

?>