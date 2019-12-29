<?php

namespace App;

use App\PaymentProviderContract;

class BogPaymentProvider implements PaymentProviderContract
{
    public function hi()
    {
        return 'Hi BOG';
    }

    public function makePayment()
    {
        //
    }
}
