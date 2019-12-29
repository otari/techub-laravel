<?php

namespace App;

class UserService
{
    public function __construct()
    {
        //
    }

    public function helloFromService()
    {
        echo "helloFromService";
    }

    public function notGoodFunc()
    {
        //throw new \Exception('Something went wrong');
    }
}
