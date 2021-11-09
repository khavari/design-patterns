<?php

namespace strategy\Payment;

class PayMethod_2 implements PaymentInterface
{

    public function pay($amount = 0)
    {
        echo('pay method 2: ' . $amount);
    }
}
