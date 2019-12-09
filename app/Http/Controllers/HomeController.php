<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //abort(301);
        //command to publush error pages
        // php artisan vendor:publish --tag=laravel-errors
        // https://laravel.com/docs/5.8/errors
        
        //THORWING CUSTOM EXCEPTION
        //throw new \Exception("Some Exception");
        //throw new \App\Exceptions\DummyException("Some Exception");

        // Storage::disk('public')->put('file2.txt', 'some text');
        // echo Storage::url('file2.txt');
        // die;
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function noAuth()
    {
        echo 'no Auth route...';
    }

}
