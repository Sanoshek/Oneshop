<?php

namespace my_shop\DAO;

include 'Database.php';

use my_shop\DAO\Database;

class PaymentDAO {
    private $bdd;

    public function __construct() {
        $this->bdd = Database::getConnection();
    }

    public function addPayment($payment) {
        $req = $this->bdd->prepare('insert into payment (mode, date, command_id) values (:mode, :date, :command_id)');
        $req->execute(array(
            'mode' => $payment->getMode(),
            'date' => $payment->getDate(),
            'command_id' => $payment->getOrderId()
        ));
    }
}

?>