<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;
use App\User;
use App\Book;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        //Find User
        //Change User name
        //Save user
        /*
        $user = User::find(1);
        $user->name = "new name"; //Change this
        $user->save();
        */

        //Create New User
        /*
        $new_user = new User;
        $new_user->name = 'Zauri1';
        $new_user->email = 'zaur1@gmail.com';
        $new_user->password = bcrypt(12345678);
        $new_user->save();
        */
        // $book =  new Book;
        // $book->title = "Romeo And Juliet";
        // $book->author = "Wiliam Shekspear";
        // $book->amount = 100;
        // $book->save();

        return view('welcome');
    }


    public function showRegForm()
    {
        return view('regform');
    }

    /**
     * [register description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function register(StoreUser $request)
    {
        dd($request->all());
    }
}
