<?php

namespace strategy\Payment;

require_once 'PaymentInterface.php';

class PayMethod_2 implements PaymentInterface
{

    public function pay($amount = 0)
    {
        return $amount;
    }
}
