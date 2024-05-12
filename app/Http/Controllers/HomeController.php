<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
         if (Auth::check()) {
            $user=Auth::user()->usertype;
            if($user=='admin'){
                return view('admin.home');
                
            }else if ($user=='user'){
                return view('user.home');
            }
        } else{
            return redirect()->route('/');

        }   
    }

}
