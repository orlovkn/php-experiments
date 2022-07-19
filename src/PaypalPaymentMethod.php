<?php

namespace App;

class PaypalPaymentMethod implements PaymentMethod
{
    public function makePayment(): string
    {
        return "make paypal";
    }
}
