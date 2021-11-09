<?php

namespace strategy\Payment;
require_once 'PaymentInterface.php';

interface PaymentInterface
{
    public function pay();
}
