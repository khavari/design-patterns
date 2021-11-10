<?php

namespace strategy\Payment;

class PayMethod_2 implements PaymentInterface
{

    public function pay($amount = 0)
    {
        return $amount;
    }
}
