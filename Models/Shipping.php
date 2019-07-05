<?php

namespace my_shop\Models;

class Shipping {
    private $shippingId;
    private $mode;
    private $shippingDate;
    private $paymentId;

    public function __construct() {}

    public function getShippingDetails() {
        return array(
            'shippingId' => $this->shippingId,
            'mode' => $this->mode,
            'shippingDate' => $this->shippingDate,
            'paymentId' => $this->paymentId
        );
    }

    public function setMode($mode) {
        $this->mode = $mode;
    }

    public function setShippingDate($shippingDate) {
        $this->shippingDate = $shippingDate;
    }

    public function setPaymentId($paymentId) {
        $this->paymentId = $paymentId;
    }

    public function getMode() {
        return $this->mode;
    }

    public function getShippingDate() {
        return $this->shippingDate;
    }

    public function getPaymentId() {
        return $this->paymentId;
    }
}

?>