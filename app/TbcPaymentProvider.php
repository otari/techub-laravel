<?php

namespace App;

use App\PaymentProviderContract;

class TbcPaymentProvider implements PaymentProviderContract
{
    public function hi()
    {
        return 'Hi TBC';
    }

    public function makePayment()
    {
        //
    }
}
