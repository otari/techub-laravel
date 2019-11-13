<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;

class HomeController extends Controller
{
    public function index(Request $request)
    {
    	return view('welcome');
    }

    /**
     * [register description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function register(StoreUser $request)
    {
    	$request->validate(['title' => 'required']);
    }
}
