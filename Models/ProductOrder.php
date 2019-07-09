<?php
namespace Oneshop\Models;

class ProductOrder {
    private $orderId;
    private $clientId;
    private $productIdss;
    private $amountss;
    private $date;

    public function __construct() {}

    public function getProductOrder() {
        return array(
            'orderId' => $this->orderId,
            'clientId' => $this->clientId,
            'productIds' => $this->productIds,
            'amounts' => $this->amounts,
            'date' => $this->date
        );
    }

    public function setClientId($clientId) {
        $this->clientId = $clientId;
    }

    public function setProductIds($productIds) {
        $this->productIds = $productIds;
    }

    public function setAmounts($amounts) {
        $this->amounts = $amounts;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getClientId() {
        return $this->clientId;
    }

    public function getProductIds() {
        return $this->productIds;
    }

    public function getAmounts() {
        return $this->amounts;
    }

    public function getDate() {
        return $this->date;
    }
}