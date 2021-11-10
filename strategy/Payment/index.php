<?php

namespace strategy\Payment;
require_once 'Payment.php';

$payment = new Payment(1200,2);
$payment->setMethod(2);
$result = $payment->payAmount();
var_dump($result);

var_dump('--------------');

$payment = new Payment();
$payment->setAmount(25000);
$payment->setMethod(1);
$result = $payment->payAmount();
var_dump($result);
