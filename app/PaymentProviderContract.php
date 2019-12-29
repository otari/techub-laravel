<?php

namespace App;

interface PaymentProviderContract
{
    public function makePayment();
}
