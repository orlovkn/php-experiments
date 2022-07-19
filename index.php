<?php

use App\PaymentProcess;
use App\PaypalPaymentMethod;
use App\VisaPaymentMethod;

include_once 'vendor/autoload.php';

$method = new PaypalPaymentMethod();

$paymentProcess = new PaymentProcess(method);
