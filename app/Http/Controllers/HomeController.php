<?php

namespace App\Http\Controllers;

use App\Models\account;
use Illuminate\Http\Request;
use Illuminate\Console\View\Components\Info;

class HomeController extends Controller
{
    function welcome(){
        return view('welcome');
    }
    function about(){
        return view('about');
    }
    function booking(){
        return view('booking');
    }
    function contact(){
        return view('contact');
    }
    function gallery(){
        return view('gallery');
    }
    function news(){
        return view('news');
    }
    function selectBooking(){
        return view('select-booking');
    }
    function signIn(){
        return view('sign-in');
    }
    function signUp(){
        return view('sign-up');
    }
    function submitBooking(){
        return view('submit-booking');
    }

    //dang ki tai khoan
    function info(Request $request){
        $info = new account();
        $info->name = $request->input('name');
        $info->email = $request->input('email');
        $info->password = $request->input('password');
        $info->save();
    }
}
