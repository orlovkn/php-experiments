<?php

namespace App;

class VisaPaymentMethod implements PaymentMethod
{
    public function makePayment(): string
    {
        return "make visa";
    }
}
