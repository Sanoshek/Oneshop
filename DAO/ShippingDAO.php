<?php

namespace Oneshop\DAO;

include_once 'Database.php';

use Oneshop\DAO\Database;

class ShippingDAO {
    private $bdd;

    public function __construct() {
        $this->bdd = Database::getConnection();
    }

    public function addShipping($shipping) {
        $req = $this->bdd->prepare('insert into shipping (mode, shipping_date, payment_id_payment) 
        values  (:mode, :shipping_date, :payment_id_payment)');
        $req->execute(array(
            'mode' => $shipping->getMode(),
            'shipping_date' => $shipping->getShippingDate(),
            'payment_id_payment' => $shipping->getPaymentId()
        ));
    }
}

?>