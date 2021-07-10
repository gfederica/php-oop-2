<?php
class Products {
    use Premium;

    public $productName;
    private $shipmentPrice;
    private $productPrice;

    function __construct($productName, $productPrice, $shipmentPrice) {
        $this->productName = $productName;
        $this->productPrice = $productPrice;
        $this->shipmentPrice = $shipmentPrice;
    }

    public function setFinalShippingPrice($user) {
        if($user->premiumType == 'free_shipment') {
            return $this->shipmentPrice = 0 . " €";
        } else {
            return $this->shipmentPrice . " €";
        }
    }
    public function setFinalPrice($user) {
        if($user->premiumType == '20_discount') {
            return $this->productPrice = $this->productPrice * 0.8 . " €";
            return $this->shipmentPrice = 0 . " €";
        } else {
            return $this->productPrice . " €";
        }
    }
    public function getBasicShipmentPrice(){
        return $this->shipmentPrice;
    }
    public function getBasicProdutPrice(){
        return $this->productPrice;
    }
}

