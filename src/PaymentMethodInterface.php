<?php

namespace App;

interface PaymentMethodInterface
{
    public function makePayment(): string;
}
