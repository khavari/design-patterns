<?php

namespace strategy\Payment\Tests;

require_once './strategy/Payment/Payment.php';

use strategy\Payment\Payment;
use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{

    /**
     * @test
     */
    public function it_should_set_and_get_amount()
    {
        $payment = new Payment(500);
        $this->assertEquals(500, $payment->getAmount());

        $payment->setAmount(1000);
        $result = $payment->payAmount();

        $this->assertEquals(1000, $payment->getAmount());
        $this->assertEquals($result, $payment->getAmount());
    }


    /**
     * @test
     */
    public function it_should_set_method()
    {
        $payment = new Payment(100);
        $this->assertEquals(1, $payment->getMethod());

        $payment->setMethod(2);
        $this->assertEquals(2, $payment->getMethod());
    }

}
