<?php
include __DIR__ . '/clients.php';
class Payment extends Client
{
    function __construct($_id, $_cardNumber, $_expireDate, int $_cvv)
    {
        parent::__construct($_id);
        $this->cardNumber = $_cardNumber;
        $this->expireDate = $_expireDate;
        $this->cvv = $_cvv;
    }



    public function getAvailablity()
    {
        if ($this->expireDate < date('d-m-Y')) {
            $this->paymentAvailablity = false;
        } else $this->paymentAvailablity = true;
    }
}

$cardOne = new Payment(1, '123', '02-05-2010', 333);
$cardOne->getAvailablity();
var_dump($cardOne);

$cardTwo = new Payment(2, '123', '02-05-2030', 666);
$cardTwo->getAvailablity();
var_dump($cardTwo);
