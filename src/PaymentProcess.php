 <?php

namespace App;

use App\VisaPaymentProcess;

class PaymentProcess
{
    private PaymentMethodInterface $paymentMethod
    
    public function __construct(PaymentMethodInterface $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function pay(): string
    {
        return  $this->paymentMethod->makePayment();
    }
}
