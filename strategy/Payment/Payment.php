<?php

namespace strategy\Payment;

require_once 'PayMethod_1.php';
require_once 'PayMethod_2.php';

class Payment
{
    public $amount;
    public $method;

    public function __construct($amount = 0, $method = 1)
    {
        $this->amount = $amount;
        $this->method = $method;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function payAmount()
    {
        switch ($this->method) {
            case 1:
                $payment = new PayMethod_1();
                break;
            case 2:
                $payment = new PayMethod_2();
                break;
            default:
                $payment = new PayMethod_1();
        }
        return $payment->pay($this->amount);
    }
}
