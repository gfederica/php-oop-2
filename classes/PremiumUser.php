<?php
require_once __DIR__ . "/User.php";

class PremiumUser extends User {
    use Premium;


    // funzione construct per ricavare sempre il tipo di premium
    function __construct($firstname, $lastname, $email, $premiumType) {
        parent::__construct($firstname, $lastname, $email);
        $this->premiumType = $premiumType;
    }

    // due tipi di premium (diamanti <i>): uno spedizione gratis, uno sconto del 20%;
    public function getFullName() {
        if($this->premiumType == 'free_shipment') {
            return parent::getFullName() . ' <i class="far fa-gem"></i>';
        } elseif($this->premiumType == '20_discount') {
            return parent::getFullName() . ' <i class="far fa-gem"></i><i class="far fa-gem"></i>';
        }
       
    }
}
