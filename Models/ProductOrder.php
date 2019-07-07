<?php
namespace Oneshop\Models;

class ProductOrder {
    private $orderId;
    private $clientId;
    private $productId;
    private $amount;
    private $date;

    public function __construct() {}

    public function getProductOrder() {
        return array(
            'orderId' => $this->orderId,
            'clientId' => $this->clientId,
            'productId' => $this->productId,
            'amount' => $this->amount,
            'date' => $this->date
        );
    }

    public function setClientId($clientId) {
        $this->clientId = $clientId;
    }

    public function setProductId($productId) {
        $this->productId = $productId;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getClientId() {
        return $this->clientId;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getDate() {
        return $this->date;
    }
}